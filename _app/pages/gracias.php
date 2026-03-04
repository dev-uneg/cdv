<?php
$pageTitle = 'Gracias | Colegio del Valle';
$pageDescription = 'Gracias por contactarnos. Nuestro equipo de admisiones se pondra en contacto contigo pronto.';
$activePage = '';
require __DIR__ . '/partials/header.php';
$baseUrl = defined('BASE_URL') ? BASE_URL : rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($baseUrl === '/') {
    $baseUrl = '';
}
?>
<section class="py-14 bg-white">
  <div class="max-w-[900px] mx-auto px-6">
    <div class="rounded-3xl border border-emerald-200 bg-emerald-50 p-10 text-center">
      <p class="text-xs uppercase tracking-[0.3em] text-emerald-700">Formulario enviado</p>
      <h1 class="mt-3 text-3xl md:text-4xl font-semibold text-emerald-900">Gracias por contactarnos</h1>
      <p class="mt-4 text-emerald-900/80">
        Recibimos tus datos correctamente. El equipo de admisiones te respondera a la brevedad.
      </p>
      <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
        <a class="rounded-full bg-emerald-600 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white" href="<?= $baseUrl ?>/">
          Ir al inicio
        </a>
        <a class="rounded-full border border-emerald-300 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-emerald-800" href="<?= $baseUrl ?>/contacto/">
          Volver a contacto
        </a>
      </div>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
