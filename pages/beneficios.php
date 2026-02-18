<?php
$pageTitle = 'Beneficios | Colegio del Valle';
$pageDescription = 'Beneficios de estudiar en Colegio del Valle: excelencia academica, comunidad y servicios para familias.';
$activePage = '';
require __DIR__ . '/partials/header.php';
?>

<section class="py-16 bg-white">
  <div class="max-w-[900px] mx-auto px-6 text-center">
    <h1 class="text-3xl md:text-4xl font-semibold text-slate-800">Beneficios</h1>
    <p class="mt-4 text-slate-600">
      Conoce los beneficios de formar parte de la comunidad Colegio del Valle. Para mas informacion, contacta a nuestro
      equipo de admisiones.
    </p>
    <a class="mt-8 inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/contacto">
      <i class="ri-customer-service-2-line text-base"></i>
      Contacto
    </a>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
