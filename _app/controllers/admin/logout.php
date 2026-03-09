<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';

$_SESSION = [];
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params['path'],
        $params['domain'],
        (bool) $params['secure'],
        (bool) $params['httponly']
    );
}
session_destroy();

$base = admin_base_path();
header('Location: ' . $base . '/admin/login', true, 302);
exit;
