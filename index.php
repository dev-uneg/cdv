<?php
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$path = '/' . trim($path, '/');
if ($path === '//') {
    $path = '/';
}

$routes = [
    '/' => 'pages/home.php',
    '/nosotros' => 'pages/nosotros.php',
    '/servicios' => 'pages/servicios.php',
    '/contacto' => 'pages/contacto.php',
];

if (isset($routes[$path])) {
    require __DIR__ . '/' . $routes[$path];
    exit;
}

http_response_code(404);
$pageTitle = '404 | Colegio del Valle';
$activePage = '';
require __DIR__ . '/pages/partials/header.php';
?>
<section class="text-center">
  <h1 class="text-3xl md:text-4xl font-bold tracking-tight">Pagina no encontrada</h1>
  <p class="mt-4 text-slate-600">La ruta que buscas no existe. Regresa al inicio.</p>
  <a class="mt-6 inline-block rounded-lg bg-slate-900 text-white px-4 py-2 text-sm font-semibold" href="/">Ir al inicio</a>
</section>
<?php require __DIR__ . '/pages/partials/footer.php'; ?>
