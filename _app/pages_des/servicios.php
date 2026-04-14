<?php
$pageTitle = 'Servicios | Colegio del Valle';
$pageDescription = 'Oferta académica del Colegio del Valle: niveles, programas y enfoque formativo para cada etapa escolar.';
$activePage = 'servicios';
$baseUrl = defined('BASE_URL') ? BASE_URL : '';
$menuItems = require __DIR__ . '/partials/menu-items.php';
$menuSubItems = require __DIR__ . '/partials/des-menu-subitems.php';
$logoDarkSrc = $baseUrl . '/_imgs/Colegio-del-Valle-Logo-342x206.webp';
$headerWrapperClass = 'z-40 border-b border-slate-200 bg-white/95 backdrop-blur-sm';
$heroEyebrow = 'Colegio del Valle';
$heroTitle = 'OFERTA ACADEMICA';
$heroDescription = 'Explora nuestros niveles formativos, programas y servicios para cada etapa del desarrollo escolar.';
$heroIcon = 'book-open';
require __DIR__ . '/partials/head-start.php';
?>
<div class="flex h-[60vh] min-h-[60svh] min-h-[60dvh] flex-col">
<?php require __DIR__ . '/partials/header-white-sidebar.php'; ?>
<?php require __DIR__ . '/partials/hero-showcase.php'; ?>
</div>
<?php
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
