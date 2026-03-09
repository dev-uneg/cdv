<?php
declare(strict_types=1);

function admin_base_path(): string
{
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
    return $base === '.' ? '' : $base;
}

function admin_password(): string
{
    $configPath = __DIR__ . '/../config/admin.local.php';
    if (file_exists($configPath)) {
        $config = require $configPath;
        if (is_array($config) && !empty($config['password'])) {
            return (string) $config['password'];
        }
    }

    return (string) (getenv('CDV_ADMIN_PASSWORD') ?: '');
}

function admin_is_authenticated(): bool
{
    return !empty($_SESSION['cdv_admin_auth']);
}

function admin_require_auth(): void
{
    if (!admin_is_authenticated()) {
        $base = admin_base_path();
        header('Location: ' . $base . '/admin/login', true, 302);
        exit;
    }
}

function admin_verify_password(string $input): bool
{
    $stored = admin_password();
    if ($stored === '' || stripos($stored, 'PON_AQUI') !== false) {
        return false;
    }

    return hash_equals($stored, $input);
}

function admin_csrf_token(): string
{
    if (empty($_SESSION['cdv_admin_csrf'])) {
        $_SESSION['cdv_admin_csrf'] = bin2hex(random_bytes(16));
    }

    return (string) $_SESSION['cdv_admin_csrf'];
}
