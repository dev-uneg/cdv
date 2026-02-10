<?php
$pageTitle = 'Inicio | Colegio del Valle';
$activePage = 'home';
require __DIR__ . '/partials/header.php';
?>
<section class="flex flex-col items-center text-center gap-4">
  <h1 class="text-4xl md:text-5xl font-bold tracking-tight">Colegio del Valle</h1>
  <p class="text-lg md:text-xl text-slate-600">Primer test de CI/CD</p>
  <div class="mt-6 grid gap-4 sm:grid-cols-3 w-full">
    <div class="rounded-2xl border border-slate-200 bg-white p-5 text-left">
      <p class="text-sm font-semibold text-slate-900">Formación integral</p>
      <p class="mt-2 text-sm text-slate-600">Académico, deportivo y humano en un solo lugar.</p>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-5 text-left">
      <p class="text-sm font-semibold text-slate-900">Docentes expertos</p>
      <p class="mt-2 text-sm text-slate-600">Acompañamiento cercano y planes personalizados.</p>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-5 text-left">
      <p class="text-sm font-semibold text-slate-900">Comunidad viva</p>
      <p class="mt-2 text-sm text-slate-600">Un campus seguro con actividades todo el año.</p>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
