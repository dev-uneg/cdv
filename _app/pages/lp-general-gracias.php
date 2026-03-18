<?php
$pageTitle = 'Gracias | Landing | Colegio del Valle';
$pageDescription = 'Gracias por tu registro. Un asesor de admisiones te contactara pronto.';
$mainClass = '';
require __DIR__ . '/partials/landing-header.php';
?>

<section class="relative overflow-hidden bg-slate-900 text-white">
  <div class="absolute inset-0">
    <div class="h-full w-full bg-[linear-gradient(-225deg,#473B7B_0%,#3584A7_51%,#30D2BE_100%)]"></div>
  </div>
  <div class="absolute inset-0 pointer-events-none">
    <img
      class="h-full w-full object-cover opacity-35"
      src="<?= $baseUrl ?>/_imgs/landings/doodle2.png"
      alt=""
      loading="eager"
      aria-hidden="true"
    />
  </div>
  <div class="absolute inset-0 bg-gradient-to-r from-slate-900/75 via-slate-900/45 to-slate-900/25"></div>

  <div class="relative mx-auto max-w-[900px] px-6 py-20 md:py-24">
    <div class="rounded-3xl border border-white/20 bg-white/95 p-8 text-center text-slate-900 shadow-2xl md:p-12">
      <p class="text-xs font-semibold uppercase tracking-[0.3em] text-emerald-700">Registro completado</p>
      <h1 class="mt-4 text-3xl font-black leading-tight md:text-5xl">Gracias por tu interés en Colegio del Valle</h1>
      <p class="mx-auto mt-4 max-w-2xl text-sm text-slate-600 md:text-base">
        Recibimos tu solicitud correctamente. Un asesor de admisiones te contactara muy pronto para compartirte toda la informacion y ayudarte a elegir el mejor nivel para tu familia.
      </p>

      <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
        <a class="inline-flex rounded-full bg-orange-500 px-7 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white transition hover:bg-orange-600" href="<?= $baseUrl ?>/lp-general">
          Volver a la landing
        </a>
        <a class="inline-flex rounded-full border border-slate-300 px-7 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-slate-700 transition hover:bg-slate-100" href="<?= $baseUrl ?>/">
          Ir al inicio
        </a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/landing-footer.php'; ?>
