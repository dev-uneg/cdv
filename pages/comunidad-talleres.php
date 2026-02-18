<?php
$pageTitle = 'Comunidad | Talleres Vespertinos';
$pageDescription = 'Talleres vespertinos del Colegio del Valle: actividades, horarios y opciones para alumnos.';
$activePage = '';
require __DIR__ . '/partials/header.php';
?>
<section class="bg-white">
  <div class="max-w-[1300px] mx-auto px-6 py-10">
    <div class="h-[250px] rounded-[32px] bg-gradient-to-r from-indigo-500 via-sky-500 to-cyan-400 flex items-center justify-center text-center text-white">
      <h1 class="text-3xl md:text-4xl font-semibold">Talleres Vespertinos</h1>
    </div>
  </div>
</section>

<section class="py-12 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center">
    <p class="mt-4 text-slate-600 leading-relaxed">
      En Colegio Del Valle fomentamos las actividades deportivas, aqui podras encontrar las actividades
      y concursos mas relevantes de toda nuestra comunidad. ¡Aprovechalas!
    </p>
    <div class="mt-8 overflow-hidden rounded-3xl border border-slate-200 bg-white max-w-[50%] mx-auto">
      <img class="w-full h-auto" src="<?= $baseUrl ?>/imgs/talleres/talleres.png" alt="Talleres vespertinos Colegio del Valle" loading="lazy" />
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
