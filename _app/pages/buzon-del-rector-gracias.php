<?php
$pageTitle = 'Gracias | Buzon del Rector';
$pageDescription = 'Gracias por tu mensaje. Tu solicitud sera atendida y revisada por nuestro equipo directivo.';
$activePage = '';
require __DIR__ . '/partials/header.php';
?>

<section class="py-16 bg-white">
  <div class="max-w-[900px] mx-auto px-6">
    <div class="rounded-[32px] border border-emerald-200 bg-emerald-50 p-10 text-center">
      <p class="text-xs font-semibold uppercase tracking-[0.25em] text-emerald-700">Buzon del Rector</p>
      <h1 class="mt-4 text-3xl md:text-4xl font-semibold text-slate-800">Gracias por tu mensaje</h1>
      <p class="mt-5 text-slate-700 leading-relaxed">
        Tu solicitud fue enviada correctamente y sera atendida con seriedad por nuestro equipo directivo. Revisaremos tu mensaje y te
        daremos seguimiento a la brevedad al correo que registraste.
      </p>
      <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
        <a class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white hover:bg-emerald-700" href="<?= $baseUrl ?>/">
          Ir a inicio
        </a>
        <a class="inline-flex items-center justify-center rounded-full border border-emerald-300 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-emerald-800 hover:bg-emerald-100" href="<?= $baseUrl ?>/buzon-del-rector">
          Enviar otro mensaje
        </a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
