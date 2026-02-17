<?php
$pageTitle = 'Comunidad | Calendario Academico';
$activePage = '';
require __DIR__ . '/partials/header.php';
?>
<section class="bg-white">
  <div class="max-w-[1300px] mx-auto px-6 py-10">
    <div class="h-[250px] rounded-[32px] bg-gradient-to-r from-indigo-500 via-sky-500 to-cyan-400 flex items-center justify-center text-center text-white">
      <h1 class="text-3xl md:text-4xl font-semibold">Calendario academico</h1>
    </div>
  </div>
</section>

<section class="py-12 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-8 lg:grid-cols-[0.9fr,1.1fr] items-start">
    <div class="rounded-3xl border border-slate-200 bg-white p-6 space-y-3">
      <button class="w-full inline-flex items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-cyan-600 shadow-sm" type="button" data-tab="kinder">
        <i class="ri-seedling-line text-lg"></i>
        Kinder
      </button>
      <button class="w-full inline-flex items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="primaria">
        <i class="ri-book-open-line text-lg"></i>
        Primaria
      </button>
      <button class="w-full inline-flex items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="secundaria">
        <i class="ri-graduation-cap-line text-lg"></i>
        Secundaria
      </button>
      <button class="w-full inline-flex items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="preparatoria">
        <i class="ri-school-line text-lg"></i>
        Preparatoria
      </button>
    </div>
    <div class="min-h-[260px] rounded-3xl border border-slate-200 bg-white p-8">
      <div data-panel="kinder">
        <h3 class="text-3xl font-semibold text-slate-800">Kinder</h3>
        <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200 bg-white">
          <img class="w-full h-auto" src="<?= $baseUrl ?>/imgs/kinder/Calendario-kinder.jpg" alt="Calendario Kinder" loading="lazy" />
        </div>
      </div>
      <div class="hidden" data-panel="primaria">
        <h3 class="text-3xl font-semibold text-slate-800">Primaria</h3>
        <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200 bg-white">
          <img class="w-full h-auto" src="<?= $baseUrl ?>/imgs/primaria/Calendario-primaria.jpg" alt="Calendario Primaria" loading="lazy" />
        </div>
      </div>
      <div class="hidden" data-panel="secundaria">
        <h3 class="text-3xl font-semibold text-slate-800">Secundaria</h3>
        <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200 bg-white">
          <img class="w-full h-auto" src="<?= $baseUrl ?>/imgs/secundaria/Calendario-secundaria-com.webp" alt="Calendario Secundaria" loading="lazy" />
        </div>
      </div>
      <div class="hidden" data-panel="preparatoria">
        <h3 class="text-3xl font-semibold text-slate-800">Preparatoria</h3>
        <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200 bg-white">
          <img class="w-full h-auto" src="<?= $baseUrl ?>/imgs/preparatoria/Calendario-preparatoria.webp" alt="Calendario Preparatoria" loading="lazy" />
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  (() => {
    const tabs = document.querySelectorAll('[data-tab]');
    const panels = document.querySelectorAll('[data-panel]');
    const setActive = (key) => {
      tabs.forEach((tab) => {
        const active = tab.getAttribute('data-tab') === key;
        tab.classList.toggle('text-cyan-600', active);
        tab.classList.toggle('shadow-sm', active);
        tab.classList.toggle('text-slate-600', !active);
      });
      panels.forEach((panel) => {
        panel.classList.toggle('hidden', panel.getAttribute('data-panel') !== key);
      });
    };
    tabs.forEach((tab) => {
      tab.addEventListener('click', () => setActive(tab.getAttribute('data-tab')));
    });
    setActive('kinder');
  })();
</script>
<?php require __DIR__ . '/partials/footer.php'; ?>
