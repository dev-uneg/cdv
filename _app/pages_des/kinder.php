<?php
$pageTitle = 'Kinder | Colegio del Valle';
$pageDescription = 'Kinder en Colonia del Valle: atención, cuidados y educación preescolar con valores y aprendizaje activo.';
$activePage = 'kinder';
$baseUrl = defined('BASE_URL') ? BASE_URL : '';
$menuItems = require __DIR__ . '/partials/menu-items.php';
$menuSubItems = require __DIR__ . '/partials/des-menu-subitems.php';
$enableAos = true;
$logoDarkSrc = $baseUrl . '/_imgs/Colegio-del-Valle-Logo-342x206.webp';
$headerWrapperClass = 'z-40 border-b border-slate-200 bg-white/95 backdrop-blur-sm';
$heroEyebrow = 'Oferta educativa';
$heroTitle = 'KINDER';
$heroDescription = 'Atencion, cuidados y aprendizaje activo para que los mas pequenos descubran el gusto por aprender.';
$heroIcon = 'sparkles';
require __DIR__ . '/partials/head-start.php';
?>
<style>
  .des-hero-title {
    font-family: "Lilita One", cursive;
    font-size: clamp(2.5rem, 8vw, 6.2rem);
    line-height: 0.92;
    letter-spacing: 0.03em;
    text-transform: uppercase;
  }
  .cta-pulse {
    animation: cta-elegant-pulse 2.8s ease-in-out infinite;
    box-shadow: 0 12px 30px rgba(11, 79, 108, 0.38);
  }
  .cta-pulse:hover {
    animation-play-state: paused;
  }
  .cta-admisiones {
    background: #fff;
    color: #0b4f6c;
    border: 1px solid rgba(255, 255, 255, 0.5);
  }
  .cta-admisiones:hover {
    filter: brightness(0.98);
  }
  .cta-ripple {
    position: relative;
    isolation: isolate;
    z-index: 0;
  }
  .cta-ripple::before,
  .cta-ripple::after {
    content: "";
    position: absolute;
    inset: -10px;
    border-radius: 9999px;
    border: 2px solid rgba(255, 255, 255, 0.55);
    transform: scale(0.9);
    opacity: 0;
    pointer-events: none;
    z-index: -1;
    animation: cta-water-ripple 2.6s ease-out infinite;
  }
  .cta-ripple::after {
    animation-delay: 1.3s;
  }
  @keyframes cta-elegant-pulse {
    0%, 100% {
      transform: scale(1);
      box-shadow: 0 12px 30px rgba(11, 79, 108, 0.38);
    }
    50% {
      transform: scale(1.035);
      box-shadow: 0 16px 40px rgba(30, 64, 175, 0.45);
    }
  }
  @keyframes cta-water-ripple {
    0% {
      transform: scale(0.88);
      opacity: 0.55;
    }
    75% {
      transform: scale(1.38);
      opacity: 0;
    }
    100% {
      transform: scale(1.42);
      opacity: 0;
    }
  }
  .kinder-content h1,
  .kinder-content h2,
  .kinder-content h3 {
    font-family: "Lilita One", cursive;
    font-weight: 400;
  }
</style>
<div class="flex h-[70vh] min-h-[70svh] min-h-[70dvh] flex-col">
<?php require __DIR__ . '/partials/header-white-sidebar.php'; ?>
<section class="relative flex-1 overflow-hidden bg-gradient-to-br from-[#0B4F6C] via-[#345995] to-[#03CEA4]" data-aos="zoom-out" data-aos-duration="900">
  <div class="pointer-events-none absolute -left-20 top-10 h-52 w-52 rounded-full bg-[#EAC435]/25 blur-3xl"></div>
  <div class="pointer-events-none absolute -right-16 bottom-8 h-64 w-64 rounded-full bg-[#FB4D3D]/20 blur-3xl"></div>
  <div class="mx-auto grid h-full w-full max-w-[1300px] items-center gap-10 px-6 py-8 lg:grid-cols-2">
    <div class="text-center lg:text-left" data-aos="fade-right" data-aos-delay="80">
      <div class="mb-4 inline-flex items-center justify-center text-white/90 lg:justify-start">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/35 bg-white/10">
          <i data-lucide="<?= htmlspecialchars($heroIcon, ENT_QUOTES, 'UTF-8') ?>" class="h-5 w-5"></i>
        </span>
      </div>
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-white/80"><?= htmlspecialchars($heroEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
      <h1 class="des-hero-title mt-4 text-white drop-shadow-[0_8px_24px_rgba(2,8,23,0.28)]"><?= htmlspecialchars($heroTitle, ENT_QUOTES, 'UTF-8') ?></h1>
      <p class="mt-6 max-w-xl text-base leading-relaxed text-white/95 md:text-lg">
        <?= htmlspecialchars($heroDescription, ENT_QUOTES, 'UTF-8') ?>
      </p>
    </div>
    <div class="relative overflow-hidden rounded-3xl border border-white/25 bg-slate-900/35 shadow-2xl" data-aos="fade-left" data-aos-delay="140">
      <div class="relative aspect-[16/10] w-full" data-video-shell>
        <iframe
          class="absolute inset-0 h-full w-full"
          src=""
          data-youtube="https://www.youtube-nocookie.com/embed/WkNgD96x30Q?autoplay=1&rel=0"
          title="Kinder - Colegio del Valle"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
        <div class="absolute inset-0 z-10" data-video-cover>
          <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/pexels-anastasia-shuraeva-8466763.jpg" alt="Video Kinder Colegio del Valle" loading="lazy" />
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950/55 via-slate-950/20 to-transparent"></div>
          <div class="absolute left-1/2 top-1/2 z-20 flex -translate-x-1/2 -translate-y-1/2 flex-col items-center">
            <button class="cta-ripple cta-pulse cta-admisiones inline-flex h-20 w-20 items-center justify-center rounded-full shadow-2xl" type="button" data-video-play aria-label="Reproducir video Kinder">
              <span class="ml-1 text-3xl leading-none">▶</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<?php
$defaultInterest = 'Kinder';
$sourcePage = 'Pagina Kinder CDV';
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

<div class="kinder-content">
<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-2 items-start lg:items-center">
    <div class="text-center lg:text-left" data-aos="fade-up" data-aos-delay="60">
      <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-600">RVOE SEP 09060319/07/2006</p>
      <h1 class="mt-6 text-3xl md:text-4xl font-semibold text-[#345995]">
        Kinder en la Colonia del Valle: Atención, cuidados y educación
      </h1>
      <p class="mt-4 text-slate-600 leading-relaxed">
        ¿Buscas un kinder en la Colonia del Valle? Atentos a la educación de los mas pequeños, ponemos a tu disposición
        la calidad en la enseñanza de nuestros profesores, así como la atención y el cuidado que las escuelas preescolares
        deben tener. ¡Tus hijos aprenderán a partir de la diversión!
      </p>
    </div>
    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm" data-aos="fade-up" data-aos-delay="120">
      <?php require __DIR__ . '/partials/admisiones-form.php'; ?>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 text-center" data-aos="fade-up" data-aos-delay="50">
    <h2 class="mt-3 text-4xl md:text-5xl font-semibold text-[#345995]">Requisitos</h2>
    <p class="mt-4 text-slate-600">Para poder cursar el Kinder en Colegio Del Valle se requiere cumplir con</p>
    <p class="mt-2 text-slate-600">los siguientes documentos:</p>
  </div>
  <div class="mt-12 max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[1.4fr,0.6fr]">
    <div class="space-y-8" data-accordion>
      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm" data-aos="fade-up" data-aos-delay="80">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-700">
            <i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i>
          </span>
          Alumno
        </summary>
        <ul class="mt-5 space-y-2 text-slate-600 list-disc pl-6">
          <li>3 Fotografias tamaño infantil.</li>
          <li>Acta de Nacimiento.*</li>
          <li>Cartilla de Vacunacion.*</li>
          <li>Certificado Médico.*</li>
          <li>Hojas de Registro.*</li>
          <li>CURP* Original y 2 copias.</li>
        </ul>
        <p class="mt-4 text-sm text-slate-600">
          <span class="font-semibold text-slate-800">Nota:</span> Si en el momento de inscripción no presenta alguno
          de estos documentos se suspenderá el trámite de inscripción.
        </p>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm" data-aos="fade-up" data-aos-delay="140">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-700">
            <i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i>
          </span>
          Padres o Tutores
        </summary>
        <ul class="mt-5 space-y-2 text-slate-600 list-disc pl-6">
          <li>1 Fotografias tamaño infantil de cada uno o 3 Fotografias tamaño infantil de personas autorizadas para llevar al alumno a casa.</li>
          <li>Copia de Credencial del IFE.</li>
          <li>Carta de autorización de Padres para que otras personas recojan a sus hijos.</li>
        </ul>
      </details>
    </div>
    <div class="flex flex-col gap-4" data-aos="fade-left" data-aos-delay="180">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-[#345995] bg-[#345995] px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-white transition hover:brightness-110" href="<?= $baseUrl ?>/contacto/" data-aos="zoom-in" data-aos-delay="240">
        <i class="text-base" data-lucide="info"></i>
        Mas información
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-[#03CEA4] bg-[#03CEA4] px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-900 transition hover:brightness-105" href="<?= $baseUrl ?>/_assets/PDFs/kinder/Colegio-Del-Valle-Requisitos-Kinder-2023.pdf" target="_blank" rel="noopener" data-aos="zoom-in" data-aos-delay="300">
        <i class="text-base" data-lucide="download"></i>
        Descargar requisitos
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[0.9fr,1.1fr] items-start" data-tabscope data-default="modelo">
    <div class="rounded-3xl border border-slate-200 bg-white p-6 space-y-3" data-aos="fade-right" data-aos-delay="80">
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-cyan-600 shadow-sm" type="button" data-tab="modelo">
        <i class="text-lg" data-lucide="book-open"></i>
        Modelo Educativo Kinder
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="talleres">
        <i class="text-lg" data-lucide="brush"></i>
        Talleres extraescolares
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="horario">
        <i class="text-lg" data-lucide="clock-3"></i>
        Horarios
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
    </div>
    <div class="min-h-[280px] rounded-3xl border border-slate-200 bg-white p-8" data-aos="fade-left" data-aos-delay="120">
      <div data-panel="modelo">
        <h3 class="text-3xl font-semibold text-[#345995]">Modelo Educativo Kinder</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Nuestro modelo esta basado en el conocimiento significativo, promoviendo la investigación,
          experimentacion, análisis y reflexión en forma dinámica y atractiva para los educandos,
          promoviendo toma de decisiones en un ambiente alegre, de juego y trabajo en equipo, en comunidad
          y en familia que de una manera conjunta nos llevaran a grandes logros por medio de una comunicación
          continua de trabajo estrecho con padres de familia verdaderamente conscientes de la educación y
          responsables de la formación de sus hijos.
        </p>
      </div>
      <div class="hidden" data-panel="talleres">
        <h3 class="text-3xl font-semibold text-[#345995]">Talleres extraescolares</h3>
        <ul class="mt-4 space-y-2 text-slate-600 list-disc pl-6">
          <li>Futbol</li>
          <li>Taekwondo</li>
          <li>Pintura</li>
          <li>Artesanias</li>
          <li>Cocina</li>
          <li>Ajedrez</li>
        </ul>
      </div>
      <div class="hidden" data-panel="horario">
        <h3 class="text-3xl font-semibold text-[#345995]">Horarios</h3>
        <p class="mt-4 text-slate-600">Lunes a Viernes</p>
        <p class="mt-2 text-slate-600">Entrada de 7:20 a 8:00 a.m.</p>
        <p class="mt-2 text-slate-600">Salida 13:20 hrs</p>
        <p class="mt-2 text-slate-600">Servicio de Comedor 15:00 hrs</p>
        <p class="mt-2 text-slate-600">Talleres Extraescolares de 15:30 a 17:30 hrs</p>
      </div>
      <div class="hidden" data-panel="mision">
        <h3 class="text-3xl font-semibold text-[#345995]">Misión</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          El quehacer educativo de esta institución es respaldado por 50 años de experiencia en la labor educativa
          y nuestro principal objetivo en el Kinder Colegio Del Valle es lograr una verdadera educación integral
          promoviendo y desarrollando aquellas competencias, capacidades intelectuales, sociales, creativas y fisicas
          en los niños y niñas de 3 a 5 años, poniendo especial interés en la educación en valores en un ambiente de
          armonia, con el fin de formar personas verdaderamente comprometidas con su entorno.
        </p>
      </div>
      <div class="hidden" data-panel="vision">
        <h3 class="text-3xl font-semibold text-[#345995]">Visión</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Nuestra institución es reconocida por la comunidad debido a los logros de los niños y niñas ya que, se
          promueve una educación integral a través de la investigación, análisis y reflexión, que en forma dinámica
          y atractiva se imparte contando con el profesionalismo o compromiso del equipo directivo, docente y
          administrativo que hace posible esta gran labor que es la formación integral de la población educativa
          que atendemos.
        </p>
      </div>
      <div class="hidden" data-panel="valores">
        <h3 class="text-3xl font-semibold text-[#345995]">Valores</h3>
        <ul class="mt-4 space-y-2 text-slate-600 list-disc pl-6">
          <li>Moral.</li>
          <li>Pensamiento.</li>
          <li>Etica.</li>
          <li>Inteligencia.</li>
          <li>Verdad.</li>
          <li>Libertad.</li>
          <li>Justicia.</li>
          <li>Respeto a los demas.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 text-center" data-tabscope data-default="ofrecemos">
    <h2 class="text-3xl md:text-4xl font-semibold text-[#345995]" data-aos="fade-up" data-aos-delay="40">Servicios</h2>
    <p class="mt-3 text-slate-600">Conoce a detalle qué distingue a nuestra Escuela Kinder.</p>

    <div class="mt-8">
      <div class="inline-flex flex-wrap justify-center gap-2 rounded-full border border-slate-200 bg-white p-2 text-xs font-semibold uppercase tracking-[0.2em] text-slate-600" data-aos="fade-up" data-aos-delay="90">
        <button class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-cyan-700" type="button" data-tab="ofrecemos">
          <i class="text-base" data-lucide="graduation-cap"></i>
          Ofrecemos
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="ademas">
          <i class="text-base" data-lucide="award"></i>
          Además
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="talleres">
          <i class="text-base" data-lucide="volleyball"></i>
          Talleres vespertinos
        </button>
        <button
          id="1770308278594-558bbf51-173f"
          class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50"
          type="button"
          data-tab="plan"
        >
          <i class="text-base" data-lucide="list"></i>
          Plan de Estudios
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="horario-serv">
          <i class="text-base" data-lucide="clock-3"></i>
          Horarios
        </button>
      </div>
      <div class="mt-6 rounded-3xl border border-slate-200 bg-white p-8 text-left" data-aos="fade-up" data-aos-delay="130">
        <div data-panel="ofrecemos">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Grupos reducidos (máximo 23 alumnos).</li>
            <li>Profesorado altamente calificado.</li>
            <li>Servicio médico.</li>
            <li>Comedor.</li>
            <li>Biblioteca y hemeroteca.</li>
            <li>Aula de cómputo.</li>
            <li>Aula de música.</li>
          </ul>
        </div>
        <div class="hidden" data-panel="ademas">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Inglés avanzado.</li>
            <li>Instalaciones de vanguardia.</li>
            <li>Seguridad Interna.</li>
            <li>Convenios institucionales.</li>
            <li>Escuela para padres.</li>
          </ul>
        </div>
        <div class="hidden" data-panel="talleres">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Fútbol.</li>
            <li>Taekwondo.</li>
            <li>Pintura.</li>
            <li>Artesanías.</li>
            <li>Cocina.</li>
            <li>Ajedrez.</li>
          </ul>
        </div>
        <div class="hidden" data-panel="plan">
          <div class="grid gap-10 md:grid-cols-2 text-slate-700">
            <div class="space-y-8">
              <div>
                <p class="text-lg font-semibold text-[#345995]">Lenguajes</p>
                <ul class="mt-4 list-disc pl-6 space-y-2 text-slate-600">
                  <li>Español</li>
                  <li>Inglés</li>
                  <li>Artes</li>
                </ul>
              </div>
              <div>
                <p class="text-lg font-semibold text-[#345995]">Saberes y Pensamiento Científico</p>
                <ul class="mt-4 list-disc pl-6 space-y-2 text-slate-600">
                  <li>Matemáticas</li>
                  <li>Ciencias Naturales</li>
                </ul>
              </div>
              <div>
                <p class="text-lg font-semibold text-[#345995]">Ética, Naturaleza y Sociedades</p>
                <ul class="mt-4 list-disc pl-6 space-y-2 text-slate-600">
                  <li>Historia</li>
                  <li>Geografía</li>
                  <li>Formación Cívica y Ética</li>
                  <li>La Entidad Donde Vivo</li>
                </ul>
              </div>
            </div>
            <div class="space-y-8">
              <div>
                <p class="text-lg font-semibold text-[#345995]">De lo Humano a lo Comunitario</p>
                <ul class="mt-4 list-disc pl-6 space-y-2 text-slate-600">
                  <li>Educación Física</li>
                  <li>Educación Socioemocional</li>
                  <li>Tecnología</li>
                </ul>
              </div>
              <div>
                <p class="text-lg font-semibold text-[#345995]">Autonomía Curricular</p>
                <ul class="mt-4 list-disc pl-6 space-y-2 text-slate-600">
                  <li>Inglés</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden" data-panel="horario-serv">
          <p class="text-slate-600">Lunes a Viernes</p>
          <p class="mt-2 text-slate-600">Entrada de 7:20 a 8:00 a.m.</p>
          <p class="mt-2 text-slate-600">Salida 13:20 hrs</p>
          <p class="mt-2 text-slate-600">Servicio de Comedor 15:00 hrs</p>
          <p class="mt-2 text-slate-600">Talleres Extraescolares de 15:30 a 17:30 hrs</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="grid gap-6 md:grid-cols-3">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-[#345995] bg-[#345995] px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-white transition hover:brightness-110" href="<?= $baseUrl ?>/_assets/PDFs/kinder/REGLAMENTO-KINDER-2025-2026.pdf" target="_blank" rel="noopener" data-aos="zoom-in-up" data-aos-delay="0">
        <i class="text-base" data-lucide="file-text"></i>
        Reglamento
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-[#03CEA4] bg-[#03CEA4] px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-900 transition hover:brightness-105" href="<?= $baseUrl ?>/_imgs/kinder/Calendario-kinder.webp" target="_blank" rel="noopener" data-aos="zoom-in-up" data-aos-delay="80">
        <i class="text-base" data-lucide="calendar-days"></i>
        Calendario académico
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-[#EAC435] bg-[#EAC435] px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-900 transition hover:brightness-105" href="<?= $baseUrl ?>/formas-de-pago" data-aos="zoom-in-up" data-aos-delay="160">
        <i class="text-base" data-lucide="credit-card"></i>
        Formas de pago
      </a>
    </div>

    <div class="mt-20 md:mt-24">
      <h2 class="text-4xl md:text-5xl font-semibold text-[#345995] text-center" data-aos="fade-up" data-aos-delay="40">Preguntas frecuentes</h2>
      <div class="mt-10 space-y-5" data-accordion>
        <details class="group rounded-2xl border border-slate-200 p-5" data-aos="fade-up" data-aos-delay="70">
          <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700">
              <i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i>
            </span>
            ¿Cuándo se inscriben los niños al kinder?
          </summary>
          <div class="mt-4 space-y-3 text-slate-600">
            <p>
              Si bien los lapsos de preinscripciones para educación kinder en CDMX tienen esquema distinto en escuelas
              públicas, en colegios privados como el Colegio del Valle, siempre tienes oportunidad de inscribir a tu hijo.
              Las prescripciones inician desde el mes de noviembre y cierran hasta junio.
            </p>
            <p>¡Revisa el calendario de kinder y participa de todas las fechas importantes!</p>
          </div>
        </details>

        <details class="group rounded-2xl border border-slate-200 p-5" data-aos="fade-up" data-aos-delay="110">
          <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700">
              <i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i>
            </span>
            ¿Cómo inscribir a un niño al kinder?
          </summary>
          <div class="mt-4 space-y-3 text-slate-600">
            <p>
              En Colegio del Valle puedes comenzar el proceso online a través del chat dispuesto en su sitio web las 24 horas
              del día. También puedes enviar mensaje directo a través de WhatsApp para conocer cada paso en el proceso de
              inscripción en educación preescolar.
            </p>
            <p>Recuerda que será necesario realizar una visita al colegio para consignar la documentación requerida.</p>
          </div>
        </details>

        <details class="group rounded-2xl border border-slate-200 p-5" data-aos="fade-up" data-aos-delay="150">
          <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700">
              <i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i>
            </span>
            ¿Qué debo hacer para inscribir a mi hijo al kinder?
          </summary>
          <div class="mt-4 space-y-3 text-slate-600">
            <p>Lo primero a saber es que tu hijo debe tener los tres años cumplidos o este próximo a cumplirlos.</p>
            <div>
              <p class="font-semibold text-slate-800">Alumno</p>
              <ul class="mt-2 list-disc space-y-1 pl-6">
                <li>Acta de Nacimiento.</li>
                <li>Tres fotografias tamaño infantil.</li>
                <li>Cartilla de vacunacion.</li>
                <li>CURP original y dos copias.</li>
                <li>Certificado médico.</li>
                <li>Hojas de registro.</li>
              </ul>
            </div>
            <div>
              <p class="font-semibold text-slate-800">Padres y tutores</p>
              <ul class="mt-2 list-disc space-y-1 pl-6">
                <li>Una fotografia tamaño infantil de cada padre o tres fotografias tamaño infantil de personas autorizadas para llevar al alumno a casa.</li>
                <li>Copia de credencial del INE.</li>
                <li>Carta de autorización de padres para que otras personas recojan a sus hijos.</li>
              </ul>
            </div>
          </div>
        </details>

        <details class="group rounded-2xl border border-slate-200 p-5" data-aos="fade-up" data-aos-delay="190">
          <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700">
              <i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i>
            </span>
            ¿Qué pasa si no preinscribi a mi hijo al kinder?
          </summary>
          <div class="mt-4 space-y-3 text-slate-600">
            <p>
              Si tu hijo ya ha cursado kinder uno, los procesos de reinscripcion para cursos posteriores se realizan de forma
              automática. Si tu hijo proviene de otro colegio distinto al Colegio del Valle, el proceso de reinscripcion a
              kinder puede realizarse en fechas que van de noviembre a junio.
            </p>
          </div>
        </details>
      </div>
    </div>
  </div>
</section>
</div>

<script>
  (() => {
    const hashValue = decodeURIComponent((window.location.hash || '').replace(/^#/, ''));
    const planAnchors = new Set([
      '1770308278594-558bbf51-173f',
      'plan-estudios-kinder',
    ]);

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

      if (planAnchors.has(hashValue) && scope.querySelector('[data-tab="plan"]')) {
        setActive('plan');
      }
    });

    if (planAnchors.has(hashValue)) {
      const planAnchor = document.getElementById('1770308278594-558bbf51-173f');
      if (planAnchor) {
        requestAnimationFrame(() => {
          planAnchor.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
      }
    }

    const accordions = document.querySelectorAll('[data-accordion]');
    accordions.forEach((accordion) => {
      const items = Array.from(accordion.querySelectorAll('details'));
      items.forEach((item) => {
        item.addEventListener('toggle', () => {
          if (!item.open) return;
          items.forEach((other) => {
            if (other !== item) other.open = false;
          });
        });
      });
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
