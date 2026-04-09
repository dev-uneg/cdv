<?php
$pageTitle = 'LP General | Oferta Educativa | Colegio del Valle';
$pageDescription = 'Conoce la oferta educativa del Colegio del Valle: Kinder, Pre First, Primaria, Secundaria y Preparatoria.';
$mainClass = '';
require __DIR__ . '/partials/landing-header.php';

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

<section class="relative overflow-hidden bg-slate-900 text-white">
  <div class="absolute inset-0">
    <div class="h-full w-full bg-[linear-gradient(-225deg,#473B7B_0%,#3584A7_51%,#30D2BE_100%)]"></div>
  </div>
  <div class="absolute inset-0 pointer-events-none">
    <img
      class="h-full w-full object-cover opacity-50"
      src="<?= $baseUrl ?>/_imgs/landings/doodle2.png"
      alt=""
      loading="eager"
      fetchpriority="high"
      aria-hidden="true"
    />
  </div>
  <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 via-slate-900/55 to-slate-900/25"></div>

  <div class="relative max-w-[1300px] mx-auto px-6 py-16 md:py-20">
    <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
      <div id="hero-copy" class="text-center lg:text-center">
        <h1 class="mt-6 mx-auto max-w-3xl text-4xl font-black leading-tight md:text-6xl">
          <span class="block">¡Inscripciones abiertas!</span>
          <span id="hero-level" class="mt-2 block text-orange-400 text-5xl md:text-7xl leading-none">Kinder</span>
        </h1>
        <p class="mt-6 mx-auto max-w-2xl text-base text-slate-200 md:text-lg">Aquí no solo eliges una escuela: eliges una comunidad seria, cercana y comprometida con el futuro de tu familia.</p>
        <p class="mt-3 mx-auto max-w-2xl text-base text-slate-200 md:text-lg">Nuestro modelo acompaña cada etapa con estructura académica, seguimiento real y formación en valores para que tus hijos avancen con seguridad y confianza.</p>
        <div class="mt-8 mx-auto flex max-w-2xl flex-wrap items-center justify-center gap-x-8 gap-y-4">
          <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.15em] text-white">
            <i data-lucide="phone" class="text-sm text-orange-300"></i>
            Respuesta rápida
          </p>
          <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.15em] text-white">
            <i data-lucide="users" class="text-sm text-sky-300"></i>
            Asesoría 1 a 1
          </p>
          <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.15em] text-white">
            <i data-lucide="shield-check" class="text-sm text-emerald-300"></i>
            Proceso seguro
          </p>
        </div>
      </div>

      <div id="hero-form" class="rounded-3xl border border-white/20 bg-white/95 p-6 text-slate-900 shadow-2xl md:p-8">
        <h2 class="text-2xl font-bold tracking-tight">Solicita información personalizada</h2>
        <p class="mt-2 text-sm text-slate-600">Comparte tus datos y un asesor de admisiones te contacta para resolver todo: plan académico, colegiaturas y proceso de ingreso.</p>

        <form class="mt-6 grid gap-4 md:grid-cols-2" method="post" action="<?= $baseUrl ?>/api/contacto-landing">
          <input class="rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-slate-500" placeholder="Nombre completo*" type="text" name="full_name" required />
          <input class="rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-slate-500" placeholder="Correo electrónico*" type="email" name="email" required />
          <input class="rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-slate-500" placeholder="Teléfono*" type="tel" name="phone" required />

          <div class="relative">
            <select class="w-full appearance-none rounded-xl border border-slate-300 bg-white px-4 py-3 pr-10 text-sm text-slate-700 outline-none transition focus:border-slate-500" name="interest" required>
              <option value="">Me interesa...</option>
              <option value="Kinder">Kinder</option>
              <option value="Pre First">Pre First</option>
              <option value="Primaria">Primaria</option>
              <option value="Secundaria">Secundaria</option>
              <option value="Preparatoria">Preparatoria</option>
            </select>
            <i class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-lg text-slate-500" data-lucide="chevron-down"></i>
          </div>

          <input type="hidden" name="source" value="LP General CDV" />
          <input type="hidden" name="channel" value="Web" />
          <input type="hidden" name="medium" value="Landing" />

          <?php if ($turnstileEnabled): ?>
            <div class="cf-turnstile md:col-span-2" data-sitekey="<?= htmlspecialchars($turnstileSiteKey, ENT_QUOTES, 'UTF-8') ?>"></div>
          <?php endif; ?>

          <label class="inline-flex items-start gap-3 text-sm text-slate-700 md:col-span-2">
            <input type="checkbox" name="privacy" value="1" required class="mt-0.5 h-5 w-5 accent-emerald-600" />
            <span>
              Acepto el
              <a class="font-semibold text-emerald-700 underline hover:text-emerald-800" href="<?= $baseUrl ?>/aviso-de-privacidad/" target="_blank" rel="noopener">aviso de privacidad</a>
              y el uso de mis datos para recibir información de admisiones.
            </span>
          </label>

          <button type="submit" class="rounded-full bg-orange-500 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white transition hover:bg-orange-600 w-fit md:col-span-2">Quiero que me contacten</button>
        </form>

        <p class="mt-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-900">
          Tus datos se manejan con total confidencialidad. Un asesor real de Colegio del Valle te atenderá con seguimiento cercano para ayudarte a elegir el mejor nivel para tu familia.
        </p>
      </div>
    </div>
  </div>
</section>

<section id="niveles" class="bg-white py-16 md:py-20">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="text-center">
      <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Oferta académica</p>
      <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Niveles educativos para cada etapa</h2>
      <p class="mt-4 mx-auto max-w-3xl text-sm text-slate-600 md:text-base">
        En Colegio del Valle, tus hijos reciben mucho más que clases: obtienen una formación sólida, acompañamiento cercano y un entorno seguro donde pueden crecer con confianza, disciplina y valores. Aquí cada etapa está diseñada para que avancen felices, aprendan de verdad y construyan un futuro del que toda tu familia se sienta orgullosa.
      </p>
    </div>

    <div class="mt-10 grid gap-8 lg:grid-cols-[1.1fr,0.9fr] lg:items-center">
      <div class="space-y-4">
        <details class="group rounded-3xl border border-slate-200 bg-white shadow-sm">
        <summary class="flex cursor-pointer list-none items-center justify-between px-6 py-5">
          <div class="flex items-center gap-4">
            <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-orange-100 text-orange-600"><i data-lucide="sprout"></i></span>
            <div>
              <p class="text-xl font-semibold text-slate-900 md:text-2xl">Kinder</p>
              <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Formación inicial</p>
            </div>
          </div>
          <i class="text-slate-500 transition group-open:rotate-180" data-lucide="chevron-down"></i>
        </summary>
        <div class="border-t border-slate-200 px-6 py-5">
          <p class="text-sm text-slate-600">En Kinder, tu hijo inicia su vida escolar en un ambiente cálido, seguro y con atención cercana en cada paso.</p>
          <p class="mt-2 text-sm text-slate-600">Fortalecemos lenguaje, motricidad, socialización e inglés con actividades diseñadas para aprender jugando y construir hábitos positivos desde temprano.</p>
          <p class="mt-2 text-sm font-medium text-slate-700">Es la base ideal para que llegue a Primaria con confianza, orden y gusto por aprender.</p>
        </div>
        </details>

        <details class="group rounded-3xl border border-slate-200 bg-white shadow-sm">
        <summary class="flex cursor-pointer list-none items-center justify-between px-6 py-5">
          <div class="flex items-center gap-4">
            <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-sky-100 text-sky-700"><i data-lucide="book-open"></i></span>
            <div>
              <p class="text-xl font-semibold text-slate-900 md:text-2xl">Pre First</p>
              <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Transición académica</p>
            </div>
          </div>
          <i class="text-slate-500 transition group-open:rotate-180" data-lucide="chevron-down"></i>
        </summary>
        <div class="border-t border-slate-200 px-6 py-5">
          <p class="text-sm text-slate-600">Pre First acompaña la transición con estructura y cercanía para que tu hijo avance seguro y motivado.</p>
          <p class="mt-2 text-sm text-slate-600">Reforzamos lectura, escritura inicial, pensamiento lógico e integración del inglés, cuidando tanto el desempeño académico como la adaptación emocional.</p>
          <p class="mt-2 text-sm font-medium text-slate-700">Con este nivel, llega a Primaria con mejores hábitos, mayor autonomía y una base sólida.</p>
        </div>
        </details>

        <details class="group rounded-3xl border border-slate-200 bg-white shadow-sm">
        <summary class="flex cursor-pointer list-none items-center justify-between px-6 py-5">
          <div class="flex items-center gap-4">
            <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-100 text-indigo-700"><i data-lucide="graduation-cap"></i></span>
            <div>
              <p class="text-xl font-semibold text-slate-900 md:text-2xl">Primaria</p>
              <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Bases académicas</p>
            </div>
          </div>
          <i class="text-slate-500 transition group-open:rotate-180" data-lucide="chevron-down"></i>
        </summary>
        <div class="border-t border-slate-200 px-6 py-5">
          <p class="text-sm text-slate-600">En Primaria consolidamos los aprendizajes clave con exigencia académica y acompañamiento real para cada familia.</p>
          <p class="mt-2 text-sm text-slate-600">Trabajamos comprensión lectora, matemáticas, ciencias, inglés y formación en valores, con seguimiento docente para detectar avances y áreas de mejora a tiempo.</p>
          <p class="mt-2 text-sm font-medium text-slate-700">Tu hijo desarrolla disciplina, seguridad y herramientas para destacar en las siguientes etapas.</p>
        </div>
        </details>

        <details class="group rounded-3xl border border-slate-200 bg-white shadow-sm">
        <summary class="flex cursor-pointer list-none items-center justify-between px-6 py-5">
          <div class="flex items-center gap-4">
            <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-orange-100 text-orange-700"><i data-lucide="flag"></i></span>
            <div>
              <p class="text-xl font-semibold text-slate-900 md:text-2xl">Secundaria</p>
              <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Desarrollo integral</p>
            </div>
          </div>
          <i class="text-slate-500 transition group-open:rotate-180" data-lucide="chevron-down"></i>
        </summary>
        <div class="border-t border-slate-200 px-6 py-5">
          <p class="text-sm text-slate-600">Secundaria es una etapa clave y aquí la vivimos con guía firme, comunicación con padres y enfoque integral.</p>
          <p class="mt-2 text-sm text-slate-600">Impulsamos pensamiento crítico, liderazgo, trabajo en equipo y responsabilidad académica para que cada alumno crezca con criterio y propósito.</p>
          <p class="mt-2 text-sm font-medium text-slate-700">Así llegan a Preparatoria con madurez, autoestima y claridad en sus metas.</p>
        </div>
        </details>

        <details class="group rounded-3xl border border-slate-200 bg-white shadow-sm">
        <summary class="flex cursor-pointer list-none items-center justify-between px-6 py-5">
          <div class="flex items-center gap-4">
            <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-[#3E436C]/10 text-[#3E436C]"><i data-lucide="school"></i></span>
            <div>
              <p class="text-xl font-semibold text-slate-900 md:text-2xl">Preparatoria</p>
              <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Ruta universitaria</p>
            </div>
          </div>
          <i class="text-slate-500 transition group-open:rotate-180" data-lucide="chevron-down"></i>
        </summary>
        <div class="border-t border-slate-200 px-6 py-5">
          <p class="text-sm text-slate-600">En Preparatoria preparamos a los estudiantes para universidad y vida profesional con acompañamiento cercano y visión de futuro.</p>
          <p class="mt-2 text-sm text-slate-600">Combinamos nivel académico, habilidades de comunicación, autonomía y orientación vocacional para que tomen decisiones con seguridad.</p>
          <p class="mt-2 text-sm font-medium text-slate-700">Es el cierre perfecto para que tu hijo egrese listo para competir, destacar y construir su proyecto de vida.</p>
        </div>
        </details>
      </div>

      <div>
        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
          <img
            class="h-full w-full object-cover"
            src="<?= $baseUrl ?>/_imgs/landings/instalaciones.webp"
            alt="Instalaciones de Colegio del Valle"
            loading="lazy"
          />
        </div>
      </div>
    </div>
  </div>
</section>

<section id="diferenciales" class="py-16 bg-slate-50">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="text-center">
      <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">¿Por qué elegirnos?</p>
      <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Lo que hace diferente a Colegio del Valle</h2>
      <p class="mx-auto mt-4 max-w-3xl text-slate-600 leading-relaxed">Combinamos certificación en inglés, acompañamiento cercano y una comunidad activa para que cada alumno aprenda con alto nivel académico, crezca con seguridad y desarrolle su mejor versión.</p>
    </div>
    <div class="mt-8 grid gap-6 lg:grid-cols-3">
      <article class="rounded-3xl bg-[#3E436C] p-8 text-white">
        <span class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-white/15">
          <i data-lucide="book-open"></i>
        </span>
        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-white/70">Diferencial</p>
        <h3 class="mt-3 text-2xl font-bold">Certificación en inglés</h3>
        <p class="mt-4 text-sm text-white/85">Preparación continua para evaluaciones de inglés con seguimiento académico por nivel.</p>
      </article>
      <article class="rounded-3xl bg-orange-500 p-8 text-white">
        <span class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-white/15">
          <i data-lucide="users"></i>
        </span>
        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-white/70">Diferencial</p>
        <h3 class="mt-3 text-2xl font-bold">Acompañamiento integral</h3>
        <p class="mt-4 text-sm text-white/90">Seguimiento académico, emocional y formativo para estudiantes y familias.</p>
      </article>
      <article class="rounded-3xl bg-sky-500 p-8 text-white">
        <span class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-white/15">
          <i data-lucide="shield-check"></i>
        </span>
        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-white/70">Diferencial</p>
        <h3 class="mt-3 text-2xl font-bold">Comunidad activa</h3>
        <p class="mt-4 text-sm text-white/90">Actividades deportivas, culturales y proyectos que desarrollan talento y colaboración.</p>
      </article>
    </div>
  </div>
</section>

<section id="proceso-admision" class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="grid gap-10 lg:grid-cols-[1.1fr,1fr] lg:items-center">
      <div>
        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Proceso de admisión</p>
        <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Proceso de admisión claro y acompañado</h2>
        <p class="mt-4 text-slate-600">Nuestro equipo te acompaña en cada paso para que tomes la mejor decisión para tu familia.</p>
      </div>
      <ol class="space-y-4">
        <li class="rounded-2xl border border-slate-200 p-5">
          <p class="text-xs font-semibold uppercase tracking-[0.2em] text-orange-500">Paso 1</p>
          <h3 class="mt-2 flex items-center gap-2 font-semibold text-slate-900"><i data-lucide="message-circle" class="text-base text-orange-500"></i>Solicita informes</h3>
          <p class="mt-1 text-sm text-slate-600">Te compartimos plan académico, costos y disponibilidad.</p>
        </li>
        <li class="rounded-2xl border border-slate-200 p-5">
          <p class="text-xs font-semibold uppercase tracking-[0.2em] text-orange-500">Paso 2</p>
          <h3 class="mt-2 flex items-center gap-2 font-semibold text-slate-900"><i data-lucide="calendar-days" class="text-base text-orange-500"></i>Agenda visita guiada</h3>
          <p class="mt-1 text-sm text-slate-600">Conoce las instalaciones, el ambiente y nuestro modelo educativo.</p>
        </li>
        <li class="rounded-2xl border border-slate-200 p-5">
          <p class="text-xs font-semibold uppercase tracking-[0.2em] text-orange-500">Paso 3</p>
          <h3 class="mt-2 flex items-center gap-2 font-semibold text-slate-900"><i data-lucide="check-circle-2" class="text-base text-orange-500"></i>Inicia tu inscripción</h3>
          <p class="mt-1 text-sm text-slate-600">Te guiamos con requisitos y fechas para cerrar el proceso.</p>
        </li>
      </ol>
    </div>
  </div>
</section>

<section id="cta-final" class="py-16 bg-slate-900 text-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center">
    <p class="text-xs uppercase tracking-[0.3em] text-white/60">Inscripciones abiertas</p>
    <h2 class="mt-4 text-3xl font-bold md:text-5xl">Agenda una asesoría personalizada</h2>
    <p class="mx-auto mt-4 max-w-2xl text-slate-300">Conversemos sobre el nivel ideal para tu hija o hijo. Nuestro equipo de admisiones te responde rápido.</p>
    <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
      <a class="inline-flex rounded-full bg-orange-500 px-7 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white transition hover:bg-orange-600" href="#hero-form">Quiero información</a>
    </div>
  </div>
</section>

<style>
  .reveal-enter {
    opacity: 0;
    transform: translate3d(0, 24px, 0) scale(0.985);
    transition: opacity 720ms cubic-bezier(0.22, 1, 0.36, 1), transform 720ms cubic-bezier(0.22, 1, 0.36, 1);
    transition-delay: var(--reveal-delay, 0ms);
    will-change: opacity, transform;
  }

  .reveal-left {
    transform: translate3d(-30px, 0, 0) scale(0.985);
  }

  .reveal-right {
    transform: translate3d(30px, 0, 0) scale(0.985);
  }

  .reveal-visible {
    opacity: 1;
    transform: translate3d(0, 0, 0) scale(1);
  }

  @media (prefers-reduced-motion: reduce) {
    .reveal-enter,
    .reveal-left,
    .reveal-right {
      opacity: 1;
      transform: none;
      transition: none;
    }
  }
</style>

<script>
  (() => {
    const levelEl = document.getElementById('hero-level');
    if (!levelEl) return;

    const levels = ['Kinder', 'Primaria', 'Secundaria', 'Preparatoria'];

    let idx = 0;
    const switchLevel = () => {
      idx = (idx + 1) % levels.length;
      levelEl.classList.add('opacity-0', 'translate-y-1');

      setTimeout(() => {
        levelEl.textContent = levels[idx];
        levelEl.classList.remove('opacity-0', 'translate-y-1');
      }, 220);
    };

    levelEl.classList.add('transition-all', 'duration-300');
    setInterval(switchLevel, 2800);
  })();

  (() => {
    const accordionItems = document.querySelectorAll('#niveles details');
    if (!accordionItems.length) return;

    accordionItems.forEach((item) => {
      item.open = false;
      item.addEventListener('toggle', () => {
        if (!item.open) return;
        accordionItems.forEach((other) => {
          if (other !== item) other.open = false;
        });
      });
    });
  })();

  (() => {
    const addRevealGroup = (selector, options = {}) => {
      const direction = options.direction ?? 'up';
      const baseDelay = options.baseDelay ?? 0;
      const step = options.step ?? 80;
      const elements = document.querySelectorAll(selector);

      elements.forEach((el, index) => {
        el.classList.add('reveal-enter');
        if (direction === 'left') el.classList.add('reveal-left');
        if (direction === 'right') el.classList.add('reveal-right');
        el.style.setProperty('--reveal-delay', `${baseDelay + (index * step)}ms`);
      });
    };

    addRevealGroup('#hero-copy h1, #hero-copy p', { step: 120 });
    addRevealGroup('#niveles .text-center > *', { step: 100 });
    addRevealGroup('#niveles .space-y-4 > details', { direction: 'left', step: 70 });
    addRevealGroup('#niveles img', { direction: 'right', baseDelay: 140 });
    addRevealGroup('#diferenciales .text-center > *', { step: 90 });
    addRevealGroup('#diferenciales article', { step: 120 });
    addRevealGroup('#proceso-admision .grid > div:first-child > *', { step: 90 });
    addRevealGroup('#proceso-admision ol > li', { direction: 'right', step: 100 });
    addRevealGroup('#cta-final .max-w-\\[1300px\\] > *', { step: 100 });

    const revealElements = document.querySelectorAll('.reveal-enter');
    if (!revealElements.length) return;

    if (!('IntersectionObserver' in window)) {
      revealElements.forEach((el) => el.classList.add('reveal-visible'));
      return;
    }

    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('reveal-visible');
          obs.unobserve(entry.target);
        });
      },
      { threshold: 0.14, rootMargin: '0px 0px -8% 0px' }
    );

    revealElements.forEach((el) => observer.observe(el));
  })();
</script>

<?php require __DIR__ . '/partials/landing-footer.php'; ?>
