<?php
$pageTitle = 'Secundaria | Colegio del Valle';
$pageDescription = 'Secundaria en Colegio del Valle: pensamiento critico, inglés y acompanamiento académico.';
$activePage = 'secundaria';
$baseUrl = defined('BASE_URL') ? BASE_URL : '';
$menuItems = require __DIR__ . '/partials/menu-items.php';
$menuSubItems = require __DIR__ . '/partials/des-menu-subitems.php';
$logoDarkSrc = $baseUrl . '/_imgs/Colegio-del-Valle-Logo-342x206.webp';
$headerWrapperClass = 'z-40 border-b border-slate-200 bg-white/95 backdrop-blur-sm';
$heroEyebrow = 'Oferta educativa';
$heroTitle = 'SECUNDARIA';
$heroDescription = 'Etapa de consolidacion academica y personal con enfoque en liderazgo, valores y preparacion futura.';
$heroIcon = 'shield-check';
$enableAos = true;
$heroYoutubeEmbed = 'https://www.youtube-nocookie.com/embed/r4e50DQsLmo?autoplay=1&rel=0';
$heroVideoTitle = 'Secundaria - Colegio del Valle';
require __DIR__ . '/partials/head-start.php';
?>
<style>
  section.pt-0.pb-0.bg-white { display: none; }
  .des-hero-title { font-family: "Lilita One", cursive; font-size: clamp(2.5rem, 8vw, 6.2rem); line-height: 0.92; letter-spacing: 0.03em; text-transform: uppercase; }
  .cta-pulse { animation: cta-elegant-pulse 2.8s ease-in-out infinite; box-shadow: 0 12px 30px rgba(11, 79, 108, 0.38); }
  .cta-pulse:hover { animation-play-state: paused; }
  .cta-admisiones { background: #fff; color: #0b4f6c; border: 1px solid rgba(255, 255, 255, 0.5); }
  .cta-admisiones:hover { filter: brightness(0.98); }
  .cta-ripple { position: relative; isolation: isolate; z-index: 0; }
  .cta-ripple::before, .cta-ripple::after { content: ""; position: absolute; inset: -10px; border-radius: 9999px; border: 2px solid rgba(255, 255, 255, 0.55); transform: scale(0.9); opacity: 0; pointer-events: none; z-index: -1; animation: cta-water-ripple 2.6s ease-out infinite; }
  .cta-ripple::after { animation-delay: 1.3s; }
  @keyframes cta-elegant-pulse { 0%,100% { transform: scale(1); box-shadow: 0 12px 30px rgba(11,79,108,0.38);} 50% { transform: scale(1.035); box-shadow: 0 16px 40px rgba(30,64,175,0.45);} }
  @keyframes cta-water-ripple { 0% { transform: scale(0.88); opacity: 0.55; } 75% { transform: scale(1.38); opacity: 0; } 100% { transform: scale(1.42); opacity: 0; } }
  h1, h2, h3 { font-family: "Lilita One", cursive; font-weight: 400; color: #345995; }
</style>
<div class="flex h-[70vh] min-h-[70svh] min-h-[70dvh] flex-col">
<?php require __DIR__ . '/partials/header-white-sidebar.php'; ?>
<section class="relative flex-1 overflow-hidden bg-gradient-to-br from-[#0B4F6C] via-[#345995] to-[#03CEA4]" data-aos="zoom-out" data-aos-duration="900">
  <div class="pointer-events-none absolute -left-20 top-10 h-52 w-52 rounded-full bg-[#EAC435]/25 blur-3xl"></div>
  <div class="pointer-events-none absolute -right-16 bottom-8 h-64 w-64 rounded-full bg-[#FB4D3D]/20 blur-3xl"></div>
  <div class="mx-auto grid h-full w-full max-w-[1300px] items-center gap-10 px-6 py-8 lg:grid-cols-2">
    <div class="text-center lg:text-left" data-aos="fade-right" data-aos-delay="80">
      <div class="mb-4 inline-flex items-center justify-center text-white/90 lg:justify-start"><span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/35 bg-white/10"><i data-lucide="<?= htmlspecialchars($heroIcon, ENT_QUOTES, 'UTF-8') ?>" class="h-5 w-5"></i></span></div>
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-white/80"><?= htmlspecialchars($heroEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
      <h1 class="des-hero-title mt-4 text-white drop-shadow-[0_8px_24px_rgba(2,8,23,0.28)]"><?= htmlspecialchars($heroTitle, ENT_QUOTES, 'UTF-8') ?></h1>
      <p class="mt-6 max-w-xl text-base leading-relaxed text-white/95 md:text-lg"><?= htmlspecialchars($heroDescription, ENT_QUOTES, 'UTF-8') ?></p>
    </div>
    <div class="relative overflow-hidden rounded-3xl border border-white/25 bg-slate-900/35 shadow-2xl" data-aos="fade-left" data-aos-delay="140">
      <div class="relative aspect-[16/10] w-full" data-video-shell>
        <iframe class="absolute inset-0 h-full w-full" src="" data-youtube="<?= htmlspecialchars($heroYoutubeEmbed, ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($heroVideoTitle, ENT_QUOTES, 'UTF-8') ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="absolute inset-0 z-10" data-video-cover>
          <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/pexels-anastasia-shuraeva-8466763.jpg" alt="Video <?= htmlspecialchars($heroTitle, ENT_QUOTES, 'UTF-8') ?> Colegio del Valle" loading="lazy" />
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950/55 via-slate-950/20 to-transparent"></div>
          <div class="absolute left-1/2 top-1/2 z-20 flex -translate-x-1/2 -translate-y-1/2 flex-col items-center"><button class="cta-ripple cta-pulse cta-admisiones inline-flex h-20 w-20 items-center justify-center rounded-full shadow-2xl" type="button" data-video-play aria-label="Reproducir video <?= htmlspecialchars($heroTitle, ENT_QUOTES, 'UTF-8') ?>"><span class="ml-1 text-3xl leading-none">▶</span></button></div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<?php
$defaultInterest = 'Secundaria';
$sourcePage = 'Pagina Secundaria CDV';
$turnstileConfig = [];
$turnstileConfigPath = __DIR__ . '/../config/turnstile.local.php';
if (file_exists($turnstileConfigPath)) {
    $turnstileConfig = require $turnstileConfigPath;
}
$turnstileSiteKey = (string) ($turnstileConfig['site_key'] ?? getenv('TURNSTILE_SITE_KEY') ?? '');
$turnstileEnabled = $turnstileSiteKey !== '' && $turnstileSiteKey !== 'PON_AQUI_TU_TURNSTILE_SITE_KEY';
?>
<?php if ($turnstileEnabled): ?>
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<?php endif; ?>
<section class="pt-0 pb-0 bg-white" data-aos="fade-up">
  <div class="w-full mx-auto px-0">
    <div class="h-[480px] w-full overflow-hidden rounded-none border border-slate-200 bg-white">
      <iframe
        class="h-full w-full"
        src="https://www.youtube-nocookie.com/embed/r4e50DQsLmo?rel=0"
        title="Secundaria - Colegio del Valle"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen
      ></iframe>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-2 items-start lg:items-center">
    <div class="text-center lg:text-left">
      <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#345995]">RVOE SEP 09000053/22/06/2000</p>
      <h1 class="mt-6 text-3xl md:text-4xl font-semibold text-[#345995]">
        ¿Buscas Secundarias en la Colonia del Valle? ¡Conoce nuestra institución!
      </h1>
      <p class="mt-4 text-slate-900 leading-relaxed">
        Conoce nuestros planes de estudio y las actividades extracurriculares que tus hijos podrán experimentar en una de
        las mejores secundarias en la Colonia del Valle.
      </p>
    </div>
    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
      <?php require __DIR__ . '/partials/admisiones-form.php'; ?>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 text-center">
    <h2 class="mt-3 text-4xl md:text-5xl font-semibold text-[#345995]">Requisitos</h2>
    <p class="mt-4 text-[#345995]">Para poder cursar alguno de los grados de Secundaria en Colegio Del Valle se requiere cumplir</p>
    <p class="mt-2 text-slate-900">con los siguientes documentos:</p>
  </div>
  <div class="mt-12 max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[1.4fr,0.6fr]">
    <div class="space-y-8">
      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
          Requisitos de ingreso para Secundaria:
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <ul class="space-y-2 list-disc pl-6">
            <li>Aprobar el examen psicometrico: Inteligencia y personalidad.</li>
            <li>Aprobar examen académico.</li>
            <li>Entrevista personal con Padres y alumnos aspirantes.</li>
            <li>Si acredita las pruebas se le hace entrega de su ficha con firma de aceptacion para iniciar con proceso de inscripción.</li>
          </ul>
          <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">
            Documentos para entregar en el Departamento de Control Escolar en original y dos copias:
          </p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Acta de nacimiento (por ambos lados).</li>
            <li>Certificado de primaria y/o boleta original con promedio final de mínimo 7.5 (por ambos lados).</li>
            <li>Carta de buena conducta.</li>
            <li>Carta de no adeudo de la escuela de procedencia.</li>
            <li>CURP (solo copias).</li>
            <li>4 fotos infantiles a color o blanco y negro.</li>
            <li>No debe de traer materias reprobadas del ciclo anterior.</li>
            <li>Certificado médico expedido por la secretaría de salud.</li>
            <li>Nota: Aspirantes extranjeros indispensable presentar acreditacion de estancia legal en nuestro pais (FM3 - FM2).</li>
            <li>Documentos originales apostillados.</li>
          </ul>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
          En caso de Segundo de Secundaria agregar:
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <ul class="space-y-2 list-disc pl-6">
            <li>Boleta de 1er grado de Secundaria.</li>
          </ul>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
          En caso de Tercero de Secundaria agregar:
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <ul class="space-y-2 list-disc pl-6">
            <li>Boleta de 1° de Secundaria.</li>
            <li>Boleta de 2° de Secundaria.</li>
            <li>Créditos legalizados en caso de que hayan reprobado materias en 1° o 2° de secundaria.</li>
          </ul>
        </div>
      </details>
    </div>
    <div class="flex flex-col gap-4">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] transition border-[#345995] bg-[#345995] text-white hover:brightness-110" href="<?= $baseUrl ?>/contacto/">
        <i class="text-base" data-lucide="info"></i>
        Mas información
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] transition border-[#03CEA4] bg-[#03CEA4] text-slate-900 hover:brightness-105" href="<?= $baseUrl ?>/_assets/PDFs/secundaria/Colegio-Del-Valle-Requisitos-Secundaria.pdf" target="_blank" rel="noopener">
        <i class="text-base" data-lucide="download"></i>
        Descargar requisitos
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[0.9fr,1.1fr] items-start" data-tabscope data-default="modelo">
    <div class="rounded-3xl border border-slate-200 bg-white p-6 space-y-3">
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-cyan-600 shadow-sm" type="button" data-tab="modelo">
        <i class="text-lg" data-lucide="book-open"></i>
        Modelo Educativo Secundaria
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="mision">
        <i class="text-lg" data-lucide="flag"></i>
        Misión
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="vision">
        <i class="text-lg" data-lucide="eye"></i>
        Visión
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="valores">
        <i class="text-lg" data-lucide="heart"></i>
        Valores
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="talleres">
        <i class="text-lg" data-lucide="brush"></i>
        Talleres extraescolares
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="horario">
        <i class="text-lg" data-lucide="clock-3"></i>
        Horarios
      </button>
    </div>
    <div class="min-h-[280px] rounded-3xl border border-slate-200 bg-white p-8">
      <div data-panel="modelo">
        <h3 class="text-3xl font-semibold text-slate-800">Modelo Educativo Secundaria</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Entre las mejores escuelas Secundarias en la Colonia del Valle, conoce Colegio Del Valle, una Institución
          Educativa Privada pensada para el desarrollo optimo de adolescentes.
        </p>
        <p class="mt-4 text-slate-600 leading-relaxed">
          El Colegio Del Valle es reconocido hoy en día, como una institución seria, honesta y comprometida con la
          educación de nuestra juventud, que trabaja por dotar a nuestra nación de ciudadanos conscientes y capaces de
          enfrentar y transformar el mundo dinámico que les toco vivir. En este sentido, es sabido que al tiempo que se
          abordan los contenidos curriculares que establece la normatividad vigente de la SEP, simultáneamente hemos
          implementado estrategias de trabajo encaminadas a fomentar el trabajo colaborativo y el desarrollo de
          capacidades encaminadas para resolver problemas reales.
        </p>
      </div>
      <div class="hidden" data-panel="mision">
        <h3 class="text-3xl font-semibold text-slate-800">Misión</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          La secundaria Colegio Del Valle tiene como misión ser una institución educativa, que ofrece la formación de
          jóvenes que sean capaces de desarrollar habilidades, actitudes y valores para su vida académica y cotidiana,
          fomentando en ellos las buenas costumbres y virtudes humanas.
        </p>
      </div>
      <div class="hidden" data-panel="vision">
        <h3 class="text-3xl font-semibold text-slate-800">Visión</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Ofrecemos una Educación Secundaria de calidad, y de vanguardia en el modelo educativo, con reconocimiento y
          personal altamente capacitado, comprometido con la institución.
        </p>
      </div>
      <div class="hidden" data-panel="valores">
        <h3 class="text-3xl font-semibold text-slate-800">Valores</h3>
        <ul class="mt-4 space-y-2 text-slate-600 list-disc pl-6">
          <li>Moral.</li>
          <li>Etica.</li>
          <li>Verdad.</li>
          <li>Justicia.</li>
          <li>Pensamiento.</li>
          <li>Inteligencia.</li>
          <li>Libertad.</li>
          <li>Respeto a los demas.</li>
        </ul>
      </div>
      <div class="hidden" data-panel="talleres">
        <h3 class="text-3xl font-semibold text-slate-800">Talleres extraescolares</h3>
        <ul class="mt-4 space-y-2 text-slate-600 list-disc pl-6">
          <li>Futbol</li>
          <li>Baloncesto</li>
          <li>Voleibol</li>
          <li>Tocho Bandera</li>
          <li>Taekwondo</li>
          <li>Porras</li>
          <li>Capoeira</li>
          <li>Piano</li>
          <li>Ajedrez</li>
        </ul>
      </div>
      <div class="hidden" data-panel="horario">
        <h3 class="text-3xl font-semibold text-slate-800">Horarios</h3>
        <p class="mt-4 text-slate-600">Lunes a Viernes</p>
        <p class="mt-2 text-slate-600">Entrada de 7:00 a 7:20 a.m.</p>
        <p class="mt-2 text-slate-600">Salida 15:00 hrs</p>
        <p class="mt-2 text-slate-600">Servicio de Comedor 15:00 hrs</p>
        <p class="mt-2 text-slate-600">Talleres Extraescolares de 15:30 a 17:30 hrs</p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="grid gap-6 md:grid-cols-3">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] transition border-[#345995] bg-[#345995] text-white hover:brightness-110" href="<?= $baseUrl ?>/_assets/PDFs/secundaria/REGLAMENTO-COMPLETO-SECUNDARIA.pdf" target="_blank" rel="noopener">
        <i class="text-base" data-lucide="file-text"></i>
        Reglamento
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] transition border-[#03CEA4] bg-[#03CEA4] text-slate-900 hover:brightness-105" href="<?= $baseUrl ?>/_imgs/secundaria/Calendario-secundaria-com.webp" target="_blank" rel="noopener">
        <i class="text-base" data-lucide="calendar-days"></i>
        Calendario académico
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] transition border-[#EAC435] bg-[#EAC435] text-slate-900 hover:brightness-105" href="<?= $baseUrl ?>/formas-de-pago">
        <i class="text-base" data-lucide="credit-card"></i>
        Formas de pago
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 text-center" data-tabscope data-default="ofrecemos">
    <h2 class="text-3xl md:text-4xl font-semibold text-slate-800">Servicios</h2>
    <p class="mt-3 text-slate-600">Conoce más sobre lo que las mejores Escuelas Secundarias en CDMX te ofrecen.</p>

    <div class="mt-8">
      <div class="inline-flex flex-wrap justify-center gap-2 rounded-full border border-slate-200 bg-white p-2 text-xs font-semibold uppercase tracking-[0.2em] text-slate-600">
        <button class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-cyan-700" type="button" data-tab="ofrecemos">
          <i class="text-base" data-lucide="check"></i>
          Ofrecemos
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="servicios">
          <i class="text-base" data-lucide="briefcase"></i>
          Servicios adicionales
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="talleres">
          <i class="text-base" data-lucide="palette"></i>
          Talleres vespertinos
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="plan">
          <i class="text-base" data-lucide="list"></i>
          Plan de estudios
        </button>
      </div>
      <div class="mt-6 rounded-3xl border border-slate-200 bg-white p-8 text-left">
        <div data-panel="ofrecemos">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Grupos reducidos (maximo 23 alumnos)</li>
            <li>Profesorado altamente calificado</li>
            <li>Servicio médico</li>
            <li>Comedor</li>
            <li>Biblioteca y hemeroteca</li>
            <li>Aula de computo</li>
            <li>Aula de música</li>
          </ul>
        </div>
        <div class="hidden" data-panel="servicios">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Inglés avanzado</li>
            <li>Instalaciones de vanguardia</li>
            <li>Seguridad Interna</li>
            <li>Convenios institucionales</li>
            <li>Escuela para padres</li>
          </ul>
        </div>
        <div class="hidden" data-panel="talleres">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Futbol</li>
            <li>Artes Plasticas</li>
            <li>Musica</li>
            <li>Taekwondo</li>
            <li>Porras</li>
            <li>Taller de tareas</li>
            <li>Nivelacion inglés</li>
          </ul>
        </div>
        <div class="hidden" data-panel="plan">
          <div class="grid gap-8 md:grid-cols-3 text-slate-600">
            <div>
              <p class="text-2xl font-semibold text-slate-800">Primero</p>
              <ul class="mt-3 list-disc pl-6 space-y-1">
                <li>Espanol I</li>
                <li>Matemáticas I</li>
                <li>Ciencias I (énfasis en Biología)</li>
                <li>Geografia de Mexico y del Mundo</li>
                <li>Lengua Extranjera I</li>
                <li>Educación Física I</li>
                <li>Artes (Danza)</li>
                <li>Introduccion a Física y Química</li>
                <li>Desarrollo Humano</li>
                <li>Tecnología I (Diseno Grafico, Diseno y Creacion Plastica, Turismo, Electronica, Diseno Arquitectonico e Informatica)</li>
              </ul>
            </div>
            <div>
              <p class="text-2xl font-semibold text-slate-800">Segundo</p>
              <ul class="mt-3 list-disc pl-6 space-y-1">
                <li>Espanol II</li>
                <li>Matemáticas II</li>
                <li>Ciencias II (énfasis en Física)</li>
                <li>Historia I</li>
                <li>Formación Civica y Etica I</li>
                <li>Lengua Extranjera II</li>
                <li>Educación Física II</li>
                <li>Artes (Danza)</li>
                <li>Química</li>
                <li>Tecnología II (Diseno Grafico, Diseno y Creacion Plastica, Turismo, Electronica, Diseno Arquitectonico e Informatica)</li>
              </ul>
            </div>
            <div>
              <p class="text-2xl font-semibold text-slate-800">Tercero</p>
              <ul class="mt-3 list-disc pl-6 space-y-1">
                <li>Espanol III</li>
                <li>Matemáticas III</li>
                <li>Ciencias III (énfasis en Química)</li>
                <li>Historia II</li>
                <li>Formación Civica y Etica II</li>
                <li>Lengua Extranjera III</li>
                <li>Educación Física III</li>
                <li>Artes (Danza)</li>
                <li>Física</li>
                <li>Tecnología III (Diseno Grafico, Diseno y Creacion Plastica, Turismo, Electronica, Diseno Arquitectonico e Informatica)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6">
    <h2 class="text-4xl md:text-5xl font-semibold text-[#345995] text-center">Preguntas frecuentes</h2>
    <div class="mt-10 space-y-5">
      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
          ¿Cómo sacar el certificado de secundaria?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            Antes de sacar el certificado de secundaria, el estudiante debió culminar sus estudios en uno de los colegios
            autorizados por la Secretaria de Educación Publica (SEP). A través de la plataforma de esta institución, así
            como del INEA, puedes sacar el certificado de secundaria en caso de haberlo extraviado.
          </p>
          <p>Para sacar el certificado de educación secundaria deberás seguir los siguientes pasos:</p>
          <ul class="list-disc pl-6 space-y-1">
            <li>Se debe ingresar al sitio web del INEA.</li>
            <li>Suministrar al sistema el número CURP.</li>
            <li>Seleccionar el nivel "secundaria".</li>
            <li>Oprimir descargar para obtener tu certificado.</li>
          </ul>
          <p>
            Colegio del Valle es una institución autorizada por el SEP y las certificaciones de los alumnos en todas las
            etapas estan cargadas al sistema INEA. Puedes obtener el historial académico de tu hijo ingresando al sistema
            del colegio.
          </p>
          <p>¡Un clic y accede rápido y fácil al record académico de tu hijo!</p>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
          ¿Cuándo salen de vacaciones los de secundaria?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            El calendario para la educación de la SEP indica que las clases culminan oficialmente el próximo 19 de julio.
            No obstante, como los profesores tomaran un ciclo de formación previo a esta fecha, las vacaciones para los
            alumnos de kinder, primaria y secundaria iniciaran el 16 de julio. El calendario para los estudiantes de
            secundaria del Colegio Del Valle se rige bajo el mismo esquema.
          </p>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
          Se me pasaron las preinscripciones de secundaria, ¿que puedo hacer?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            Si has culminado la primaria en esta institución, en Colegio Del Valle las inscripciones a educación
            secundaria se realizan de forma automática. Recuerda, el sistema educativo mexicano garantiza el derecho que
            tiene todo niño a la educación.
          </p>
          <p>
            Si perdiste la oportunidad en las preinscripciones, espera a que la SEP publique las fechas para inscripciones
            extemporaneas. ¡Animo!
          </p>
          <p>
            Colegio del Valle resguarda el derecho a la educación, contacta a través de su sitio web y números de WhatsApp
            para formalizar la inscripción.
          </p>
          <p>¡Que tu hijo no se quede fuera!</p>
        </div>
      </details>
    </div>
  </div>
</section>

<script>
  (() => {
    const scopes = document.querySelectorAll('[data-tabscope]');
    scopes.forEach((scope) => {
      const tabs = scope.querySelectorAll('[data-tab]');
      const panels = scope.querySelectorAll('[data-panel]');
      const setActive = (key) => {
        tabs.forEach((tab) => {
          const active = tab.getAttribute('data-tab') === key;
          tab.classList.toggle('text-cyan-600', active);
          tab.classList.toggle('shadow-sm', active);
          tab.classList.toggle('bg-cyan-50', active);
          tab.classList.toggle('text-slate-600', !active);
        });
        panels.forEach((panel) => {
          panel.classList.toggle('hidden', panel.getAttribute('data-panel') !== key);
        });
      };
      tabs.forEach((tab) => {
        tab.addEventListener('click', () => setActive(tab.getAttribute('data-tab')));
      });
      setActive(scope.getAttribute('data-default') || tabs[0]?.getAttribute('data-tab'));
    });
  })();
</script>
<script>
  (() => {
    const shell = document.querySelector('[data-video-shell]');
    if (!shell) return;
    const iframe = shell.querySelector('iframe[data-youtube]');
    const cover = shell.querySelector('[data-video-cover]');
    const play = shell.querySelector('[data-video-play]');
    if (!iframe || !cover || !play) return;
    play.addEventListener('click', () => {
      const src = iframe.getAttribute('data-youtube');
      if (!src) return;
      iframe.src = src;
      cover.classList.add('opacity-0', 'pointer-events-none');
    });
  })();
</script>
<script>
  window.addEventListener('load', () => {
    if (!window.AOS) return;
    window.AOS.init({ duration: 800, easing: 'ease-out-cubic', once: false, mirror: true, offset: 60 });
  });
</script>
<?php require __DIR__ . '/partials/footer.php'; ?>
