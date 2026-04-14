<?php
$baseUrl = defined('BASE_URL') ? BASE_URL : '';
$pageTitle = 'Nosotros | Colegio del Valle';
$menuItems = require __DIR__ . '/partials/menu-items.php';
$menuSubItems = require __DIR__ . '/partials/des-menu-subitems.php';
$logoDarkSrc = $baseUrl . '/_imgs/Colegio-del-Valle-Logo-342x206.webp';
$headerWrapperClass = 'z-40 border-b border-slate-200 bg-white/95 backdrop-blur-sm';

require __DIR__ . '/partials/head-start.php';
?>
<style>
  .nosotros-hero-title {
    font-family: "Lilita One", cursive;
    font-size: clamp(2.6rem, 8.2vw, 6.4rem);
    line-height: 0.9;
    letter-spacing: 0.03em;
    text-transform: uppercase;
  }
</style>
<div class="flex h-[60vh] min-h-[60svh] min-h-[60dvh] flex-col">
<?php
require __DIR__ . '/partials/header-white-sidebar.php';
?>

<section class="relative flex-1 overflow-hidden bg-gradient-to-br from-[#0B4F6C] via-[#345995] to-[#03CEA4]">
  <div class="pointer-events-none absolute -left-20 top-10 h-52 w-52 rounded-full bg-[#EAC435]/25 blur-3xl"></div>
  <div class="pointer-events-none absolute -right-16 bottom-8 h-64 w-64 rounded-full bg-[#FB4D3D]/20 blur-3xl"></div>
  <div class="mx-auto flex h-full w-full max-w-[1300px] items-center justify-center px-6">
    <div class="max-w-3xl text-center">
      <div class="mb-4 flex items-center justify-center text-white/90">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/35 bg-white/10">
          <i data-lucide="sparkles" class="h-5 w-5"></i>
        </span>
      </div>
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-white/80">Colegio del Valle</p>
      <h1 class="nosotros-hero-title mt-4 text-white drop-shadow-[0_8px_24px_rgba(2,8,23,0.28)]">NOSOTROS</h1>
      <p class="mt-6 text-base leading-relaxed text-white/95 md:text-lg">
        Conoce nuestra historia, misión y modelo educativo. Somos una comunidad académica
        dedicada a formar estudiantes con pensamiento crítico, valores y sentido humano.
      </p>
    </div>
  </div>
</section>
</div>

<section class="bg-white">
  <div class="max-w-[1300px] mx-auto px-6 pt-20 pb-8 md:pt-24 md:pb-10">
    <div class="grid grid-cols-1 gap-3 sm:grid-cols-6">
      <button class="relative col-span-4 row-span-2 h-[340px] overflow-hidden rounded-3xl sm:col-span-3 sm:h-[400px]" type="button" data-lightbox src="<?= $baseUrl ?>/_imgs/nosotros/WEB_CDV_IMAGENES_NOSOTROS_1300X709_IMG1.webp" aria-label="Abrir imagen 1">
        <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/_imgs/nosotros/WEB_CDV_IMAGENES_NOSOTROS_1300X709_IMG1.webp" alt="Colegio del Valle" loading="lazy" />
      </button>
      <button class="relative col-span-2 h-[170px] overflow-hidden rounded-3xl sm:col-span-2" type="button" data-lightbox src="<?= $baseUrl ?>/_imgs/nosotros/WEB_CDV_IMAGENES_NOSOTROS_1300X709_IMG2.webp" aria-label="Abrir imagen 2">
        <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/_imgs/nosotros/WEB_CDV_IMAGENES_NOSOTROS_1300X709_IMG2.webp" alt="Colegio del Valle" loading="lazy" />
      </button>
      <button class="relative col-span-2 h-[170px] overflow-hidden rounded-3xl sm:col-span-1" type="button" data-lightbox src="<?= $baseUrl ?>/_imgs/nosotros/WEB_CDV_IMAGENES_NOSOTROS_1300X709_IMG3.webp" aria-label="Abrir imagen 3">
        <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/_imgs/nosotros/WEB_CDV_IMAGENES_NOSOTROS_1300X709_IMG3.webp" alt="Colegio del Valle" loading="lazy" />
      </button>
      <button class="relative col-span-4 h-[210px] overflow-hidden rounded-3xl sm:col-span-3" type="button" data-lightbox src="<?= $baseUrl ?>/_imgs/nosotros/CDV-Jardin-central-00.webp" aria-label="Abrir imagen 4">
        <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/_imgs/nosotros/CDV-Jardin-central-00.webp" alt="Colegio del Valle" loading="lazy" />
      </button>
    </div>
  </div>
</section>

<section class="bg-white">
  <div class="max-w-[1300px] mx-auto px-6 pt-4 pb-16 md:pt-6 md:pb-20">
    <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-800">Misión y Visión</h2>
    <div class="mt-6 space-y-4 text-slate-600 text-sm md:text-base leading-relaxed">
      <p>
        La misión de nuestro Colegio es favorecer la formación integral de nuestros alumnos con base en valores
        ético-morales, ofreciendo una educación de calidad para el pleno desarrollo de sus potencialidades.
      </p>
      <p>
        Consideramos valores esenciales la moral, ética, verdad, justicia, inteligencia, libertad y respeto.
        El apego a estos principios orienta nuestra filosofía educativa.
      </p>
      <p>
        Concebimos el conocimiento como un proceso comprensivo de información actualizada, analítica y aplicada
        al beneficio de la comunidad.
      </p>
      <p>
        Nuestra visión es fortalecer la integración de los alumnos desde jardín de niños hasta preparatoria,
        fomentando pertenencia, colaboración y compromiso social.
      </p>
    </div>
  </div>
</section>

<section class="bg-[#0b4f6c]">
  <div class="max-w-[1300px] mx-auto grid gap-10 px-6 py-16 md:py-20 lg:grid-cols-2">
    <div>
      <h3 class="text-2xl md:text-3xl font-bold text-white">¿Quiénes somos?</h3>
      <p class="mt-4 text-white/80 leading-relaxed">
        El Colegio del Valle es una institución particular dedicada a educación básica, media y media superior,
        con una trayectoria de más de seis décadas y un compromiso constante con la calidad educativa.
      </p>
    </div>
    <div>
      <h3 class="text-2xl md:text-3xl font-bold text-white">Filosofía</h3>
      <ul class="mt-4 space-y-3 text-white/80">
        <li>Atención con calidad y vocación de servicio.</li>
        <li>Integración del estudiante a la cultura y su contexto.</li>
        <li>Fortalecimiento de valores y responsabilidad social.</li>
        <li>Cuidado del medio ambiente y conciencia ecológica.</li>
        <li>Educación pertinente para el presente y futuro.</li>
      </ul>
    </div>
  </div>
</section>

<section class="bg-white">
  <div class="max-w-[1300px] mx-auto px-6 py-16 md:py-20">
    <h3 class="text-2xl md:text-3xl font-bold text-slate-800">Modelo Educativo</h3>
    <p class="mt-4 text-slate-600 leading-relaxed">
      Nuestro modelo educativo se basa en el constructivismo para generar aprendizajes significativos mediante
      investigación, análisis, experimentación y trabajo colaborativo en una relación cercana con las familias.
    </p>
  </div>
</section>

<div class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/80 p-6" data-lightbox-modal>
  <button class="absolute right-6 top-6 text-white/80 hover:text-white" type="button" data-lightbox-close aria-label="Cerrar">
    <span class="text-3xl leading-none">x</span>
  </button>
  <img class="max-h-[85vh] w-auto max-w-[90vw] rounded-2xl shadow-2xl" src="" alt="Imagen ampliada" data-lightbox-image />
</div>

<script>
  (() => {
    const triggers = document.querySelectorAll('[data-lightbox]');
    const modal = document.querySelector('[data-lightbox-modal]');
    const modalImage = document.querySelector('[data-lightbox-image]');
    const closeButton = document.querySelector('[data-lightbox-close]');

    const close = () => {
      modal?.classList.add('hidden');
      modal?.classList.remove('flex');
      if (modalImage) modalImage.src = '';
    };

    triggers.forEach((trigger) => {
      trigger.addEventListener('click', () => {
        const src = trigger.getAttribute('src');
        if (!src || !modal || !modalImage) return;
        modalImage.src = src;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      });
    });

    closeButton?.addEventListener('click', close);
    modal?.addEventListener('click', (event) => {
      if (event.target === modal) close();
    });
    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') close();
    });
  })();
</script>

<?php require __DIR__ . '/partials/footer.php'; ?>
