<?php
declare(strict_types=1);

require_once __DIR__ . '/../helpers/leads_db.php';

function buzon_redirect(bool $ok, string $errorMessage = ''): void
{
    $baseUrl = defined('BASE_URL') ? BASE_URL : '';
    $target = $ok ? '/buzon-del-rector/gracias' : '/buzon-del-rector?error=1';
    if (!$ok && $errorMessage !== '') {
        $target .= '&error_msg=' . rawurlencode($errorMessage);
    }

    header('Location: ' . $baseUrl . $target, true, 302);
    exit;
}

function buzon_clean(string $value): string
{
    return trim(str_replace(["\r", "\n"], ' ', $value));
}

function buzon_debug_missing_fields(array $input): array
{
    $missing = [];
    if (buzon_clean((string) ($input['nombre'] ?? '')) === '') {
        $missing[] = 'nombre';
    }
    if (trim((string) ($input['email'] ?? '')) === '') {
        $missing[] = 'email';
    }
    if (buzon_clean((string) (($input['relacion'] ?? $input['relación'] ?? ''))) === '') {
        $missing[] = 'relacion';
    }
    if (buzon_clean((string) ($input['asunto'] ?? '')) === '') {
        $missing[] = 'asunto';
    }
    if (trim((string) ($input['mensaje'] ?? '')) === '') {
        $missing[] = 'mensaje';
    }
    if (!isset($input['aviso'])) {
        $missing[] = 'aviso';
    }

    return $missing;
}

function buzon_turnstile_verify(string $secret, string $response, string $remoteIp = ''): array
{
    $endpoint = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $payload = [
        'secret' => $secret,
        'response' => $response,
    ];

    if ($remoteIp !== '') {
        $payload['remoteip'] = $remoteIp;
    }

    $ch = curl_init($endpoint);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($payload),
        CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
        CURLOPT_TIMEOUT => 10,
    ]);

    $raw = curl_exec($ch);
    if ($raw === false) {
        $error = curl_error($ch);
        curl_close($ch);
        return [
            'success' => false,
            'error-codes' => ['curl-error: ' . buzon_clean($error)],
        ];
    }

    curl_close($ch);
    $decoded = json_decode($raw, true);
    if (!is_array($decoded)) {
        return [
            'success' => false,
            'error-codes' => ['invalid-json-response'],
        ];
    }

    return $decoded;
}

function buzon_webhook_post(string $url, array $payload): array
{
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json', 'Accept: application/json'],
        CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
        CURLOPT_CONNECTTIMEOUT => 8,
        CURLOPT_TIMEOUT => 30,
    ]);

    $raw = curl_exec($ch);
    if ($raw === false) {
        $errno = curl_errno($ch);
        $error = curl_error($ch);
        curl_close($ch);
        return [
            'ok' => false,
            'error' => 'cURL: ' . buzon_clean($error),
            'phase' => 'webhook_http',
            'retryable_timeout' => $errno === 28,
        ];
    }

    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($status < 200 || $status >= 300) {
        return [
            'ok' => false,
            'error' => 'HTTP ' . $status . ' body=' . buzon_clean((string) $raw),
            'phase' => 'webhook_http_status',
        ];
    }

    $decoded = json_decode((string) $raw, true);
    if (is_array($decoded) && isset($decoded['ok']) && !$decoded['ok']) {
        return [
            'ok' => false,
            'error' => buzon_clean((string) ($decoded['error'] ?? 'Webhook retorno ok=false')),
            'phase' => (string) ($decoded['phase'] ?? 'relay_application'),
        ];
    }

    return ['ok' => true, 'error' => '', 'phase' => 'ok'];
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    buzon_redirect(false, 'Metodo no permitido.');
}

$nombre = buzon_clean((string) ($_POST['nombre'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$telefono = buzon_clean((string) (($_POST['telefono'] ?? $_POST['teléfono'] ?? '')));
$relacion = buzon_clean((string) (($_POST['relacion'] ?? $_POST['relación'] ?? '')));
$asunto = buzon_clean((string) ($_POST['asunto'] ?? ''));
$mensaje = trim((string) ($_POST['mensaje'] ?? ''));
$avisoAceptado = isset($_POST['aviso']);

if ($nombre === '' || $email === '' || $relacion === '' || $asunto === '' || $mensaje === '' || !$avisoAceptado) {
    $missingFields = buzon_debug_missing_fields($_POST);
    $debugMessage = 'Faltan campos obligatorios';
    if ($missingFields !== []) {
        $debugMessage .= ' [debug: ' . implode(', ', $missingFields) . ']';
    }
    $debugMessage .= '.';
    buzon_redirect(false, $debugMessage);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    buzon_redirect(false, 'Correo electronico invalido.');
}

$turnstileConfig = [];
$turnstileConfigPath = __DIR__ . '/../config/turnstile.local.php';
if (file_exists($turnstileConfigPath)) {
    $turnstileConfig = require $turnstileConfigPath;
}

$turnstileSecret = (string) ($turnstileConfig['secret_key'] ?? getenv('TURNSTILE_SECRET_KEY') ?? '');
if ($turnstileSecret === '' || $turnstileSecret === 'PON_AQUI_TU_TURNSTILE_SECRET_KEY') {
    buzon_redirect(false, 'Falta configurar Cloudflare Turnstile.');
}

$turnstileResponse = trim((string) ($_POST['cf-turnstile-response'] ?? ''));
if ($turnstileResponse === '') {
    buzon_redirect(false, 'Completa la validacion de seguridad.');
}

$turnstileResult = buzon_turnstile_verify($turnstileSecret, $turnstileResponse, (string) ($_SERVER['REMOTE_ADDR'] ?? ''));
if (!($turnstileResult['success'] ?? false)) {
    $codes = $turnstileResult['error-codes'] ?? [];
    if (is_array($codes) && $codes !== []) {
        buzon_redirect(false, 'Turnstile rechazo la validacion: ' . implode(', ', $codes));
    }
    buzon_redirect(false, 'No se pudo validar tu solicitud. Intenta nuevamente.');
}

$buzonLeadId = buzon_rector_db_insert([
    'nombre' => $nombre,
    'email' => $email,
    'telefono' => $telefono,
    'relacion' => $relacion,
    'asunto' => $asunto,
    'mensaje' => $mensaje,
    'aviso_aceptado' => $avisoAceptado,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? null,
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
    'created_at' => date('c'),
]);
if (!$buzonLeadId) {
    error_log('[buzon_rector_submit] no se pudo guardar en buzon_rector_messages.');
}

$webhookUrl = trim((string) (getenv('BUZON_RECTOR_WEBHOOK_URL') ?: 'https://delvalle.qodexia.site/buzon-cdv-relay-mailer.php'));
$payload = [
    'nombre' => $nombre,
    'email' => $email,
    'telefono' => $telefono,
    'relacion' => $relacion,
    'asunto' => $asunto,
    'mensaje' => $mensaje,
    'created_at' => date('c'),
    'ip' => (string) ($_SERVER['REMOTE_ADDR'] ?? ''),
];

$webhookResult = buzon_webhook_post($webhookUrl, $payload);
if (!($webhookResult['ok'] ?? false) && !empty($webhookResult['retryable_timeout'])) {
    usleep(400000); // 0.4s backoff for transient network timeout
    $webhookResult = buzon_webhook_post($webhookUrl, $payload);
}
if (!($webhookResult['ok'] ?? false)) {
    $error = (string) ($webhookResult['error'] ?? 'Error desconocido en webhook');
    $phase = (string) ($webhookResult['phase'] ?? 'unknown');
    error_log('[buzon_rector_submit] webhook failed: ' . $error);
    buzon_redirect(false, 'No se pudo enviar el correo del buzón [fase=' . $phase . ']: ' . $error);
}

buzon_redirect(true);
