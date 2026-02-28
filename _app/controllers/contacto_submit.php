<?php
declare(strict_types=1);

function contacto_respond_json(int $status, array $payload): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($payload);
    exit;
}

function contacto_expects_html(): bool
{
    $accept = $_SERVER['HTTP_ACCEPT'] ?? '';
    return strpos($accept, 'text/html') !== false;
}

function contacto_redirect(bool $ok): void
{
    $baseUrl = defined('BASE_URL') ? BASE_URL : '';
    $target = $ok ? '/gracias' : '/contacto?error=1';
    header('Location: ' . $baseUrl . $target, true, 302);
    exit;
}

function contacto_fail(string $message, int $status = 400): void
{
    if (contacto_expects_html()) {
        contacto_redirect(false);
    }

    contacto_respond_json($status, [
        'success' => false,
        'message' => $message,
    ]);
}

function contacto_pipedrive_request(string $endpoint, string $token, array $payload): array
{
    $ch = curl_init($endpoint);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json',
            'x-api-token: ' . $token,
        ],
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_TIMEOUT => 15,
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($response === false) {
        return [
            'ok' => false,
            'status' => 500,
            'error' => $error ?: 'No se pudo conectar con Pipedrive.',
            'data' => null,
        ];
    }

    $data = json_decode($response, true);
    return [
        'ok' => $status >= 200 && $status < 300,
        'status' => $status,
        'error' => $data['error'] ?? null,
        'data' => $data,
    ];
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    contacto_fail('Metodo no permitido.', 405);
}

$honeypot = trim((string) ($_POST['company_website'] ?? ''));
if ($honeypot !== '') {
    contacto_fail('Solicitud invalida.');
}

$fullName = trim((string) ($_POST['full_name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$interest = trim((string) ($_POST['interest'] ?? ''));
$source = trim((string) ($_POST['source'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$channel = trim((string) ($_POST['channel'] ?? 'Sitio web'));
$medium = trim((string) ($_POST['medium'] ?? 'Sitio web'));
$privacyAccepted = isset($_POST['privacy']);

if ($fullName === '' || $email === '' || $phone === '' || $interest === '' || !$privacyAccepted) {
    contacto_fail('Faltan campos obligatorios.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    contacto_fail('Correo invalido.');
}

$config = [];
$configPath = __DIR__ . '/../config/pipedrive.local.php';
if (file_exists($configPath)) {
    $config = require $configPath;
}

$token = (string) ($config['api_token'] ?? getenv('PIPEDRIVE_API_TOKEN') ?? '');
if ($token === '' || $token === 'PON_AQUI_TU_TOKEN') {
    contacto_fail('Falta configurar el API token de Pipedrive.', 500);
}

$customInterestField = (string) ($config['custom_fields']['interest'] ?? '');
$customMediumField = (string) ($config['custom_fields']['medium'] ?? '');

$personPayload = [
    'name' => $fullName,
    'email' => [[
        'value' => $email,
        'primary' => true,
    ]],
    'phone' => [[
        'value' => $phone,
        'primary' => true,
    ]],
];

if ($customInterestField !== '') {
    $personPayload[$customInterestField] = $interest;
}
if ($customMediumField !== '') {
    $personPayload[$customMediumField] = $medium;
}

$personResponse = contacto_pipedrive_request('https://api.pipedrive.com/v1/persons', $token, $personPayload);
if (!$personResponse['ok'] || !($personResponse['data']['success'] ?? false)) {
    contacto_fail('No se pudo crear el contacto en Pipedrive.', 502);
}

$personId = $personResponse['data']['data']['id'] ?? null;
if ($personId && ($interest !== '' || $source !== '' || $message !== '' || $channel !== '' || $medium !== '')) {
    $noteLines = [];
    if ($channel !== '') {
        $noteLines[] = 'Canal: ' . $channel;
    }
    if ($medium !== '') {
        $noteLines[] = 'Medio: ' . $medium;
    }
    if ($interest !== '') {
        $noteLines[] = 'Interes: ' . $interest;
    }
    if ($source !== '') {
        $noteLines[] = 'Como nos conociste: ' . $source;
    }
    if ($message !== '') {
        $noteLines[] = 'Mensaje: ' . $message;
    }

    $notePayload = [
        'person_id' => $personId,
        'content' => implode("\n", $noteLines),
    ];
    contacto_pipedrive_request('https://api.pipedrive.com/v1/notes', $token, $notePayload);
}

if (contacto_expects_html()) {
    contacto_redirect(true);
}

contacto_respond_json(200, [
    'success' => true,
    'person_id' => $personId,
]);
