<?php
$pageTitle = 'Reglamentos | Colegio del Valle';
$pageDescription = 'Reglamentos escolares del Colegio del Valle: lineamientos, convivencia y responsabilidades.';
$activePage = '';
require __DIR__ . '/partials/header.php';
?>

<section class="py-16 bg-white">
  <div class="max-w-[1100px] mx-auto px-6">
    <h1 class="text-3xl md:text-4xl font-semibold text-slate-800 text-center">Reglamentos</h1>
    <p class="mt-4 text-slate-600 text-center">Consulta y descarga los reglamentos por nivel.</p>
    <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
      <a class="inline-flex items-center justify-center gap-2 rounded-2xl border-2 border-slate-300 px-6 py-4 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/PDFs/kinder/REGLAMENTO-KINDER-2025-2026.pdf" target="_blank" rel="noopener">
        <i class="ri-file-text-line text-base"></i>
        Kinder
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-2xl border-2 border-slate-300 px-6 py-4 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/PDFs/primaria/REGLAMENTO-PRIMARIA-2025-2026.pdf" target="_blank" rel="noopener">
        <i class="ri-file-text-line text-base"></i>
        Primaria
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-2xl border-2 border-slate-300 px-6 py-4 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/PDFs/secundaria/REGLAMENTO-COMPLETO-SECUNDARIA.pdf" target="_blank" rel="noopener">
        <i class="ri-file-text-line text-base"></i>
        Secundaria
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-2xl border-2 border-slate-300 px-6 py-4 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/PDFs/preparatoria/REGLAMENTO-OFICIAL-PREPA.pdf" target="_blank" rel="noopener">
        <i class="ri-file-text-line text-base"></i>
        Preparatoria
      </a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
