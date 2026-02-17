<?php
// ---- Bootstrap ----
require __DIR__ . '/vendor/autoload.php';

// ---- Router setup ----
$router = new AltoRouter();
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/');
if ($basePath === '/') {
    $basePath = '';
}
$router->setBasePath($basePath);
define('BASE_URL', $basePath);

// ---- Public pages (static) ----
$router->map('GET', '/', 'pages/home.php', 'home');
$router->map('GET', '/nosotros', 'pages/nosotros.php', 'nosotros');
$router->map('GET', '/servicios', 'pages/servicios.php', 'servicios');
$router->map('GET', '/contacto', 'pages/contacto.php', 'contacto');

$router->map('GET', '/kinder', 'pages/kinder.php', 'kinder');
$router->map('GET', '/pre-first', 'pages/pre-first.php', 'pre-first');
$router->map('GET', '/primaria', 'pages/primaria.php', 'primaria');
$router->map('GET', '/secundaria', 'pages/secundaria.php', 'secundaria');
$router->map('GET', '/preparatoria', 'pages/preparatoria.php', 'preparatoria');

// ---- News index ----
$router->map('GET', '/noticias', 'pages/noticias/index.php', 'noticias');

// ---- News post routes ----
$newsRoutes = include __DIR__ . '/pages/noticias/routes.php';
foreach ($newsRoutes as $slug => $file) {
    $router->map('GET', '/noticias/' . $slug, $file, 'noticias-' . $slug);
}

// ---- Blog index ----
$router->map('GET', '/blog', 'pages/blog/index.php', 'blog');

// ---- Blog post routes ----
$blogRoutes = include __DIR__ . '/pages/blog/routes.php';
foreach ($blogRoutes as $slug => $file) {
    $router->map('GET', '/blog/' . $slug, $file, 'blog-' . $slug);
}

// ---- Other pages ----
$router->map('GET', '/formas-de-pago', 'pages/formas-de-pago.php', 'formas-de-pago');
$router->map('GET', '/beneficios', 'pages/beneficios.php', 'beneficios');
$router->map('GET', '/reglamentos', 'pages/reglamentos.php', 'reglamentos');
$router->map('GET', '/buzon-del-rector', 'pages/buzon-del-rector.php', 'buzon-del-rector');
$router->map('GET', '/dejanos-saber-de-ti', 'pages/dejanos-saber-de-ti.php', 'dejanos-saber-de-ti');
$router->map('GET', '/comunidad/alumnos', 'pages/comunidad-alumnos.php', 'comunidad-alumnos');
$router->map('GET', '/comunidad/egresados', 'pages/comunidad-egresados.php', 'comunidad-egresados');
$router->map('GET', '/comunidad/docentes', 'pages/comunidad-docentes.php', 'comunidad-docentes');
$router->map('GET', '/comunidad/talleres', 'pages/comunidad-talleres.php', 'comunidad-talleres');
$router->map('GET', '/comunidad/calendario-academico', 'pages/comunidad-calendario-academico.php', 'comunidad-calendario');
$router->map('GET', '/ixu', 'pages/ixu.php', 'ixu');

// ---- Route dispatch ----
$match = $router->match();

// ---- Render matched route or fallback ----
if ($match && is_string($match['target'])) {
    require __DIR__ . '/' . $match['target'];
    exit;
}

// ---- 404 ----
http_response_code(404);
require __DIR__ . '/pages/404.php';
