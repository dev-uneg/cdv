<?php
$pageTitle = 'Comunidad | Egresados';
$pageDescription = 'Comunidad de egresados del Colegio del Valle: noticias, vinculos y oportunidades.';
$activePage = '';
require __DIR__ . '/partials/header.php';
?>
<section class="bg-white">
  <div class="max-w-[1300px] mx-auto px-6 py-10">
    <div class="h-[250px] rounded-[32px] bg-gradient-to-r from-indigo-500 via-sky-500 to-cyan-400 flex items-center justify-center text-center text-white">
      <h1 class="text-3xl md:text-4xl font-semibold">Comunidad · Egresados</h1>
    </div>
  </div>
</section>

<section class="py-12 bg-white">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <a class="rounded-3xl border border-slate-200 bg-white p-8 text-center shadow-sm hover:shadow-md transition" href="<?= $baseUrl ?>/dejanos-saber-de-ti">
        <i class="block mx-auto text-5xl text-indigo-500" data-lucide="user"></i>
        <h3 class="mt-6 text-2xl font-semibold text-indigo-600">Dejanos saber de ti</h3>
        <p class="mt-3 text-slate-500">Queremos saber que has hecho</p>
      </a>
      <a class="rounded-3xl border border-slate-200 bg-white p-8 text-center shadow-sm hover:shadow-md transition" href="https://login.microsoftonline.com/" target="_blank" rel="noopener">
        <i class="block mx-auto text-5xl text-indigo-500" data-lucide="monitor"></i>
        <h3 class="mt-6 text-2xl font-semibold text-indigo-600">Office 365</h3>
        <p class="mt-3 text-slate-500">Acceder a cuenta Office 365</p>
      </a>
      <a class="rounded-3xl border border-slate-200 bg-white p-8 text-center shadow-sm hover:shadow-md transition" href="https://isecelearning.com/" target="_blank" rel="noopener">
        <i class="block mx-auto text-5xl text-indigo-500" data-lucide="globe"></i>
        <h3 class="mt-6 text-2xl font-semibold text-indigo-600">E-learning</h3>
        <p class="mt-3 text-slate-500">Acceder a E-learning</p>
      </a>
      <a class="rounded-3xl border border-slate-200 bg-white p-8 text-center shadow-sm hover:shadow-md transition" href="https://uneg.academic.lat/" target="_blank" rel="noopener">
        <i class="block mx-auto text-5xl text-indigo-500" data-lucide="smartphone"></i>
        <h3 class="mt-6 text-2xl font-semibold text-indigo-600">Portal Escolar</h3>
        <p class="mt-3 text-slate-500">Acceder a historia académica de alumno</p>
      </a>
      <a class="rounded-3xl border border-slate-200 bg-white p-8 text-center shadow-sm hover:shadow-md transition" href="https://login.microsoftonline.com/login.srf?wa=wsignin1.0&rpsnv=4&ct=1461195063&rver=6.6.6556.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.office.com%2fowa%2f%3frealm%3dcoldelvalle.edu.mx%26exch%3d1&id=260563&whr=coldelvalle.edu.mx&CBCXT=out&msafed=0" target="_blank" rel="noopener">
        <i class="block mx-auto text-5xl text-indigo-500" data-lucide="mail"></i>
        <h3 class="mt-6 text-2xl font-semibold text-indigo-600">Correo electrónico</h3>
        <p class="mt-3 text-slate-500">Acceder a cuenta de correo institucional</p>
      </a>
      <a class="rounded-3xl border border-slate-200 bg-white p-8 text-center shadow-sm hover:shadow-md transition" href="<?= $baseUrl ?>/#noticias">
        <i class="block mx-auto text-5xl text-indigo-500" data-lucide="message-circle"></i>
        <h3 class="mt-6 text-2xl font-semibold text-indigo-600">Noticias</h3>
        <p class="mt-3 text-slate-500">Leer noticias relacionadas con la actividad académica</p>
      </a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
