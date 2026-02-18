<?php
$pageTitle = 'IXU | Colegio del Valle';
$pageDescription = 'IXU en Colegio del Valle: cursos y diplomados para formacion y desarrollo profesional.';
$activePage = 'ixu';
require __DIR__ . '/partials/header.php';
$baseUrl = defined('BASE_URL') ? BASE_URL : rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($baseUrl === '/') {
    $baseUrl = '';
}
?>
<section class="bg-white">
  <div class="w-full">
    <div class="h-[500px] w-full overflow-hidden">
      <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/ixu/banner-ixu.webp" alt="IXU Colegio del Valle" loading="lazy" />
    </div>
  </div>
</section>

<section class="py-12 bg-white">
  <div class="max-w-[1300px] mx-auto px-6">
    <h2 class="text-2xl md:text-3xl font-semibold text-slate-800 text-center">Cursos IXU</h2>
    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/imgs/ixu/curso-repse.png">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/imgs/ixu/curso-repse.png" alt="Curso REPSE" loading="lazy" />
        <span class="mt-3 block text-xs uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-700">Ver detalle</span>
      </button>
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/imgs/ixu/curso-coaching-creatividad-empresarial.png">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/imgs/ixu/curso-coaching-creatividad-empresarial.png" alt="Curso Coaching y creatividad empresarial" loading="lazy" />
        <span class="mt-3 block text-xs uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-700">Ver detalle</span>
      </button>
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/imgs/ixu/curso-tendencias-mercadotecnia-siglo-xxi.png">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/imgs/ixu/curso-tendencias-mercadotecnia-siglo-xxi.png" alt="Curso Tendencias para mercadotecnia del siglo XXI" loading="lazy" />
        <span class="mt-3 block text-xs uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-700">Ver detalle</span>
      </button>
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/imgs/ixu/curso-liderazgo-efectivo.png">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/imgs/ixu/curso-liderazgo-efectivo.png" alt="Curso Desarrollo de habilidades para un liderazgo efectivo" loading="lazy" />
        <span class="mt-3 block text-xs uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-700">Ver detalle</span>
      </button>
    </div>
  </div>
</section>

<section class="py-12 bg-white">
  <div class="max-w-[1300px] mx-auto px-6">
    <h2 class="text-2xl md:text-3xl font-semibold text-slate-800 text-center">Diplomados IXU</h2>
    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <button class="group rounded-3xl border border-slate-200 bg-white p-4 text-center" type="button" data-lightbox="<?= $baseUrl ?>/imgs/ixu/diplomado-normas-informacion-financiera.png">
        <img class="aspect-[4/5] w-full rounded-2xl object-cover" src="<?= $baseUrl ?>/imgs/ixu/diplomado-normas-informacion-financiera.png" alt="Diplomado en Normas de Informacion Financiera" loading="lazy" />
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
    const lightboxImg = lightbox.querySelector('img');
    const triggers = document.querySelectorAll('[data-lightbox]');
    const close = () => {
      lightbox.classList.add('hidden');
      lightbox.classList.remove('flex');
      lightboxImg.removeAttribute('src');
    };
    triggers.forEach((trigger) => {
      trigger.addEventListener('click', () => {
        const src = trigger.getAttribute('data-lightbox');
        if (!src) return;
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
<?php require __DIR__ . '/partials/footer.php'; ?>
