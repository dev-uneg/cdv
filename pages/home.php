<?php
$pageTitle = 'Inicio | Colegio del Valle';
$activePage = 'home';
require __DIR__ . '/partials/header.php';
$baseUrl = defined('BASE_URL') ? BASE_URL : rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($baseUrl === '/') {
    $baseUrl = '';
}
?>
<section class="pt-0 pb-0 bg-white">
  <div class="w-full mx-auto px-0">
    <div class="relative" data-hero-slider>
      <div class="relative h-[160px] md:h-[480px] overflow-hidden rounded-none border border-slate-200 bg-white">
        <div class="absolute inset-0 opacity-0 pointer-events-none transition-opacity duration-700" data-slide>
          <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/home/hero-1.png" alt="Colegio del Valle" loading="lazy" />
        </div>
        <div class="absolute inset-0 opacity-0 pointer-events-none transition-opacity duration-700" data-slide>
          <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/home/hero-2.png" alt="Colegio del Valle" loading="lazy" />
        </div>
        <div class="absolute inset-0 opacity-100 transition-opacity duration-700" data-slide>
          <iframe
            class="h-full w-full"
            src="https://www.youtube.com/embed/eP8lgG3nUM4?rel=0"
            title="Video Colegio del Valle"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-4 z-10 flex items-center justify-between px-6">
        <button class="rounded-full bg-white px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.2em] text-slate-900 shadow" type="button" data-prev>Anterior</button>
        <div class="flex items-center gap-2">
          <button class="h-2 w-2 rounded-full bg-white" type="button" data-dot></button>
          <button class="h-2 w-2 rounded-full bg-slate-300" type="button" data-dot></button>
          <button class="h-2 w-2 rounded-full bg-slate-300" type="button" data-dot></button>
        </div>
        <button class="rounded-full bg-white px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.2em] text-slate-900 shadow" type="button" data-next>Siguiente</button>
      </div>
    </div>
  </div>
</section>

<section id="oferta" class="pt-8 pb-16">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="text-center">
      <h2 class="text-3xl md:text-4xl font-bold tracking-tight">Colegio en Colonia del Valle</h2>
      <p class="mt-3 text-slate-600">Formacion bilingue, valores y excelencia academica desde preescolar.</p>
    </div>
    <div class="mt-12 space-y-0">
      <div class="grid gap-0 lg:grid-cols-2">
        <div class="grid h-auto grid-cols-1 grid-rows-4 gap-4 overflow-hidden rounded-none sm:h-[560px] sm:grid-cols-2 sm:grid-rows-2 sm:gap-0 sm:rounded-tl-3xl">
          <a class="relative min-h-[180px] sm:min-h-0 block" href="<?= $baseUrl ?>/kinder">
            <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/home/kinder.jpg" alt="Kinder" loading="lazy" />
          </a>
          <a class="flex min-h-[180px] flex-col justify-center gap-6 bg-[#3E436C] p-6 text-white sm:min-h-0 sm:h-full sm:p-10" href="<?= $baseUrl ?>/kinder">
            <h3 class="text-2xl font-semibold sm:text-3xl">Kinder</h3>
            <p class="text-sm uppercase tracking-[0.2em] text-white/70">RVOE SEP 09060319/07/2006</p>
            <span class="text-sm font-semibold uppercase tracking-[0.2em]">Más información</span>
          </a>
          <a class="relative min-h-[180px] sm:min-h-0 block" href="<?= $baseUrl ?>/pre-first">
            <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/home/pre-first.jpg" alt="Pre-first" loading="lazy" />
            <div class="absolute left-6 bottom-6 text-white">
              <p class="text-lg font-semibold sm:text-xl">Pre-First</p>
              <p class="mt-4 text-xs font-semibold uppercase tracking-[0.2em]">Más información</p>
            </div>
          </a>
          <a class="relative min-h-[180px] sm:min-h-0 block" href="<?= $baseUrl ?>/primaria">
            <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/home/primaria.jpg" alt="Primaria" loading="lazy" />
            <div class="absolute left-6 bottom-6 text-white">
              <p class="text-lg font-semibold sm:text-xl">Primaria</p>
              <p class="mt-3 text-xs uppercase tracking-[0.2em] text-white/80">RVOE SEP 09050086/06/2005</p>
              <p class="mt-4 text-xs font-semibold uppercase tracking-[0.2em]">Más información</p>
            </div>
          </a>
        </div>
        <div class="relative h-[260px] overflow-hidden rounded-none sm:h-[560px] sm:rounded-tr-3xl">
          <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/home/colegio-del-valle.jpg" alt="Colegio del Valle" loading="lazy" />
          <div class="absolute inset-0 bg-slate-900/50"></div>
          <div class="absolute inset-0 flex flex-col items-center justify-center gap-6 px-10 text-center text-white">
            <h3 class="text-2xl font-semibold sm:text-3xl">Contáctanos o visita nuestras instalaciones</h3>
            <a class="inline-flex rounded-full bg-white px-8 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-slate-900" href="#contacto-home">Contactar</a>
          </div>
        </div>
      </div>
      <div class="grid gap-0 lg:grid-cols-2">
        <div class="relative h-[260px] overflow-hidden rounded-none sm:h-[560px] sm:rounded-bl-3xl">
          <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/home/contactanos.jpg" alt="Colegio del Valle" loading="lazy" />
          <div class="absolute inset-0 bg-slate-900/40"></div>
          <div class="absolute inset-0 flex flex-col items-center justify-center gap-4 px-10 text-center text-white">
            <p class="text-sm uppercase tracking-[0.2em] text-white/70">Colegio Del Valle</p>
            <h3 class="text-2xl font-semibold sm:text-3xl">Conoce más acerca de nosotros</h3>
            <span class="text-xs font-semibold uppercase tracking-[0.2em]">Más información</span>
          </div>
        </div>
        <div class="grid h-auto grid-cols-1 grid-rows-4 gap-4 overflow-hidden rounded-none sm:h-[560px] sm:grid-cols-2 sm:grid-rows-2 sm:gap-0 sm:rounded-br-3xl">
          <a class="relative min-h-[180px] sm:min-h-0 block" href="<?= $baseUrl ?>/secundaria">
            <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/home/secundaria.jpg" alt="Secundaria" loading="lazy" />
          </a>
          <a class="flex min-h-[180px] flex-col justify-center gap-6 bg-orange-500 p-6 text-white sm:min-h-0 sm:h-full sm:p-10" href="<?= $baseUrl ?>/secundaria">
            <h3 class="text-2xl font-semibold sm:text-3xl">Secundaria</h3>
            <p class="text-sm uppercase tracking-[0.2em] text-white/80">RVOE SEP 0900053/22/06/2000</p>
            <span class="text-sm font-semibold uppercase tracking-[0.2em]">Más información</span>
          </a>
          <a class="flex min-h-[180px] flex-col justify-center gap-6 bg-[#3E436C] p-6 text-white sm:min-h-0 sm:h-full sm:p-10" href="<?= $baseUrl ?>/preparatoria">
            <h3 class="text-2xl font-semibold sm:text-3xl">Preparatoria</h3>
            <p class="text-sm uppercase tracking-[0.2em] text-white/80">CLAVE UNAM 1172</p>
            <span class="text-sm font-semibold uppercase tracking-[0.2em]">Más información</span>
          </a>
          <a class="relative min-h-[180px] sm:min-h-0 block" href="<?= $baseUrl ?>/preparatoria">
            <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/home/preparatoria.jpg" alt="Preparatoria" loading="lazy" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-12 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-bold tracking-tight">
      Nos preparamos todos los dias para distinguirnos entre los mejores colegios privados en CDMX
    </h2>
    <p class="mt-4 text-slate-600">
      La oferta educativa del Colegio en Ciudad de Mexico se adapta a una educacion del presente y del futuro.
      Desde preescolar hasta preparatoria, impulsamos la excelencia academica y el desarrollo integral.
    </p>
  </div>
</section>

<section class="py-16 soft-grid">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="max-w-[1100px] mx-auto rounded-3xl border border-slate-200 bg-white overflow-hidden">
      <div class="aspect-[16/9] w-full">
        <iframe class="h-full w-full" allowfullscreen src="https://tourmkr.com/F1pt9LMxiq"></iframe>
      </div>
    </div>
  </div>
</section>

<section id="comunidad" class="py-16 bg-slate-900 text-white">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
      <div>
        <p class="text-xs uppercase tracking-[0.3em] text-white/60">Enlaces de interes</p>
        <h2 class="mt-3 text-3xl font-bold">Recursos para la comunidad</h2>
      </div>
      <a class="rounded-full border border-white/40 px-5 py-2 text-xs font-semibold uppercase tracking-[0.2em]" href="#contacto-home">Contactanos</a>
    </div>
    <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
      <a class="rounded-2xl bg-white/5 p-5 text-center transition hover:bg-white/10" href="<?= $baseUrl ?>/formas-de-pago">
        <img class="mx-auto mb-3 h-24 w-24 object-contain" src="<?= $baseUrl ?>/imgs/home/imgi_13_ISEC_Forma-de-pago_172x154.png" alt="Formas de pago" loading="lazy" />
        <p class="text-xs uppercase tracking-[0.2em] text-white/70">Formas de pago</p>
      </a>
      <a class="rounded-2xl bg-white/5 p-5 text-center transition hover:bg-white/10" href="https://uneg.academic.lat/" target="_blank" rel="noopener">
        <img class="mx-auto mb-3 h-24 w-24 object-contain" src="<?= $baseUrl ?>/imgs/home/imgi_14_ISEC_Portal_172x154.png" alt="Portal escolar" loading="lazy" />
        <p class="text-xs uppercase tracking-[0.2em] text-white/70">Portal escolar</p>
      </a>
      <a class="rounded-2xl bg-white/5 p-5 text-center transition hover:bg-white/10" href="https://login.microsoftonline.com/" target="_blank" rel="noopener">
        <img class="mx-auto mb-3 h-24 w-24 object-contain" src="<?= $baseUrl ?>/imgs/home/imgi_15_ISEC_Office-365_172x154.png" alt="Office 365" loading="lazy" />
        <p class="text-xs uppercase tracking-[0.2em] text-white/70">Office 365</p>
      </a>
      <div class="rounded-2xl bg-white/5 p-5 text-center">
        <img class="mx-auto mb-3 h-24 w-24 object-contain" src="<?= $baseUrl ?>/imgs/home/imgi_16_ISEC_Mesa-ayuda_172x154.png" alt="Mesa de ayuda" loading="lazy" />
        <p class="text-xs uppercase tracking-[0.2em] text-white/70">Mesa de ayuda</p>
      </div>
      <a class="rounded-2xl bg-white/5 p-5 text-center transition hover:bg-white/10" href="http://impreweb.ddns.net:48110/PMPWeb/" target="_blank" rel="noopener">
        <img class="mx-auto mb-3 h-24 w-24 object-contain" src="<?= $baseUrl ?>/imgs/home/imgi_17_ISEC_Kiosko_172x154.png" alt="Kiosko" loading="lazy" />
        <p class="text-xs uppercase tracking-[0.2em] text-white/70">Kiosko</p>
      </a>
    </div>
  </div>
</section>

<section id="noticias" class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="text-center">
      <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Desde el blog</p>
      <h2 class="mt-3 text-3xl md:text-4xl font-bold tracking-tight">Ultimas entradas</h2>
      <p class="mt-3 text-slate-600">Ideas y recursos actuales para la comunidad educativa.</p>
    </div>
    <?php
      $blogPosts = include __DIR__ . '/blog/data.php';
      usort($blogPosts, fn($a, $b) => ($b['date_ts'] ?? 0) <=> ($a['date_ts'] ?? 0));
      $blogPosts = array_slice($blogPosts, 0, 3);
    ?>
    <div class="mt-10 grid gap-6 md:grid-cols-3">
      <?php foreach ($blogPosts as $post): ?>
        <article class="rounded-3xl border border-slate-200 overflow-hidden bg-white">
          <div class="aspect-[4/3] bg-slate-100 overflow-hidden">
            <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/blog/<?= htmlspecialchars($post['hero']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" loading="lazy" />
          </div>
          <div class="p-5">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">
              <?= htmlspecialchars($post['date']) ?> · <?= htmlspecialchars($post['category']) ?>
            </p>
            <h3 class="mt-2 font-semibold text-slate-900"><?= htmlspecialchars($post['title']) ?></h3>
            <p class="mt-2 text-sm text-slate-600"><?= htmlspecialchars($post['excerpt']) ?></p>
            <a class="mt-4 inline-flex text-xs font-semibold uppercase tracking-[0.2em] text-slate-900" href="<?= $baseUrl ?>/blog/<?= htmlspecialchars($post['slug']) ?>">Leer mas</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
  (() => {
    const sliders = document.querySelectorAll('[data-hero-slider]');
    sliders.forEach((slider) => {
      const slides = Array.from(slider.querySelectorAll('[data-slide]'));
      const dots = Array.from(slider.querySelectorAll('[data-dot]'));
      const prev = slider.querySelector('[data-prev]');
      const next = slider.querySelector('[data-next]');
      let index = 0;
      const setActive = (nextIndex) => {
        slides.forEach((slide, i) => {
          if (i === nextIndex) {
            slide.classList.remove('opacity-0', 'pointer-events-none');
            slide.classList.add('opacity-100');
          } else {
            slide.classList.add('opacity-0', 'pointer-events-none');
            slide.classList.remove('opacity-100');
          }
        });
        dots.forEach((dot, i) => {
          dot.classList.toggle('bg-white', i === nextIndex);
          dot.classList.toggle('bg-white/50', i !== nextIndex);
        });
        index = nextIndex;
      };
      const showNext = () => setActive((index + 1) % slides.length);
      const showPrev = () => setActive((index - 1 + slides.length) % slides.length);
      let interval = setInterval(showNext, 6000);
      const resetInterval = () => {
        clearInterval(interval);
        interval = setInterval(showNext, 6000);
      };
      next?.addEventListener('click', () => { showNext(); resetInterval(); });
      prev?.addEventListener('click', () => { showPrev(); resetInterval(); });
      dots.forEach((dot, i) => {
        dot.addEventListener('click', () => { setActive(i); resetInterval(); });
      });
      setActive(0);
    });
  })();
</script>
<?php require __DIR__ . '/partials/footer.php'; ?>
