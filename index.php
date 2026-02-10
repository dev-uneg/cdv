<?php
require __DIR__ . '/vendor/autoload.php';

$router = new AltoRouter();
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/');
if ($basePath === '/') {
    $basePath = '';
}
$router->setBasePath($basePath);
define('BASE_URL', $basePath);

$router->map('GET', '/', 'pages/home.php', 'home');
$router->map('GET', '/nosotros', 'pages/nosotros.php', 'nosotros');
$router->map('GET', '/servicios', 'pages/servicios.php', 'servicios');
$router->map('GET', '/contacto', 'pages/contacto.php', 'contacto');

$match = $router->match();

if ($match && is_string($match['target'])) {
    require __DIR__ . '/' . $match['target'];
    exit;
}

http_response_code(404);
require __DIR__ . '/pages/404.php';
