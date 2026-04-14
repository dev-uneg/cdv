<?php
$pageTitle = 'IXU | Colegio del Valle';
$pageDescription = 'IXU en Colegio del Valle: cursos y diplomados para formación y desarrollo profesional.';
$activePage = 'ixu';
$baseUrl = defined('BASE_URL') ? BASE_URL : '';
$menuItems = require __DIR__ . '/partials/menu-items.php';
$menuSubItems = require __DIR__ . '/partials/des-menu-subitems.php';
$logoDarkSrc = $baseUrl . '/_imgs/Colegio-del-Valle-Logo-342x206.webp';
$headerWrapperClass = 'z-40 border-b border-slate-200 bg-white/95 backdrop-blur-sm';
$enableAos = true;
require __DIR__ . '/partials/head-start.php';
?>
<style>
  .ixu-hero-title {
    font-family: "Lilita One", cursive;
    font-size: clamp(2.8rem, 8vw, 6rem);
    line-height: 0.9;
    letter-spacing: 0.03em;
    text-transform: uppercase;
  }
  h1, h2, h3 {
    font-family: "Lilita One", cursive;
    font-weight: 400;
  }
</style>

<div class="flex h-[70vh] min-h-[70svh] min-h-[70dvh] flex-col">
<?php require __DIR__ . '/partials/header-white-sidebar.php'; ?>
<section class="relative flex-1 overflow-hidden bg-gradient-to-br from-[#0B4F6C] via-[#345995] to-[#03CEA4]" data-aos="zoom-out" data-aos-duration="900">
  <div class="pointer-events-none absolute -left-20 top-10 h-52 w-52 rounded-full bg-[#EAC435]/25 blur-3xl"></div>
  <div class="pointer-events-none absolute -right-16 bottom-8 h-64 w-64 rounded-full bg-[#FB4D3D]/20 blur-3xl"></div>
  <div class="mx-auto flex h-full w-full max-w-[1300px] items-center justify-center px-6">
    <div class="max-w-3xl text-center" data-aos="fade-up" data-aos-delay="80">
      <div class="mb-4 flex items-center justify-center text-white/90">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/35 bg-white/10">
          <i data-lucide="sparkles" class="h-5 w-5"></i>
        </span>
      </div>
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-white/80">Colegio del Valle</p>
      <h1 class="ixu-hero-title mt-4 text-white drop-shadow-[0_8px_24px_rgba(2,8,23,0.28)]">IXU</h1>
      <p class="mt-6 text-base leading-relaxed text-white/95 md:text-lg">
        Cursos y diplomados para fortalecer habilidades profesionales, liderazgo y crecimiento académico continuo.
      </p>
    </div>
  </div>
</section>
</div>

<section class="py-12 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6">
    <h2 class="text-2xl md:text-3xl font-semibold text-[#345995] text-center">Cursos IXU</h2>
    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/_imgs/ixu/curso-desarrollo-habilidades-liderazgo-efectivo.png">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/_imgs/ixu/curso-desarrollo-habilidades-liderazgo-efectivo.png" alt="Curso Desarrollo de habilidades para un liderazgo efectivo" loading="lazy" />
        <span class="mt-3 block text-xs uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-700">Ver detalle</span>
      </button>
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/_imgs/ixu/curso-repse.png">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/_imgs/ixu/curso-repse.png" alt="Curso REPSE" loading="lazy" />
        <span class="mt-3 block text-xs uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-700">Ver detalle</span>
      </button>
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/_imgs/ixu/curso-coaching-creatividad-empresarial.webp">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/_imgs/ixu/curso-coaching-creatividad-empresarial.webp" alt="Curso Coaching y creatividad empresarial" loading="lazy" />
        <span class="mt-3 block text-xs uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-700">Ver detalle</span>
      </button>
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/_imgs/ixu/curso-tendencias-mercadotecnia-siglo-xxi.webp">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/_imgs/ixu/curso-tendencias-mercadotecnia-siglo-xxi.webp" alt="Curso Tendencias para mercadotecnia del siglo XXI" loading="lazy" />
        <span class="mt-3 block text-xs uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-700">Ver detalle</span>
      </button>
    </div>
  </div>
</section>

<section class="py-12 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6">
    <h2 class="text-2xl md:text-3xl font-semibold text-[#345995] text-center">Diplomados IXU</h2>
    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/_imgs/ixu/diplomado-defensa-fiscal.png">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/_imgs/ixu/diplomado-defensa-fiscal.png" alt="Diplomado en Defensa Fiscal" loading="lazy" />
        <span class="mt-3 block text-xs uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-700">Ver detalle</span>
      </button>
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/_imgs/ixu/diplomado-normas-informacion-financiera.webp">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/_imgs/ixu/diplomado-normas-informacion-financiera.webp" alt="Diplomado en Normas de Información Financiera" loading="lazy" />
        <span class="mt-3 block text-xs uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-700">Ver detalle</span>
      </button>
    </div>
  </div>
</section>

<div id="ixu-lightbox" class="fixed inset-0 z-[999] hidden items-center justify-center bg-black/80 p-6">
  <button class="absolute inset-0 h-full w-full cursor-zoom-out" aria-label="Cerrar imagen" type="button"></button>
  <img class="relative max-h-[90vh] max-w-[90vw] rounded-2xl shadow-2xl" alt="Detalle IXU" />
</div>

<script>
  (() => {
    const lightbox = document.getElementById('ixu-lightbox');
    if (!lightbox) return;
    const lightboxImg = lightbox.querySelector('img');
    const triggers = document.querySelectorAll('[data-lightbox]');

    const close = () => {
      lightbox.classList.add('hidden');
      lightbox.classList.remove('flex');
      lightboxImg?.removeAttribute('src');
    };

    triggers.forEach((trigger) => {
      trigger.addEventListener('click', () => {
        const src = trigger.getAttribute('data-lightbox');
        if (!src || !lightboxImg) return;
        lightboxImg.setAttribute('src', src);
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
      });
    });

    lightbox.addEventListener('click', close);
    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') close();
    });
  })();
</script>

<script>
  window.addEventListener('load', () => {
    if (!window.AOS) return;
    window.AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: false,
      mirror: true,
      offset: 60,
    });
  });
</script>

<?php require __DIR__ . '/partials/footer.php'; ?>
