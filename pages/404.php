<?php
$pageTitle = '404 | Colegio del Valle';
$activePage = '';
require __DIR__ . '/partials/header.php';
?>
<section class="text-center">
  <h1 class="text-3xl md:text-4xl font-bold tracking-tight">Pagina no encontrada</h1>
  <p class="mt-4 text-slate-600">La ruta que buscas no existe. Regresa al inicio.</p>
  <?php
  $baseUrl = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
  if ($baseUrl === '/') {
      $baseUrl = '';
  }
  ?>
  <a class="mt-6 inline-block rounded-lg bg-slate-900 text-white px-4 py-2 text-sm font-semibold" href="<?= $baseUrl ?>/">Ir al inicio</a>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
