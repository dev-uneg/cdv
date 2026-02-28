<?php
require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/');
if ($basePath === '/') {
    $basePath = '';
}
$router->setBasePath($basePath);
define('BASE_URL', $basePath);

$router->map('GET', '/', '_app/pages/home.php', 'home');
$router->map('GET', '/nosotros', '_app/pages/nosotros.php', 'nosotros');
$router->map('GET', '/servicios', '_app/pages/servicios.php', 'servicios');
$router->map('GET', '/contacto', '_app/pages/contacto.php', 'contacto');
$router->map('GET', '/gracias', '_app/pages/gracias.php', 'gracias');
$router->map('POST', '/api/contacto', '_app/controllers/contacto_submit.php', 'api-contacto-submit');

$router->map('GET', '/kinder', '_app/pages/kinder.php', 'kinder');
$router->map('GET', '/pre-first', '_app/pages/pre-first.php', 'pre-first');
$router->map('GET', '/primaria', '_app/pages/primaria.php', 'primaria');
$router->map('GET', '/secundaria', '_app/pages/secundaria.php', 'secundaria');
$router->map('GET', '/preparatoria', '_app/pages/preparatoria.php', 'preparatoria');

$router->map('GET', '/noticias', '_app/pages/noticias/index.php', 'noticias');
$newsRoutes = include __DIR__ . '/pages/noticias/routes.php';
foreach ($newsRoutes as $slug => $file) {
    $router->map('GET', '/noticias/' . $slug, $file, 'noticias-' . $slug);
}

$router->map('GET', '/blog', '_app/pages/blog/index.php', 'blog');
$blogRoutes = include __DIR__ . '/pages/blog/routes.php';
foreach ($blogRoutes as $slug => $file) {
    $router->map('GET', '/blog/' . $slug, $file, 'blog-' . $slug);
}

$router->map('GET', '/formas-de-pago', '_app/pages/formas-de-pago.php', 'formas-de-pago');
$router->map('GET', '/beneficios', '_app/pages/beneficios.php', 'beneficios');
$router->map('GET', '/reglamentos', '_app/pages/reglamentos.php', 'reglamentos');
$router->map('GET', '/buzon-del-rector', '_app/pages/buzon-del-rector.php', 'buzon-del-rector');
$router->map('GET', '/dejanos-saber-de-ti', '_app/pages/dejanos-saber-de-ti.php', 'dejanos-saber-de-ti');
$router->map('GET', '/comunidad/alumnos', '_app/pages/comunidad-alumnos.php', 'comunidad-alumnos');
$router->map('GET', '/comunidad/egresados', '_app/pages/comunidad-egresados.php', 'comunidad-egresados');
$router->map('GET', '/comunidad/docentes', '_app/pages/comunidad-docentes.php', 'comunidad-docentes');
$router->map('GET', '/comunidad/talleres', '_app/pages/comunidad-talleres.php', 'comunidad-talleres');
$router->map('GET', '/comunidad/calendario-academico', '_app/pages/comunidad-calendario-academico.php', 'comunidad-calendario');
$router->map('GET', '/ixu', '_app/pages/ixu.php', 'ixu');

$match = $router->match();
if ($match && is_string($match['target'])) {
    require __DIR__ . '/../' . $match['target'];
    exit;
}

http_response_code(404);
require __DIR__ . '/pages/404.php';
