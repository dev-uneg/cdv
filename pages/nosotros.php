<?php
$pageTitle = 'Nosotros | Colegio del Valle';
$activePage = 'nosotros';
require __DIR__ . '/partials/header.php';
?>
<section class="grid gap-8 md:grid-cols-2 items-start">
  <div>
    <h1 class="text-3xl md:text-4xl font-bold tracking-tight">Nosotros</h1>
    <p class="mt-4 text-slate-600">
      Somos una comunidad educativa enfocada en formar estudiantes con valores,
      pensamiento crítico y habilidades para el futuro.
    </p>
    <p class="mt-4 text-slate-600">
      Nuestro modelo combina excelencia académica, bienestar emocional y desarrollo integral.
    </p>
  </div>
  <div class="rounded-2xl border border-slate-200 bg-white p-6">
    <h2 class="text-lg font-semibold">Nuestra misión</h2>
    <p class="mt-3 text-sm text-slate-600">Impulsar el crecimiento académico y personal de cada estudiante.</p>
    <h2 class="mt-6 text-lg font-semibold">Nuestra visión</h2>
    <p class="mt-3 text-sm text-slate-600">Ser un referente educativo de innovación y comunidad.</p>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
