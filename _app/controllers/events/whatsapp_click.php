<?php
declare(strict_types=1);

require __DIR__ . '/../../helpers/leads_db.php';

/**
 * @param string $host
 * @return bool
 */
function whatsapp_click_host_allowed(string $host): bool
{
    $value = strtolower(trim($host));
    if ($value === '') {
        return false;
    }

    $allowed = [
        'coldelvalle.edu.mx',
        'www.coldelvalle.edu.mx',
        'localhost',
        '127.0.0.1',
    ];

    if (in_array($value, $allowed, true)) {
        return true;
    }

    return str_ends_with($value, '.coldelvalle.edu.mx');
}

/**
 * @param string $url
 * @return string
 */
function whatsapp_click_url_host(string $url): string
{
    $host = parse_url($url, PHP_URL_HOST);
    return is_string($host) ? strtolower(trim($host)) : '';
}

/**
 * @param string $targetUrl
 * @return bool
 */
function whatsapp_click_target_allowed(string $targetUrl): bool
{
    $raw = trim($targetUrl);
    if ($raw === '' || strlen($raw) > 500) {
        return false;
    }

    $host = whatsapp_click_url_host($raw);
    if ($host === '') {
        return false;
    }

    if ($host !== 'wa.me' && $host !== 'api.whatsapp.com') {
        return false;
    }

    if (whatsapp_click_contains_suspicious_payload($raw)) {
        return false;
    }

    return true;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'Metodo no permitido']);
    exit;
}

$raw = file_get_contents('php://input');
$payload = [];
if (is_string($raw) && trim($raw) !== '') {
    $decoded = json_decode($raw, true);
    if (is_array($decoded)) {
        $payload = $decoded;
    }
}
if ($payload === []) {
    $payload = $_POST;
}

$pagePath = trim((string) ($payload['page_path'] ?? ($_SERVER['HTTP_X_PAGE_PATH'] ?? '')));
$targetUrl = trim((string) ($payload['target_url'] ?? ($_SERVER['HTTP_X_TARGET_URL'] ?? '')));
$referrerUrl = trim((string) ($payload['referrer_url'] ?? ($_SERVER['HTTP_REFERER'] ?? '')));
$originUrl = trim((string) ($_SERVER['HTTP_ORIGIN'] ?? ''));
$ip = (string) ($_SERVER['REMOTE_ADDR'] ?? '');

if ($pagePath !== '') {
    if (strpos($pagePath, '/') !== 0) {
        $parsed = parse_url($pagePath, PHP_URL_PATH);
        $pagePath = is_string($parsed) ? trim($parsed) : '';
    }
}

$isPagePathValid = $pagePath !== '' && preg_match('~^/[A-Za-z0-9/_\\-\\.]*$~', $pagePath) === 1;
$isTargetAllowed = whatsapp_click_target_allowed($targetUrl);
$isPayloadSuspicious = whatsapp_click_contains_suspicious_payload($pagePath)
    || whatsapp_click_contains_suspicious_payload($targetUrl)
    || whatsapp_click_contains_suspicious_payload($referrerUrl)
    || whatsapp_click_contains_suspicious_payload((string) ($_SERVER['HTTP_USER_AGENT'] ?? ''));

$originHost = whatsapp_click_url_host($originUrl);
$refererHost = whatsapp_click_url_host((string) ($_SERVER['HTTP_REFERER'] ?? ''));
$isSourceTrusted = whatsapp_click_host_allowed($originHost) || whatsapp_click_host_allowed($refererHost);

if (!$isSourceTrusted || !$isPagePathValid || !$isTargetAllowed || $isPayloadSuspicious) {
    // Return 204 to avoid giving attackers feedback.
    http_response_code(204);
    exit;
}
if (page_path_is_dev_noise($pagePath)) {
    http_response_code(204);
    exit;
}

if (whatsapp_click_is_rate_limited($ip, 60, 60)) {
    http_response_code(429);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'Rate limit exceeded']);
    exit;
}

$userAgent = (string) ($_SERVER['HTTP_USER_AGENT'] ?? '');
$ua = strtolower($userAgent);
$deviceType = 'desktop';
if (strpos($ua, 'tablet') !== false || strpos($ua, 'ipad') !== false) {
    $deviceType = 'tablet';
} elseif (
    strpos($ua, 'mobile') !== false ||
    strpos($ua, 'android') !== false ||
    strpos($ua, 'iphone') !== false
) {
    $deviceType = 'mobile';
}

$inserted = whatsapp_click_db_insert([
    'page_path' => $pagePath,
    'target_url' => $targetUrl,
    'device_type' => $deviceType,
    'referrer_url' => $referrerUrl,
    'ip' => $ip !== '' ? $ip : null,
    'user_agent' => $userAgent !== '' ? $userAgent : null,
    'created_at' => date('c'),
]);

if (!$inserted) {
    http_response_code(500);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'No se pudo registrar el evento']);
    exit;
}

http_response_code(204);
exit;
