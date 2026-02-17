<?php
$pageTitle = '404 | Colegio del Valle';
$activePage = '';
require __DIR__ . '/partials/header.php';
?>
<section class="max-w-[1300px] mx-auto px-6 py-16 text-center">
  <h1 class="text-3xl md:text-4xl font-bold tracking-tight">Pagina no encontrada</h1>
  <p class="mt-4 text-slate-600">La ruta que buscas no existe. Regresa al inicio.</p>
  <?php
  $baseUrl = defined('BASE_URL') ? BASE_URL : rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
  if ($baseUrl === '/') {
      $baseUrl = '';
  }
  ?>
  <a class="mt-6 inline-block rounded-lg bg-slate-900 text-white px-4 py-2 text-sm font-semibold" href="<?= $baseUrl ?>/">Ir al inicio</a>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>