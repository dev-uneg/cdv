<?php
$pageTitle = 'Pre-First | Colegio del Valle';
$pageDescription = 'Pre First en Colegio del Valle: transicion a primaria con bases académicas, inglés y habilidades socioemocionales.';
$activePage = 'pre-first';
$baseUrl = defined('BASE_URL') ? BASE_URL : '';
$menuItems = require __DIR__ . '/partials/menu-items.php';
$menuSubItems = require __DIR__ . '/partials/des-menu-subitems.php';
$logoDarkSrc = $baseUrl . '/_imgs/Colegio-del-Valle-Logo-342x206.webp';
$headerWrapperClass = 'z-40 border-b border-slate-200 bg-white/95 backdrop-blur-sm';
$heroEyebrow = 'Oferta educativa';
$heroTitle = 'PRE-FIRST';
$heroDescription = 'Un grado de transicion para fortalecer ingles, lectoescritura y habilidades clave rumbo a primaria.';
$heroIcon = 'languages';
$enableAos = true;
$heroYoutubeEmbed = 'https://www.youtube-nocookie.com/embed/ChHNs6VYH5I?autoplay=1&rel=0';
$heroVideoTitle = 'Pre-First - Colegio del Valle';
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
$defaultInterest = 'Pre First';
$sourcePage = 'Pagina Pre First CDV';
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
        src="https://www.youtube-nocookie.com/embed/ChHNs6VYH5I?rel=0"
        title="Pre-First - Colegio del Valle"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen
      ></iframe>
    </div>
  </div>
</section>

<section class="bg-[#5b63d3]" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 py-8">
    <p class="text-center text-lg md:text-xl font-semibold text-white">
      PRE-FIRST es un grado de transición y fortalecimiento en materia del idioma inglés, permitiendo que la
      experiencia en el aprendizaje de lectura y escritura sea sólida y significativa.
    </p>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-2 items-start lg:items-center">
    <div class="text-center lg:text-left">
      <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-600">RVOE SEP 09060319/07/2006</p>
      <h1 class="mt-6 text-3xl md:text-4xl font-semibold text-[#345995]">
        Pre-First en la Colonia del Valle: Conoce el modelo educativo
      </h1>
      <p class="mt-4 text-slate-600 leading-relaxed">
        Conoce nuestro plan de estudios y descubre las ventajas de que tus hijos cursen un Pre-First en la Colonia del Valle.
        ¡Prepáralos para un futuro venidero!
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
    <p class="mt-4 text-slate-600">Para poder cursar Pre-First en Colegio Del Valle se requiere cumplir con</p>
    <p class="mt-2 text-slate-600">los siguientes documentos:</p>
  </div>
  <div class="mt-12 max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[1.4fr,0.6fr]">
    <div class="space-y-8" data-accordion>
      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
          Requisitos de ingreso Pre-First
        </summary>
        <ul class="mt-5 space-y-2 text-slate-600 list-disc pl-6">
          <li>Presentar examen de Admisión.</li>
          <li>Carta compromiso original y copia (solicitar en dirección).</li>
          <li>Presentar Reporte de Evaluación de Tercer grado de Educación Preescolar en original y dos copias.</li>
          <li>Certificado médico en donde nos indique su estado de salud, su tipo y grupo de sangre en original y dos copias.</li>
          <li>8 fotografías tamaño infantil a color.</li>
          <li>Elaborar registro de Inscripción y Reinscripción con los datos que se soliciten en la misma.</li>
          <li>SIN OMITIR NINGUNO original y dos copias (solicitar en dirección).</li>
          <li>Ficha de salud original y dos copias (solicitar en dirección).</li>
          <li>CURP dos copias ampliado a tamaño carta.</li>
        </ul>
      </details>
    </div>
    <div class="flex flex-col gap-4">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] transition border-[#345995] bg-[#345995] text-white hover:brightness-110" href="<?= $baseUrl ?>/contacto/">
        Pedir mayor información
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 text-center" data-tabscope data-default="objetivo">
    <h2 class="text-3xl md:text-4xl font-semibold text-slate-800">Plan de Estudios</h2>
    <p class="mt-3 text-slate-600">Conoce el objetivo y las materias de Pre-First.</p>
    <div class="mt-8">
      <div class="inline-flex flex-wrap justify-center gap-2 rounded-full border border-slate-200 bg-white p-2 text-xs font-semibold uppercase tracking-[0.2em] text-slate-600">
        <button class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-cyan-700" type="button" data-tab="objetivo">
          <i class="text-base" data-lucide="lightbulb"></i>
          Objetivo
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="materias">
          <i class="text-base" data-lucide="folder"></i>
          Materias
        </button>
      </div>
      <div class="mt-6 rounded-3xl border border-slate-200 bg-white p-8 text-left">
        <div data-panel="objetivo" class="space-y-6 text-slate-600">
          <p>
            Al término de este año escolar, los niños estarán lo suficientemente preparados para enfrentarse al
            primer año en una primaria bilingüe, ya que cuentan con las bases de un segundo idioma, así como también
            con la madurez física y mental para enfrentar nuevos retos.
          </p>
          <p>
            El contar con el dominio de un segundo idioma es fundamental; el comienzo de este proceso de aprendizaje
            es ideal en esta edad, ya que graba en la mente de los niños el gusto por el idioma, así como el
            convencimiento de que tienen la capacidad de seguir exitosamente aprendiéndolo y en consecuencia
            certificándolo. Contando con esta fortaleza nuestros niños serán los futuros profesionistas que dominando
            el idioma Inglés harán la diferencia en el mercado laboral.
          </p>
        </div>
        <div data-panel="materias" class="hidden">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Science</li>
            <li>Math</li>
            <li>Reading</li>
            <li>Writing</li>
            <li>Spelling and Phonics</li>
            <li>Grammar and Vocabulary</li>
            <li>Physical Education</li>
            <li>Music</li>
            <li>Computer – Science Class</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[0.9fr,1.1fr] items-start" data-tabscope data-default="modelo">
    <div class="rounded-3xl border border-slate-200 bg-white p-6 space-y-3">
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-cyan-600 shadow-sm" type="button" data-tab="modelo">
        <i class="text-lg" data-lucide="book-open"></i>
        Modelo Educativo Pre-First
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="talleres">
        <i class="text-lg" data-lucide="brush"></i>
        Talleres extraescolares
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="horario">
        <i class="text-lg" data-lucide="clock-3"></i>
        Horarios
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="objetivo">
        <i class="text-lg" data-lucide="lightbulb"></i>
        Objetivo
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
    <div class="min-h-[280px] rounded-3xl border border-slate-200 bg-white p-8">
      <div data-panel="modelo">
        <h3 class="text-3xl font-semibold text-slate-800">Modelo Educativo Pre-First</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Nuestro MODELO está basado en el conocimiento significativo, promoviendo la investigación, experimentación,
          análisis y reflexión en forma dinámica y atractiva para los educandos, promoviendo la toma de decisiones en un
          ambiente alegre, de juego y trabajo en equipo, en comunidad y en familia que de una manera conjunta nos llevarán
          a grandes logros por medio de una comunicación continua de trabajo estrecho con padres de familia verdaderamente
          conscientes de la educación y responsables de la formación de sus hijos.
        </p>
      </div>
      <div class="hidden" data-panel="talleres">
        <h3 class="text-3xl font-semibold text-slate-800">Talleres extraescolares</h3>
        <ul class="mt-4 space-y-2 text-slate-600 list-disc pl-6">
          <li>Fútbol</li>
          <li>Baloncesto</li>
          <li>Porras</li>
          <li>Tocho bandera</li>
          <li>Música</li>
          <li>Artes</li>
          <li>Nivelación de inglés</li>
        </ul>
      </div>
      <div class="hidden" data-panel="horario">
        <h3 class="text-3xl font-semibold text-slate-800">Horarios</h3>
        <p class="mt-4 text-slate-600">Lunes a Viernes</p>
        <p class="mt-2 text-slate-600">Entrada de 7:20 a 8:00 a.m.</p>
        <p class="mt-2 text-slate-600">Salida 14:00 hrs</p>
        <p class="mt-2 text-slate-600">Servicio de Comedor 15:00 hrs</p>
        <p class="mt-2 text-slate-600">Talleres Extraescolares de 15:30 a 17:30 hrs</p>
      </div>
      <div class="hidden" data-panel="objetivo">
        <h3 class="text-3xl font-semibold text-slate-800">Objetivo</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Promover el desarrollo de las competencias comunicativas como herramienta fundamental para expresarse de manera
          oral y escrita en un segundo idioma y en su lengua materna, las cuales representan una herramienta indispensable
          para comprender, relacionarse y transformar al mundo.
        </p>
        <p class="mt-4 text-slate-600 leading-relaxed">
          PRE-FIRST sigue las pautas de la primaria, aprender a leer, escribir y hablar inglés con libros, cuadernos,
          juegos y material didáctico.
        </p>
      </div>
      <div class="hidden" data-panel="mision">
        <h3 class="text-3xl font-semibold text-slate-800">Misión</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Promover permanentemente el desarrollo integral del alumno basado en una educación de calidad centrada en el
          fortalecimiento de valores ético-morales, donde el estudiante se distinga por su constancia, esfuerzo, dedicación
          y compromiso con la sociedad y el medio ambiente.
        </p>
      </div>
      <div class="hidden" data-panel="vision">
        <h3 class="text-3xl font-semibold text-slate-800">Visión</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Incorporar a nuestros alumnos a la vida cotidiana siempre bajo la línea de principios y valores que les sirvan
          para transformarse en mejores seres humanos.
        </p>
      </div>
      <div class="hidden" data-panel="valores">
        <h3 class="text-3xl font-semibold text-slate-800">Valores</h3>
        <ul class="mt-4 space-y-2 text-slate-600 list-disc pl-6">
          <li>Moral.</li>
          <li>Ética.</li>
          <li>Verdad.</li>
          <li>Justicia.</li>
          <li>Pensamiento.</li>
          <li>Inteligencia.</li>
          <li>Libertad.</li>
          <li>Respeto a los demás.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="mt-12">
      <h2 class="text-4xl md:text-5xl font-semibold text-[#345995] text-center">Preguntas frecuentes</h2>
      <div class="mt-10 space-y-5" data-accordion>
        <details class="group rounded-2xl border border-slate-200 p-5">
          <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
            ¿Qué es el prefirst y por qué es importante?
          </summary>
          <div class="mt-4 space-y-3 text-slate-600">
            <p>
              Es un nivel de estudio del inglés para niños en etapa escolar después del kínder y antes de ingresar a una
              primaria bilingüe. Lo cursan niños de 5 y 6 años de edad con el fin de madurar sus habilidades comunicativas
              y de aprendizaje con miras a ingresar al primer grado.
            </p>
          </div>
        </details>

        <details class="group rounded-2xl border border-slate-200 p-5">
          <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
            ¿Cuáles son los colegios que imparten pre-first?
          </summary>
          <div class="mt-4 space-y-3 text-slate-600">
            <p>
              El prefirst es impartido por los colegios privados bilingües en todo México. Estas instituciones como el
              Colegio bilingüe Del Valle harán que el alumno adquiera las competencias y madurez requeridas en el idioma
              inglés y así pueda dar inicio con éxito la primaria bilingüe.
            </p>
          </div>
        </details>

        <details class="group rounded-2xl border border-slate-200 p-5">
          <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
            ¿Cuándo son las inscripciones al prefirst en Colegio del Valle?
          </summary>
          <div class="mt-4 space-y-3 text-slate-600">
            <p>
              Antes de inscribir a tus hijos al prefirst de Colegio del Valle, hay dos requisitos importantes: prueba de
              admisión y reporte de evaluación del tercer grado de educación preescolar. Las inscripciones pueden
              realizarse de forma anticipada entre los plazos establecidos desde noviembre hasta junio.
            </p>
            <p>¡Mantente al tanto con el calendario escolar 2024 e inscribe a tiempo!</p>
          </div>
        </details>

        <details class="group rounded-2xl border border-slate-200 p-5">
          <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
            ¿Por qué inscribir a mi hijo en prefirst?
          </summary>
          <div class="mt-4 space-y-3 text-slate-600">
            <p>Las ventajas de llevar a tu hijo al prefirst no tienen precio. La inversión que realizan los padres en educación traerán en el ámbito de la adquisición del idioma inglés beneficios como:</p>
            <ul class="list-disc pl-6 space-y-1">
              <li>Iniciación y evolución en lecto-escritura del inglés.</li>
              <li>Desarrollo en las habilidades de pronunciación y auditivas.</li>
              <li>Fomenta la confianza y la seguridad.</li>
              <li>Se van insertando dinámicas de trabajo de la primaria: disciplina, responsabilidad, orden y laboriosidad.</li>
            </ul>
          </div>
        </details>

        <details class="group rounded-2xl border border-slate-200 p-5">
          <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-700"><i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-200 group-open:rotate-180"></i></span>
            ¿Prefirst es lo mismo que el primer año de primaria?
          </summary>
          <div class="mt-4 space-y-3 text-slate-600">
            <p>
              No, el prefirst es un nivel antes del primer año de primaria. Su objetivo es sentar las bases de la
              adquisición del idioma inglés en una edad temprana y con miras al próximo inicio de un primer año de
              primaria bilingüe. El Colegio del Valle es un colegio a puerta cerrada, privada y bilingüe.
            </p>
          </div>
        </details>
      </div>
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
    window.AOS.init({ duration: 800, easing: 'ease-out-cubic', once: false, mirror: true, offset: 60 });
  });
</script>
<?php require __DIR__ . '/partials/footer.php'; ?>
