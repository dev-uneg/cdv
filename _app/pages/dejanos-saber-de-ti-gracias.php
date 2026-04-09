<?php
$pageTitle = 'Gracias | Egresados CDV';
$pageDescription = 'Gracias por registrar tus datos de egresado.';
$activePage = '';
require __DIR__ . '/partials/header.php';
?>

<section class="py-16 bg-white">
  <div class="max-w-[900px] mx-auto px-6">
    <div class="rounded-[32px] border border-emerald-200 bg-emerald-50 p-10 text-center">
      <p class="text-xs font-semibold uppercase tracking-[0.25em] text-emerald-700">Egresados CDV</p>
      <h1 class="mt-4 text-3xl md:text-4xl font-semibold text-slate-800">Gracias por tu registro</h1>
      <p class="mt-5 text-slate-700 leading-relaxed">
        Tu información se guardó correctamente. Pronto te compartiremos información relevante y beneficios para egresados.
      </p>
      <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
        <a class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white hover:bg-emerald-700" href="<?= $baseUrl ?>/">
          Ir a inicio
        </a>
        <a class="inline-flex items-center justify-center rounded-full border border-emerald-300 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-emerald-800 hover:bg-emerald-100" href="<?= $baseUrl ?>/dejanos-saber-de-ti">
          Registrar otro egresado
        </a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
