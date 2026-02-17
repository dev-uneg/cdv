<?php
$pageTitle = 'Dejanos saber de ti | Colegio del Valle';
$activePage = '';
require __DIR__ . '/partials/header.php';
?>

<section class="py-16 bg-white">
  <div class="max-w-[900px] mx-auto px-6 text-center">
    <h1 class="text-3xl md:text-4xl font-semibold text-slate-800">Dejanos saber de ti</h1>
    <p class="mt-4 text-slate-600">
      Queremos conocer tu historia como egresado de Colegio del Valle. Comparte tus datos y logros con nosotros.
    </p>
    <a class="mt-8 inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/contacto">
      <i class="ri-chat-3-line text-base"></i>
      Contacto
    </a>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
