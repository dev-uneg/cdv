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
$router->map('GET', '/nosotros/', '_app/pages/nosotros.php', 'nosotros');
$router->map('GET', '/nosotros', ['redirect' => '/nosotros/'], 'nosotros-legacy');
$router->map('GET', '/servicios', '_app/pages/servicios.php', 'servicios');
$router->map('GET', '/contacto/', '_app/pages/contacto.php', 'contacto');
$router->map('GET', '/contacto', ['redirect' => '/contacto/'], 'contacto-legacy');
$router->map('GET', '/gracias', '_app/pages/gracias.php', 'gracias');
$router->map('POST', '/api/contacto', '_app/controllers/contacto_submit.php', 'api-contacto-submit');
$router->map('POST', '/api/buzon-del-rector', '_app/controllers/buzon_rector_submit.php', 'api-buzon-rector-submit');

$router->map('GET', '/oferta-educativa/kinder', '_app/pages/kinder.php', 'kinder');
$router->map('GET', '/oferta-academica/kinder', '_app/pages/kinder.php', 'kinder-alias');
$router->map('GET', '/oferta-academica/kinder/', '_app/pages/kinder.php', 'kinder-alias-slash');
$router->map('GET', '/oferta-educativa/pre-first', '_app/pages/pre-first.php', 'pre-first');
$router->map('GET', '/oferta-educativa/primaria', '_app/pages/primaria.php', 'primaria');
$router->map('GET', '/oferta-academica/primaria', '_app/pages/primaria.php', 'primaria-alias');
$router->map('GET', '/oferta-academica/primaria/', '_app/pages/primaria.php', 'primaria-alias-slash');
$router->map('GET', '/oferta-educativa/secundaria', '_app/pages/secundaria.php', 'secundaria');
$router->map('GET', '/oferta-educativa/preparatoria', '_app/pages/preparatoria.php', 'preparatoria');

// Legacy slugs: redirect permanently to the new prefixed URLs.
$router->map('GET', '/kinder', ['redirect' => '/oferta-educativa/kinder'], 'kinder-legacy');
$router->map('GET', '/pre-first', ['redirect' => '/oferta-educativa/pre-first'], 'pre-first-legacy');
$router->map('GET', '/primaria', ['redirect' => '/oferta-educativa/primaria'], 'primaria-legacy');
$router->map('GET', '/secundaria', ['redirect' => '/oferta-educativa/secundaria'], 'secundaria-legacy');
$router->map('GET', '/preparatoria', ['redirect' => '/oferta-educativa/preparatoria'], 'preparatoria-legacy');

$router->map('GET', '/noticias/', '_app/pages/noticias/index.php', 'noticias');
$router->map('GET', '/noticias', ['redirect' => '/noticias/'], 'noticias-legacy');
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
$router->map('GET', '/buzon-del-rector/gracias', '_app/pages/buzon-del-rector-gracias.php', 'buzon-del-rector-gracias');
$router->map('GET', '/dejanos-saber-de-ti', '_app/pages/dejanos-saber-de-ti.php', 'dejanos-saber-de-ti');
$router->map('GET', '/comunidad/alumnos', '_app/pages/comunidad-alumnos.php', 'comunidad-alumnos');
$router->map('GET', '/comunidad/alumnos/', ['redirect' => '/comunidad/alumnos'], 'comunidad-alumnos-legacy');
$router->map('GET', '/egresados/', '_app/pages/comunidad-egresados.php', 'comunidad-egresados');
$router->map('GET', '/comunidad/egresados', ['redirect' => '/egresados/'], 'comunidad-egresados-legacy');
$router->map('GET', '/comunidad/egresados/', ['redirect' => '/egresados/'], 'comunidad-egresados-legacy-slash');
$router->map('GET', '/egresados', ['redirect' => '/egresados/'], 'egresados-legacy');
$router->map('GET', '/comunidad/docentes/', '_app/pages/comunidad-docentes.php', 'comunidad-docentes');
$router->map('GET', '/comunidad/docentes', ['redirect' => '/comunidad/docentes/'], 'comunidad-docentes-legacy');
$router->map('GET', '/talleres-vespertinos/', '_app/pages/comunidad-talleres.php', 'comunidad-talleres');
$router->map('GET', '/comunidad/talleres', ['redirect' => '/talleres-vespertinos/'], 'comunidad-talleres-legacy');
$router->map('GET', '/comunidad/talleres/', ['redirect' => '/talleres-vespertinos/'], 'comunidad-talleres-legacy-slash');
$router->map('GET', '/talleres-vespertinos', ['redirect' => '/talleres-vespertinos/'], 'talleres-vespertinos-legacy');
$router->map('GET', '/comunidad/alumnos/calendarios-academicos/', '_app/pages/comunidad-calendario-academico.php', 'comunidad-calendario');
$router->map('GET', '/comunidad/calendario-academico', ['redirect' => '/comunidad/alumnos/calendarios-academicos/'], 'comunidad-calendario-legacy');
$router->map('GET', '/comunidad/calendario-academico/', ['redirect' => '/comunidad/alumnos/calendarios-academicos/'], 'comunidad-calendario-legacy-slash');
$router->map('GET', '/comunidad/alumnos/calendarios-academicos', ['redirect' => '/comunidad/alumnos/calendarios-academicos/'], 'comunidad-calendario-new-noslash');
$router->map('GET', '/ixu/', '_app/pages/ixu.php', 'ixu');
$router->map('GET', '/ixu', ['redirect' => '/ixu/'], 'ixu-legacy');

$match = $router->match();
if ($match && is_array($match['target']) && isset($match['target']['redirect'])) {
    header('Location: ' . $basePath . $match['target']['redirect'], true, 301);
    exit;
}

if ($match && is_string($match['target'])) {
    require __DIR__ . '/../' . $match['target'];
    exit;
}

http_response_code(404);
require __DIR__ . '/pages/404.php';
