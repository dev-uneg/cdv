<?php
require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/');
if ($basePath === '/') {
    $basePath = '';
}
$router->setBasePath($basePath);
define('BASE_URL', $basePath);

// Public site: core landing and institutional pages.
$router->map('GET', '/', '_app/pages/home.php', 'home');
$router->map('GET', '/nosotros/', '_app/pages/nosotros.php', 'nosotros');
$router->map('GET', '/servicios', '_app/pages/servicios.php', 'servicios');

// Public site: LP General and thank-you flow.
$router->map('GET', '/lp-general', '_app/pages/lp-general.php', 'lp-general');
$router->map('GET', '/lp-general/gracias', '_app/pages/lp-general-gracias.php', 'lp-general-gracias');

// Public site: contact, privacy and generic thank-you page.
$router->map('GET', '/contacto/', '_app/pages/contacto.php', 'contacto');
$router->map('GET', '/aviso-de-privacidad/', '_app/pages/aviso-de-privacidad.php', 'aviso-de-privacidad');
$router->map('GET', '/gracias', '_app/pages/gracias.php', 'gracias');

// Public API endpoints: lead capture and event tracking.
$router->map('POST', '/api/contacto', '_app/controllers/contacto_submit.php', 'api-contacto-submit');
$router->map('POST', '/api/contacto-landing', '_app/controllers/contacto_landing_submit.php', 'api-contacto-landing-submit');
$router->map('POST', '/api/buzon-del-rector', '_app/controllers/buzon_rector_submit.php', 'api-buzon-rector-submit');
$router->map('POST', '/api/egresados-registro', '_app/controllers/egresados_submit.php', 'api-egresados-registro-submit');
$router->map('POST', '/api/events/whatsapp-click', '_app/controllers/events/whatsapp_click.php', 'api-events-whatsapp-click');
$router->map('POST', '/api/events/engagement', '_app/controllers/events/engagement.php', 'api-events-engagement');
// Admin
$router->map('GET|POST', '/admin/login', '_app/controllers/admin/login.php', 'admin-login');
$router->map('GET', '/admin/panel', '_app/controllers/admin/panel.php', 'admin-panel');
$router->map('GET', '/admin/reports', '_app/controllers/admin/reports_index.php', 'admin-reports-index');
$router->map('GET', '/admin/reports/cdv-mensual', '_app/controllers/admin/reports_cdv.php', 'admin-reports-cdv-mensual');
$router->map('GET', '/admin/reports/engagement-mensual', '_app/controllers/admin/reports_engagement.php', 'admin-reports-engagement-mensual');
$router->map('GET', '/admin/pipedrive-owner-ids', '_app/controllers/admin/pipedrive_owner_ids.php', 'admin-pipedrive-owner-ids');
$router->map('GET', '/admin/api/pipedrive-users', '_app/controllers/admin/pipedrive_users_api.php', 'admin-api-pipedrive-users');
$router->map('GET', '/admin/attacks/report-fecha', '_app/controllers/admin/attacks_report_date.php', 'admin-attacks-report-date');
$router->map('GET', '/admin/contacto', '_app/controllers/admin/contacto_index.php', 'admin-contacto-index');
$router->map('GET', '/admin/contacto/show', '_app/controllers/admin/contacto_show.php', 'admin-contacto-show');
$router->map('POST', '/admin/contacto/delete', '_app/controllers/admin/contacto_delete.php', 'admin-contacto-delete');
$router->map('GET', '/admin/contacto/export', '_app/controllers/admin/contacto_export.php', 'admin-contacto-export');
$router->map('GET', '/admin/buzon-rector', '_app/controllers/admin/buzon_index.php', 'admin-buzon-index');
$router->map('GET', '/admin/buzon-rector/show', '_app/controllers/admin/buzon_show.php', 'admin-buzon-show');
$router->map('POST', '/admin/buzon-rector/delete', '_app/controllers/admin/buzon_delete.php', 'admin-buzon-delete');
$router->map('GET', '/admin/buzon-rector/export', '_app/controllers/admin/buzon_export.php', 'admin-buzon-export');
$router->map('GET', '/admin/egresados', '_app/controllers/admin/egresados_index.php', 'admin-egresados-index');
$router->map('GET', '/admin/egresados/show', '_app/controllers/admin/egresados_show.php', 'admin-egresados-show');
$router->map('POST', '/admin/egresados/delete', '_app/controllers/admin/egresados_delete.php', 'admin-egresados-delete');
$router->map('GET', '/admin/egresados/export', '_app/controllers/admin/egresados_export.php', 'admin-egresados-export');
$router->map('GET', '/admin/logout', '_app/controllers/admin/logout.php', 'admin-logout');

// Public site: academic offer pages (current canonical URLs + aliases).
$router->map('GET', '/oferta-educativa/kinder', '_app/pages/kinder.php', 'kinder');
$router->map('GET', '/oferta-academica/kinder', '_app/pages/kinder.php', 'kinder-alias');
$router->map('GET', '/oferta-academica/kinder/', '_app/pages/kinder.php', 'kinder-alias-slash');
$router->map('GET', '/oferta-educativa/pre-first', '_app/pages/pre-first.php', 'pre-first');
$router->map('GET', '/oferta-educativa/primaria', '_app/pages/primaria.php', 'primaria');
$router->map('GET', '/oferta-academica/primaria', '_app/pages/primaria.php', 'primaria-alias');
$router->map('GET', '/oferta-academica/primaria/', '_app/pages/primaria.php', 'primaria-alias-slash');
$router->map('GET', '/oferta-educativa/secundaria', '_app/pages/secundaria.php', 'secundaria');
$router->map('GET', '/oferta-educativa/preparatoria', '_app/pages/preparatoria.php', 'preparatoria');

// News module: listing and dynamic article routes.
$router->map('GET', '/noticias/', '_app/pages/noticias/index.php', 'noticias');
$newsRoutes = include __DIR__ . '/pages/noticias/routes.php';
foreach ($newsRoutes as $slug => $file) {
    $router->map('GET', '/noticias/' . $slug, $file, 'noticias-' . $slug);
}

// Public site: additional institutional/community sections.
$router->map('GET', '/formas-de-pago', '_app/pages/formas-de-pago.php', 'formas-de-pago');
$router->map('GET', '/beneficios', '_app/pages/beneficios.php', 'beneficios');
$router->map('GET', '/reglamentos', '_app/pages/reglamentos.php', 'reglamentos');
$router->map('GET', '/buzon-del-rector', '_app/pages/buzon-del-rector.php', 'buzon-del-rector');
$router->map('GET', '/buzon-del-rector/gracias', '_app/pages/buzon-del-rector-gracias.php', 'buzon-del-rector-gracias');
$router->map('GET', '/dejanos-saber-de-ti', '_app/pages/dejanos-saber-de-ti.php', 'dejanos-saber-de-ti');
$router->map('GET', '/dejanos-saber-de-ti/gracias', '_app/pages/dejanos-saber-de-ti-gracias.php', 'dejanos-saber-de-ti-gracias');
$router->map('GET', '/comunidad/alumnos', '_app/pages/comunidad-alumnos.php', 'comunidad-alumnos');
$router->map('GET', '/egresados/', '_app/pages/comunidad-egresados.php', 'comunidad-egresados');
$router->map('GET', '/comunidad/docentes/', '_app/pages/comunidad-docentes.php', 'comunidad-docentes');
$router->map('GET', '/talleres-vespertinos/', '_app/pages/comunidad-talleres.php', 'comunidad-talleres');
$router->map('GET', '/comunidad/alumnos/calendarios-academicos/', '_app/pages/comunidad-calendario-academico.php', 'comunidad-calendario');
$router->map('GET', '/ixu/', '_app/pages/ixu.php', 'ixu');

// Development site (pages_des): canonical prefix is /desarrollo.
$router->map('GET', '/desarrollo/', '_app/pages_des/home.php', 'home-des');
$router->map('GET', '/desarrollo/nosotros/', '_app/pages_des/nosotros.php', 'home-des-nosotros');
$router->map('GET', '/desarrollo/oferta-academica/', '_app/pages_des/servicios.php', 'home-des-oferta-academica');
$router->map('GET', '/desarrollo/contacto/', '_app/pages_des/contacto.php', 'home-des-contacto');
$router->map('GET', '/desarrollo/ixu/', '_app/pages_des/ixu.php', 'home-des-ixu');
$router->map('GET', '/desarrollo/noticias/', '_app/pages_des/noticias.php', 'home-des-noticias');
$router->map('GET', '/desarrollo/oferta-educativa/kinder', '_app/pages_des/kinder.php', 'home-des-kinder');
$router->map('GET', '/desarrollo/oferta-educativa/pre-first', '_app/pages_des/pre-first.php', 'home-des-pre-first');
$router->map('GET', '/desarrollo/oferta-educativa/primaria', '_app/pages_des/primaria.php', 'home-des-primaria');
$router->map('GET', '/desarrollo/oferta-educativa/secundaria', '_app/pages_des/secundaria.php', 'home-des-secundaria');
$router->map('GET', '/desarrollo/oferta-educativa/preparatoria', '_app/pages_des/preparatoria.php', 'home-des-preparatoria');

// Router execution: dispatch target controller/page, fallback 404.
$match = $router->match();
if ($match && is_string($match['target'])) {
    require __DIR__ . '/../' . $match['target'];
    exit;
}

http_response_code(404);
require __DIR__ . '/pages/404.php';
