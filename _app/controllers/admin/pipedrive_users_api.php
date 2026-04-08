<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';

admin_require_auth();

header('Content-Type: application/json; charset=utf-8');

/**
 * @return array{token:string,company:string}
 */
function admin_pipedrive_config(): array
{
    $configPath = __DIR__ . '/../../config/pipedrive.local.php';
    $config = [];
    if (is_file($configPath)) {
        $loaded = require $configPath;
        if (is_array($loaded)) {
            $config = $loaded;
        }
    }

    $token = trim((string) ($config['api_token'] ?? getenv('PIPEDRIVE_API_TOKEN') ?? ''));
    $company = trim((string) ($config['company_domain'] ?? getenv('PIPEDRIVE_COMPANY_DOMAIN') ?? ''));

    return [
        'token' => $token,
        'company' => $company,
    ];
}

/**
 * @param string $url
 * @return array{ok:bool,status:int,error:string,payload:array}
 */
function admin_http_get_json(string $url): array
{
    $ch = curl_init($url);
    if ($ch === false) {
        return ['ok' => false, 'status' => 0, 'error' => 'No se pudo iniciar cURL.', 'payload' => []];
    }

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT => 8,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_HTTPHEADER => ['Accept: application/json'],
    ]);

    $raw = curl_exec($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err = curl_error($ch);
    curl_close($ch);

    if ($raw === false || $raw === '') {
        return ['ok' => false, 'status' => $status, 'error' => $err !== '' ? $err : 'Respuesta vacia.', 'payload' => []];
    }

    $decoded = json_decode((string) $raw, true);
    if (!is_array($decoded)) {
        return ['ok' => false, 'status' => $status, 'error' => 'Respuesta JSON invalida.', 'payload' => []];
    }

    return ['ok' => true, 'status' => $status, 'error' => '', 'payload' => $decoded];
}

$cfg = admin_pipedrive_config();
if ($cfg['token'] === '') {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Falta configurar api_token en _app/config/pipedrive.local.php o PIPEDRIVE_API_TOKEN.',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$apiBase = $cfg['company'] !== ''
    ? 'https://' . preg_replace('/[^a-z0-9\-]/i', '', $cfg['company']) . '.pipedrive.com/api/v1'
    : 'https://api.pipedrive.com/v1';

$url = $apiBase . '/users?api_token=' . rawurlencode($cfg['token']);
$resp = admin_http_get_json($url);

if (!$resp['ok']) {
    http_response_code(502);
    echo json_encode([
        'success' => false,
        'message' => 'No se pudo consultar Pipedrive.',
        'details' => $resp['error'],
        'status' => $resp['status'],
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$payload = $resp['payload'];
$ok = !empty($payload['success']);
$usersRaw = $payload['data'] ?? [];
if (!$ok || !is_array($usersRaw)) {
    http_response_code(502);
    echo json_encode([
        'success' => false,
        'message' => (string) ($payload['error'] ?? 'Pipedrive devolvio error al listar usuarios.'),
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$users = [];
foreach ($usersRaw as $row) {
    if (!is_array($row)) {
        continue;
    }
    $users[] = [
        'owner_id' => (int) ($row['id'] ?? 0),
        'name' => trim((string) ($row['name'] ?? '')),
        'email' => trim((string) ($row['email'] ?? '')),
        'active' => !empty($row['active_flag']),
    ];
}

usort($users, static function (array $a, array $b): int {
    return strcmp((string) $a['name'], (string) $b['name']);
});

echo json_encode([
    'success' => true,
    'count' => count($users),
    'users' => $users,
], JSON_UNESCAPED_UNICODE);
exit;
