<?php
$pageTitle = 'Servicios | Colegio del Valle';
$pageDescription = 'Oferta academica del Colegio del Valle: niveles, programas y enfoque formativo para cada etapa escolar.';
$activePage = 'servicios';
require __DIR__ . '/partials/header.php';
?>
<section class="max-w-[1300px] mx-auto px-6 py-16">
  <h1 class="text-3xl md:text-4xl font-bold tracking-tight">Servicios</h1>
  <p class="mt-4 text-slate-600">Ofrecemos programas y servicios para acompañar a cada familia.</p>
  <div class="mt-8 grid gap-4 sm:grid-cols-2">
    <div class="rounded-2xl border border-slate-200 bg-white p-6">
      <h2 class="text-lg font-semibold">Nivel académico</h2>
      <p class="mt-3 text-sm text-slate-600">Planes de estudio actualizados y asesorías personalizadas.</p>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6">
      <h2 class="text-lg font-semibold">Actividades extracurriculares</h2>
      <p class="mt-3 text-sm text-slate-600">Arte, deporte y ciencia para potenciar talentos.</p>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6">
      <h2 class="text-lg font-semibold">Acompañamiento emocional</h2>
      <p class="mt-3 text-sm text-slate-600">Orientación y apoyo para estudiantes y familias.</p>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6">
      <h2 class="text-lg font-semibold">Comunidad y eventos</h2>
      <p class="mt-3 text-sm text-slate-600">Encuentros, talleres y proyectos colaborativos.</p>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
