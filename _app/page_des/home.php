<?php
$baseUrl = defined('BASE_URL') ? BASE_URL : '';
$menuItems = require __DIR__ . '/partials/menu-items.php';
$menuSubItems = [
  'Oferta Academica' => [
    ['label' => 'Kinder', 'href' => '/oferta-educativa/kinder'],
    ['label' => 'Pre First', 'href' => '/oferta-educativa/pre-first'],
    ['label' => 'Primaria', 'href' => '/oferta-educativa/primaria'],
    ['label' => 'Secundaria', 'href' => '/oferta-educativa/secundaria'],
    ['label' => 'Preparatoria', 'href' => '/oferta-educativa/preparatoria'],
  ],
  'Comunidad' => [
    ['label' => 'Alumnos', 'href' => '/comunidad/alumnos'],
    ['label' => 'Egresados', 'href' => '/egresados/'],
    ['label' => 'Docentes', 'href' => '/comunidad/docentes/'],
    ['label' => 'Talleres Vespertinos', 'href' => '/talleres-vespertinos/'],
    ['label' => 'Calendarios Academicos', 'href' => '/comunidad/alumnos/calendarios-academicos/'],
  ],
];
$logoSrc = $baseUrl . '/logo-blanco-cdv.png';
$heroVideoSrc = $baseUrl . '/8342243-hd_1920_1080_25fps.mp4';
$assetsPath = dirname(__DIR__, 2) . '/_assets';
$lucideSpritePath = $assetsPath . '/lucide-sprite.svg';
$lucideLoaderPath = $assetsPath . '/lucide-loader.js';
$lucideSpriteVersion = file_exists($lucideSpritePath) ? (string) filemtime($lucideSpritePath) : '0';
$lucideLoaderVersion = file_exists($lucideLoaderPath) ? (string) filemtime($lucideLoaderPath) : '0';
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Home Desarrollo | Colegio del Valle</title>
  <link rel="icon" type="image/png" href="<?= $baseUrl ?>/_imgs/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Questrial&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $baseUrl ?>/_assets/output.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <script
    defer
    src="<?= $baseUrl ?>/_assets/lucide-loader.js?v=<?= htmlspecialchars($lucideLoaderVersion, ENT_QUOTES, 'UTF-8') ?>"
    data-lucide-sprite="<?= htmlspecialchars($baseUrl . '/_assets/lucide-sprite.svg?v=' . $lucideSpriteVersion, ENT_QUOTES, 'UTF-8') ?>"
  ></script>
  <script defer src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <style>
    html,
    body {
      font-family: "Questrial", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif;
    }
    .hero-video-filter {
      filter: brightness(1.04) contrast(1.01);
    }
    .hero-overlay-soft {
      background: linear-gradient(180deg, rgba(2, 8, 16, 0.02) 0%, rgba(2, 8, 16, 0.11) 58%, rgba(2, 8, 16, 0.16) 100%);
    }
    .soft-grid {
      background-image: radial-gradient(circle at 1px 1px, rgba(15, 23, 42, 0.08) 1px, transparent 0);
      background-size: 26px 26px;
    }
    .oferta-title-base {
      font-size: clamp(2.4rem, 5.3vw, 4.6rem);
      line-height: 1.14;
      letter-spacing: -0.03em;
      max-width: 24ch;
      margin-inline: auto;
      display: inline-block;
      padding-bottom: 0.1em;
    }
    .oferta-title-chewy {
      font-family: "Chewy", cursive;
      letter-spacing: 0.01em;
      line-height: 1.08;
      font-weight: 400;
    }
    .oferta-c1 {
      background: linear-gradient(90deg, #0f172a 0%, #334155 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .oferta-c2 {
      background: linear-gradient(90deg, #1e3a8a 0%, #2563eb 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .oferta-c3 {
      background: linear-gradient(90deg, #1f2937 0%, #0f766e 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .oferta-c4 {
      background: linear-gradient(90deg, #3f3f46 0%, #ea580c 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .oferta-c5 {
      background: linear-gradient(90deg, #0c4a6e 0%, #0284c7 55%, #0369a1 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .oferta-c6 {
      background: linear-gradient(90deg, #1e293b 0%, #0f766e 50%, #14532d 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .oferta-c7 {
      background: linear-gradient(90deg, #7c2d12 0%, #c2410c 50%, #f97316 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .oferta-c8 {
      background: linear-gradient(90deg, #312e81 0%, #4f46e5 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .oferta-c9 {
      background: linear-gradient(90deg, #111827 0%, #374151 60%, #6b7280 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .oferta-c12 {
      background: linear-gradient(90deg, #1f4f79 0%, #0ea5e9 50%, #2dd4bf 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .testimonial-marquee {
      position: relative;
      overflow: hidden;
      mask-image: linear-gradient(to right, transparent 0%, black 8%, black 92%, transparent 100%);
      -webkit-mask-image: linear-gradient(to right, transparent 0%, black 8%, black 92%, transparent 100%);
    }
    .testimonial-track {
      display: flex;
      width: max-content;
      animation: testimonial-scroll 42s linear infinite;
    }
    .testimonial-marquee:hover .testimonial-track {
      animation-play-state: paused;
    }
    @keyframes testimonial-scroll {
      from {
        transform: translateX(0);
      }
      to {
        transform: translateX(-50%);
      }
    }
    @media (prefers-reduced-motion: reduce) {
      .testimonial-track {
        animation: none;
      }
    }
    .cta-pulse {
      animation: cta-elegant-pulse 2.8s ease-in-out infinite;
      box-shadow: 0 10px 26px rgba(15, 23, 42, 0.25);
    }
    .cta-pulse:hover {
      animation-play-state: paused;
    }
    @keyframes cta-elegant-pulse {
      0%, 100% {
        transform: scale(1);
        box-shadow: 0 10px 26px rgba(15, 23, 42, 0.25);
      }
      50% {
        transform: scale(1.035);
        box-shadow: 0 14px 34px rgba(15, 23, 42, 0.34);
      }
    }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900 flex flex-col">
<main class="flex-1">
  <section class="relative h-screen w-full overflow-hidden" data-aos="zoom-out" data-aos-duration="900">
    <video class="hero-video-filter absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline>
      <source src="<?= htmlspecialchars($heroVideoSrc, ENT_QUOTES, 'UTF-8') ?>" type="video/mp4">
    </video>
    <div class="hero-overlay-soft absolute inset-0"></div>

    <header class="absolute inset-x-0 top-0 z-30 flex items-start justify-between px-9 pt-6" data-aos="fade-down" data-aos-delay="150">
      <div class="pointer-events-none absolute left-1/2 top-6 -translate-x-1/2">
        <a class="pointer-events-auto" href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>/">
          <img class="h-auto w-[164px] max-w-[20vw]" src="<?= htmlspecialchars($logoSrc, ENT_QUOTES, 'UTF-8') ?>" alt="Colegio del Valle">
        </a>
      </div>
      <button class="ml-auto inline-flex items-center gap-3 bg-transparent p-2 text-[15px] font-semibold uppercase tracking-[0.12em] text-white transition hover:opacity-90" type="button" id="menuOpenBtn" aria-haspopup="dialog" aria-controls="desktopMenuSidebar" aria-expanded="false">
        <i data-lucide="menu" class="h-[18px] w-[18px]"></i>
        <span>Menu</span>
      </button>
    </header>

  </section>

  <section id="oferta" class="pt-20 pb-20 md:pt-24 md:pb-20">
    <div class="max-w-[1400px] mx-auto px-6">
      <div class="text-center" data-aos="fade-up">
        <h2 class="oferta-title-base oferta-title-chewy oferta-c12">Colegio en Colonia del Valle</h2>
        <p class="mt-6 text-lg text-slate-600">Formacion bilingüe, valores y excelencia académica desde preescolar.</p>
      </div>
      <div class="mt-16 md:mt-20">
        <div class="text-left" data-aos="fade-right">
          <p class="text-[15px] font-semibold uppercase tracking-[0.25em] text-slate-500">Oferta educativa</p>
          <h3 class="oferta-title-chewy mt-2 text-2xl text-[#345995] md:text-4xl">Un recorrido académico por etapas</h3>
          <p class="mt-3 max-w-3xl text-[15px] text-slate-600 md:text-base">Cada nivel está diseñado para impulsar aprendizaje, autonomía y crecimiento integral.</p>
        </div>
        <div class="mt-6 grid gap-5 md:grid-cols-2 xl:grid-cols-5">
          <a class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl" href="<?= $baseUrl ?>/oferta-educativa/kinder" data-aos="zoom-in-up" data-aos-delay="0">
            <div class="relative h-48 overflow-hidden">
              <img class="h-full w-full object-cover transition duration-500 " src="<?= $baseUrl ?>/_imgs/home/kinder-960.webp" alt="Kinder" loading="eager" fetchpriority="high" />
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/10 to-transparent"></div>
            </div>
            <div class="h-1 bg-[#EAC435]"></div>
            <div class="p-5">
              <h4 class="text-xl font-semibold text-slate-900">Kinder</h4>
              <p class="mt-2 text-[12px] uppercase tracking-[0.16em] text-slate-500">RVOE SEP<br />09060319/07/2006</p>
              <p class="mt-4 text-[12px] font-semibold uppercase tracking-[0.18em] text-cyan-700">Ver nivel</p>
            </div>
          </a>

          <a class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl" href="<?= $baseUrl ?>/oferta-educativa/pre-first" data-aos="zoom-in-up" data-aos-delay="70">
            <div class="relative h-48 overflow-hidden">
              <img class="h-full w-full object-cover transition duration-500 " src="<?= $baseUrl ?>/_imgs/home/pre-first.webp" alt="Pre-First" loading="lazy" />
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/10 to-transparent"></div>
            </div>
            <div class="h-1 bg-[#345995]"></div>
            <div class="p-5">
              <h4 class="text-xl font-semibold text-slate-900">Pre-First</h4>
              <p class="mt-2 text-[12px] uppercase tracking-[0.16em] text-slate-500">Transición<br />académica</p>
              <p class="mt-4 text-[12px] font-semibold uppercase tracking-[0.18em] text-cyan-700">Ver nivel</p>
            </div>
          </a>

          <a class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl" href="<?= $baseUrl ?>/oferta-educativa/primaria" data-aos="zoom-in-up" data-aos-delay="140">
            <div class="relative h-48 overflow-hidden">
              <img class="h-full w-full object-cover transition duration-500 " src="<?= $baseUrl ?>/_imgs/home/primaria.webp" alt="Primaria" loading="lazy" />
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/10 to-transparent"></div>
            </div>
            <div class="h-1 bg-[#E40066]"></div>
            <div class="p-5">
              <h4 class="text-xl font-semibold text-slate-900">Primaria</h4>
              <p class="mt-2 text-[12px] uppercase tracking-[0.16em] text-slate-500">RVOE SEP<br />09050086/06/2005</p>
              <p class="mt-4 text-[12px] font-semibold uppercase tracking-[0.18em] text-cyan-700">Ver nivel</p>
            </div>
          </a>

          <a class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl" href="<?= $baseUrl ?>/oferta-educativa/secundaria" data-aos="zoom-in-up" data-aos-delay="210">
            <div class="relative h-48 overflow-hidden">
              <img class="h-full w-full object-cover transition duration-500 " src="<?= $baseUrl ?>/_imgs/home/secundaria.webp" alt="Secundaria" loading="lazy" />
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/10 to-transparent"></div>
            </div>
            <div class="h-1 bg-[#03CEA4]"></div>
            <div class="p-5">
              <h4 class="text-xl font-semibold text-slate-900">Secundaria</h4>
              <p class="mt-2 text-[12px] uppercase tracking-[0.16em] text-slate-500">RVOE SEP 0900053/22/06/2000</p>
              <p class="mt-4 text-[12px] font-semibold uppercase tracking-[0.18em] text-cyan-700">Ver nivel</p>
            </div>
          </a>

          <a class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl" href="<?= $baseUrl ?>/oferta-educativa/preparatoria" data-aos="zoom-in-up" data-aos-delay="280">
            <div class="relative h-48 overflow-hidden">
              <img class="h-full w-full object-cover transition duration-500 " src="<?= $baseUrl ?>/_imgs/home/preparatoria.webp" alt="Preparatoria" loading="lazy" />
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/10 to-transparent"></div>
            </div>
            <div class="h-1 bg-[#FB4D3D]"></div>
            <div class="p-5">
              <h4 class="text-xl font-semibold text-slate-900">Preparatoria</h4>
              <p class="mt-2 text-[12px] uppercase tracking-[0.16em] text-slate-500">CLAVE<br />UNAM 1172</p>
              <p class="mt-4 text-[12px] font-semibold uppercase tracking-[0.18em] text-cyan-700">Ver nivel</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 md:py-20 bg-[#03CEA4] text-white" data-aos="fade-up">
    <div class="max-w-[1400px] mx-auto px-6 text-center" data-aos="fade-up" data-aos-delay="80">
      <h2 class="oferta-title-chewy text-3xl md:text-5xl tracking-tight">
        Nos preparamos todos los días para distinguirnos entre los mejores colegios privados en CDMX
      </h2>
      <p class="mt-4 text-[18px] font-normal text-white/90">
        La oferta educativa del Colegio en Ciudad de Mexico se adapta a una educación del presente y del futuro.<br />
        Desde preescolar hasta preparatoria, impulsamos la excelencia académica y el desarrollo integral.
      </p>
    </div>
  </section>

  <section id="diferenciadores" class="py-20 md:py-24 bg-slate-50">
    <div class="max-w-[1400px] mx-auto px-6">
      <div class="text-center" data-aos="fade-up">
        <p class="text-[12px] uppercase tracking-[0.28em] text-slate-500">Lo que nos diferencia</p>
        <h2 class="oferta-title-chewy mt-3 text-3xl md:text-4xl tracking-tight text-[#E40066]">Una formación completa para cada etapa</h2>
      </div>
      <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm" data-aos="fade-up" data-aos-delay="0">
          <span class="inline-flex h-14 w-14 items-center justify-center rounded-full border-2 border-[#345995] bg-[#345995]/15 text-[#345995]">
            <i data-lucide="languages" class="h-7 w-7"></i>
          </span>
          <h3 class="mt-4 text-xl font-semibold text-slate-900">Modelo bilingüe</h3>
          <p class="mt-3 text-[15px] leading-relaxed text-slate-600">Inmersión progresiva en inglés para fortalecer comunicación, comprensión y pensamiento global.</p>
        </article>
        <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm" data-aos="fade-up" data-aos-delay="80">
          <span class="inline-flex h-14 w-14 items-center justify-center rounded-full border-2 border-[#E40066] bg-[#E40066]/15 text-[#E40066]">
            <i data-lucide="heart-handshake" class="h-7 w-7"></i>
          </span>
          <h3 class="mt-4 text-xl font-semibold text-slate-900">Acompañamiento cercano</h3>
          <p class="mt-3 text-[15px] leading-relaxed text-slate-600">Seguimiento académico y socioemocional con comunicación constante entre colegio y familia.</p>
        </article>
        <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm" data-aos="fade-up" data-aos-delay="160">
          <span class="inline-flex h-14 w-14 items-center justify-center rounded-full border-2 border-[#03CEA4] bg-[#03CEA4]/15 text-[#03CEA4]">
            <i data-lucide="shield-check" class="h-7 w-7"></i>
          </span>
          <h3 class="mt-4 text-xl font-semibold text-slate-900">Entorno seguro</h3>
          <p class="mt-3 text-[15px] leading-relaxed text-slate-600">Protocolos, supervisión y cultura de respeto para una experiencia escolar confiable.</p>
        </article>
        <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm" data-aos="fade-up" data-aos-delay="240">
          <span class="inline-flex h-14 w-14 items-center justify-center rounded-full border-2 border-[#FB4D3D] bg-[#FB4D3D]/15 text-[#FB4D3D]">
            <i data-lucide="brain-circuit" class="h-7 w-7"></i>
          </span>
          <h3 class="mt-4 text-xl font-semibold text-slate-900">Innovación y tecnología</h3>
          <p class="mt-3 text-[15px] leading-relaxed text-slate-600">Aprendizaje activo con herramientas digitales y proyectos que preparan para el futuro.</p>
        </article>
      </div>
    </div>
  </section>

  <section id="admisiones-proceso" class="py-20 md:py-24 bg-white">
    <div class="max-w-[1400px] mx-auto px-6">
      <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
        <div data-aos="fade-right">
          <p class="text-[12px] uppercase tracking-[0.28em] text-slate-500">Admisiones</p>
          <h2 class="oferta-title-chewy mt-3 text-3xl md:text-4xl tracking-tight text-[#03CEA4]">Proceso de inscripción en 4 pasos</h2>
        </div>
        <a class="cta-pulse inline-flex w-fit items-center gap-2 rounded-full bg-slate-900 px-7 py-3 text-[12px] font-semibold uppercase tracking-[0.2em] text-white transition hover:bg-slate-800" href="<?= $baseUrl ?>/contacto/" data-aos="fade-left" data-aos-delay="120">
          <i data-lucide="arrow-right" class="h-4 w-4"></i>
          <span>Iniciar proceso</span>
        </a>
      </div>
      <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <article class="rounded-3xl border border-slate-200 bg-slate-50 p-6" data-aos="fade-up" data-aos-delay="0">
          <p class="text-[15px] font-semibold uppercase tracking-[0.2em] text-cyan-700">Paso 1</p>
          <h3 class="mt-3 text-lg font-semibold text-slate-900">Solicitud de informes</h3>
          <p class="mt-2 text-[15px] text-slate-600">Completa el formulario para conocer costos, horarios y disponibilidad.</p>
        </article>
        <article class="rounded-3xl border border-slate-200 bg-slate-50 p-6" data-aos="fade-up" data-aos-delay="80">
          <p class="text-[15px] font-semibold uppercase tracking-[0.2em] text-cyan-700">Paso 2</p>
          <h3 class="mt-3 text-lg font-semibold text-slate-900">Entrevista y recorrido</h3>
          <p class="mt-2 text-[15px] text-slate-600">Agenda visita para conocer instalaciones, modelo educativo y equipo docente.</p>
        </article>
        <article class="rounded-3xl border border-slate-200 bg-slate-50 p-6" data-aos="fade-up" data-aos-delay="160">
          <p class="text-[15px] font-semibold uppercase tracking-[0.2em] text-cyan-700">Paso 3</p>
          <h3 class="mt-3 text-lg font-semibold text-slate-900">Evaluación diagnóstica</h3>
          <p class="mt-2 text-[15px] text-slate-600">Aplicamos evaluación acorde al nivel para ubicar mejor al aspirante.</p>
        </article>
        <article class="rounded-3xl border border-slate-200 bg-slate-50 p-6" data-aos="fade-up" data-aos-delay="240">
          <p class="text-[15px] font-semibold uppercase tracking-[0.2em] text-cyan-700">Paso 4</p>
          <h3 class="mt-3 text-lg font-semibold text-slate-900">Inscripción y bienvenida</h3>
          <p class="mt-2 text-[15px] text-slate-600">Entrega de documentos, confirmación de lugar e integración al ciclo escolar.</p>
        </article>
      </div>
    </div>
  </section>

  <section id="logros" class="py-16 bg-[#FB4D3D] text-white">
    <div class="max-w-[1400px] mx-auto px-6">
      <div class="text-center" data-aos="fade-up">
        <p class="text-[12px] uppercase tracking-[0.28em] text-white">Resultados que respaldan</p>
        <h2 class="oferta-title-chewy mt-3 text-4xl md:text-5xl tracking-tight">Logros y resultados de nuestra comunidad</h2>
      </div>
      <div class="mt-10 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
        <article class="rounded-3xl border border-white/15 bg-white/5 p-6 text-center" data-aos="zoom-in" data-aos-delay="0">
          <i data-lucide="calendar-check-2" class="mx-auto mb-3 h-7 w-7 text-white/90"></i>
          <p class="text-3xl font-bold text-white">40+</p>
          <p class="mt-2 text-[12px] uppercase tracking-[0.2em] text-white/70">Años de trayectoria</p>
        </article>
        <article class="rounded-3xl border border-white/15 bg-white/5 p-6 text-center" data-aos="zoom-in" data-aos-delay="80">
          <i data-lucide="languages" class="mx-auto mb-3 h-7 w-7 text-white/90"></i>
          <p class="text-3xl font-bold text-white">Bilingüe</p>
          <p class="mt-2 text-[12px] uppercase tracking-[0.2em] text-white/70">Formación desde etapas iniciales</p>
        </article>
        <article class="rounded-3xl border border-white/15 bg-white/5 p-6 text-center" data-aos="zoom-in" data-aos-delay="160">
          <i data-lucide="graduation-cap" class="mx-auto mb-3 h-7 w-7 text-white/90"></i>
          <p class="text-3xl font-bold text-white">UNAM</p>
          <p class="mt-2 text-[12px] uppercase tracking-[0.2em] text-white/70">Clave 1172 en Preparatoria</p>
        </article>
        <article class="rounded-3xl border border-white/15 bg-white/5 p-6 text-center" data-aos="zoom-in" data-aos-delay="240">
          <i data-lucide="sparkles" class="mx-auto mb-3 h-7 w-7 text-white/90"></i>
          <p class="text-3xl font-bold text-white">Integral</p>
          <p class="mt-2 text-[12px] uppercase tracking-[0.2em] text-white/70">Enfoque académico y socioemocional</p>
        </article>
      </div>
    </div>
  </section>

  <section id="testimonios" class="py-16 md:py-20 bg-slate-50 overflow-hidden">
    <div class="max-w-[1400px] mx-auto px-6">
      <div class="text-center" data-aos="fade-up">
        <p class="text-[12px] uppercase tracking-[0.28em] text-slate-500">Confianza de las familias</p>
        <h2 class="oferta-title-chewy mt-3 text-4xl md:text-5xl tracking-tight text-[#FB4D3D]">Testimonios de nuestra comunidad</h2>
        <p class="mt-3 text-[12px] uppercase tracking-[0.2em] text-slate-500">Historias reales de acompañamiento y crecimiento</p>
      </div>
      <?php
        $testimonials = [
          [
            'family' => 'Familia Kinder',
            'level' => 'Preescolar',
            'text' => 'Nos acompañaron desde el primer contacto. La adaptación de nuestro hijo fue rápida y muy positiva.',
          ],
          [
            'family' => 'Familia Primaria',
            'level' => 'Primaria',
            'text' => 'Valoramos mucho el equilibrio entre exigencia académica, inglés y formación en valores.',
          ],
          [
            'family' => 'Familia Secundaria',
            'level' => 'Secundaria',
            'text' => 'La orientación académica y socioemocional les da seguridad para enfrentar nuevos retos.',
          ],
          [
            'family' => 'Familia Preparatoria',
            'level' => 'Preparatoria',
            'text' => 'El acompañamiento vocacional fue clave para que nuestro hijo definiera su plan universitario.',
          ],
          [
            'family' => 'Familia Pre-First',
            'level' => 'Transición',
            'text' => 'La transición entre niveles fue clara y cercana; nos sentimos siempre informados como familia.',
          ],
          [
            'family' => 'Familia Comunidad CDV',
            'level' => 'Integral',
            'text' => 'Se nota una comunidad unida: docentes accesibles, comunicación constante y seguimiento real.',
          ],
        ];
      ?>
      <div class="testimonial-marquee mt-10" data-aos="fade-up" data-aos-delay="120">
        <div class="testimonial-track gap-5">
          <?php for ($loop = 0; $loop < 2; $loop++): ?>
            <?php foreach ($testimonials as $item): ?>
              <article class="min-w-[300px] max-w-[300px] rounded-3xl border border-slate-200 bg-white/95 p-6 shadow-sm sm:min-w-[340px] sm:max-w-[340px]">
                <div class="flex items-start justify-between gap-3">
                  <div class="flex items-center gap-3">
                    <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-sky-100 via-cyan-100 to-teal-100 text-slate-700">
                      <i data-lucide="user" class="h-5 w-5"></i>
                    </span>
                    <div>
                      <p class="text-[12px] font-semibold uppercase tracking-[0.18em] text-slate-700"><?= htmlspecialchars($item['family'], ENT_QUOTES, 'UTF-8') ?></p>
                      <p class="text-[12px] uppercase tracking-[0.16em] text-slate-500"><?= htmlspecialchars($item['level'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                  </div>
                  <i data-lucide="message-circle" class="h-5 w-5 text-cyan-600"></i>
                </div>
                <div class="mt-4 flex items-center gap-1 text-amber-500">
                  <i data-lucide="star" class="h-4 w-4 fill-current"></i>
                  <i data-lucide="star" class="h-4 w-4 fill-current"></i>
                  <i data-lucide="star" class="h-4 w-4 fill-current"></i>
                  <i data-lucide="star" class="h-4 w-4 fill-current"></i>
                  <i data-lucide="star" class="h-4 w-4 fill-current"></i>
                </div>
                <p class="mt-4 text-[15px] leading-relaxed text-slate-700">“<?= htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8') ?>”</p>
              </article>
            <?php endforeach; ?>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>

  <section id="comunidad" class="py-16 bg-[#EAC435] text-slate-900">
    <div class="max-w-[1400px] mx-auto px-6">
      <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
        <div data-aos="fade-up">
          <p class="text-[12px] uppercase tracking-[0.3em] text-slate-900/70">Enlaces de interés</p>
          <h2 class="oferta-title-chewy mt-3 text-4xl md:text-5xl">Recursos para la comunidad</h2>
        </div>
      </div>
      <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
        <a class="rounded-2xl bg-black/5 p-5 text-center transition hover:bg-black/10" href="<?= $baseUrl ?>/formas-de-pago" data-aos="fade-up" data-aos-delay="0">
          <img class="mx-auto mb-3 h-24 w-24 object-contain" src="<?= $baseUrl ?>/_imgs/home/imgi_13_ISEC_Forma-de-pago_172x154.webp" alt="" aria-hidden="true" loading="lazy" />
          <p class="text-[12px] uppercase tracking-[0.2em] text-slate-900">Formas de pago</p>
        </a>
        <a class="rounded-2xl bg-black/5 p-5 text-center transition hover:bg-black/10" href="https://uneg.academic.lat/" target="_blank" rel="noopener" data-aos="fade-up" data-aos-delay="70">
          <img class="mx-auto mb-3 h-24 w-24 object-contain" src="<?= $baseUrl ?>/_imgs/home/imgi_14_ISEC_Portal_172x154.webp" alt="" aria-hidden="true" loading="lazy" />
          <p class="text-[12px] uppercase tracking-[0.2em] text-slate-900">Portal escolar</p>
        </a>
        <a class="rounded-2xl bg-black/5 p-5 text-center transition hover:bg-black/10" href="https://login.microsoftonline.com/" target="_blank" rel="noopener" data-aos="fade-up" data-aos-delay="140">
          <img class="mx-auto mb-3 h-24 w-24 object-contain" src="<?= $baseUrl ?>/_imgs/home/imgi_15_ISEC_Office-365_172x154.webp" alt="" aria-hidden="true" loading="lazy" />
          <p class="text-[12px] uppercase tracking-[0.2em] text-slate-900">Office 365</p>
        </a>
        <div class="rounded-2xl bg-black/5 p-5 text-center" data-aos="fade-up" data-aos-delay="210">
          <img class="mx-auto mb-3 h-24 w-24 object-contain" src="<?= $baseUrl ?>/_imgs/home/imgi_16_ISEC_Mesa-ayuda_172x154.webp" alt="" aria-hidden="true" loading="lazy" />
          <p class="text-[12px] uppercase tracking-[0.2em] text-slate-900">Mesa de ayuda</p>
        </div>
        <a class="rounded-2xl bg-black/5 p-5 text-center transition hover:bg-black/10" href="https://impreweb.ddns.net:48110/PMPWeb/" target="_blank" rel="noopener" data-aos="fade-up" data-aos-delay="280">
          <img class="mx-auto mb-3 h-24 w-24 object-contain" src="<?= $baseUrl ?>/_imgs/home/imgi_17_ISEC_Kiosko_172x154.webp" alt="" aria-hidden="true" loading="lazy" />
          <p class="text-[12px] uppercase tracking-[0.2em] text-slate-900">Kiosko</p>
        </a>
      </div>
    </div>
  </section>

  <section id="noticias" class="py-16 bg-white">
    <div class="max-w-[1400px] mx-auto px-6">
      <div class="text-center" data-aos="fade-up">
        <p class="text-[12px] uppercase tracking-[0.3em] text-slate-500">Blog escolar</p>
        <h2 class="oferta-title-chewy mt-3 text-4xl md:text-5xl tracking-tight text-[#345995]">Ultimas noticias</h2>
        <p class="mt-3 text-slate-600">Ideas y recursos actuales para la comunidad educativa.</p>
      </div>
      <?php
        $newsPosts = include dirname(__DIR__) . '/pages/noticias/data.php';
        usort($newsPosts, fn($a, $b) => ($b['date_ts'] ?? 0) <=> ($a['date_ts'] ?? 0));
        $newsPosts = array_slice($newsPosts, 0, 3);
      ?>
      <div class="mt-10 grid gap-6 md:grid-cols-3">
        <?php foreach ($newsPosts as $post): ?>
          <article class="rounded-3xl border border-slate-200 overflow-hidden bg-white" data-aos="fade-up">
            <div class="aspect-[4/3] bg-slate-100 overflow-hidden">
              <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/_imgs/noticias/<?= htmlspecialchars($post['hero']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" loading="lazy" />
            </div>
            <div class="p-5">
              <p class="text-[12px] uppercase tracking-[0.2em] text-slate-400">
                <?= htmlspecialchars($post['date']) ?> · <?= htmlspecialchars($post['category']) ?>
              </p>
              <h3 class="mt-2 font-semibold text-slate-900"><?= htmlspecialchars($post['title']) ?></h3>
              <p class="mt-2 text-[15px] text-slate-600"><?= htmlspecialchars($post['excerpt']) ?></p>
              <a class="mt-4 inline-flex text-[12px] font-semibold uppercase tracking-[0.2em] text-slate-900" href="<?= $baseUrl ?>/noticias/<?= htmlspecialchars($post['slug']) ?>">Leer mas</a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <div class="fixed inset-0 z-[80] invisible pointer-events-none" id="desktopMenuSidebar" aria-hidden="true">
    <button class="absolute inset-0 bg-slate-950/35 opacity-0 backdrop-blur-sm transition duration-300" type="button" id="menuBackdrop" aria-label="Cerrar menu"></button>
    <aside class="absolute right-0 top-0 flex h-full w-[min(32vw,420px)] min-w-[320px] translate-x-full flex-col gap-5 border-l border-white/20 px-6 py-6 backdrop-blur-2xl transition duration-300" id="menuPanel" aria-label="Menu principal">
      <div class="flex items-center justify-between border-b border-white/20 pb-4">
        <a class="text-[12px] uppercase tracking-[0.2em] text-slate-300 transition hover:text-white" href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>/contacto/">Admisiones</a>
        <button class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-white/30 text-white transition hover:bg-white/10" type="button" id="menuCloseBtn" aria-label="Cerrar menu">
          <i data-lucide="x" class="h-5 w-5"></i>
        </button>
      </div>
      <nav class="flex-1 overflow-y-auto">
        <ul class="grid gap-1.5">
          <?php foreach ($menuItems as $item): ?>
            <li>
              <?php if (isset($menuSubItems[$item['label']])): ?>
                <details class="group rounded-xl border border-transparent open:border-white/20 text-[12px] uppercase tracking-[0.08em] text-white">
                  <summary class="flex cursor-pointer list-none items-center justify-between rounded-xl px-3 py-2.5 transition hover:bg-white/10">
                    <span><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></span>
                    <i data-lucide="chevron-down" class="h-4 w-4 transition group-open:rotate-180"></i>
                  </summary>
                  <div class="mt-1 grid gap-1 px-3 pb-1">
                    <?php foreach ($menuSubItems[$item['label']] as $subItem): ?>
                      <a class="block w-full rounded-lg px-3 py-2 text-[12px] tracking-[0.08em] text-slate-200 transition hover:bg-white/10 hover:text-white" href="<?= htmlspecialchars($baseUrl . $subItem['href'], ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($subItem['label'], ENT_QUOTES, 'UTF-8') ?>
                      </a>
                    <?php endforeach; ?>
                  </div>
                </details>
              <?php else: ?>
                <a class="block rounded-xl px-3 py-2.5 text-[12px] uppercase tracking-[0.08em] text-white transition hover:bg-white/10" href="<?= htmlspecialchars($baseUrl . $item['href'], ENT_QUOTES, 'UTF-8') ?>">
                  <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
                </a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <div class="mt-auto border-t border-white/15 pt-4 text-[11px] uppercase tracking-[0.08em] text-slate-200">
        <div class="space-y-2.5">
          <p class="flex items-center gap-2">
            <i data-lucide="phone" class="h-3.5 w-3.5 text-white/90"></i>
            <span>Admisiones: <a class="text-white transition hover:text-cyan-200" href="tel:+525550631500">55 5063 1500</a> - Opcion 1</span>
          </p>
          <p class="flex items-center gap-2">
            <i data-lucide="message-circle" class="h-3.5 w-3.5 text-white/90"></i>
            <span>WhatsApp: <a class="text-white transition hover:text-cyan-200" href="https://wa.me/525571137882" target="_blank" rel="noopener">55 7113 7882</a></span>
          </p>
          <div class="flex items-start gap-2">
            <i data-lucide="credit-card" class="mt-0.5 h-3.5 w-3.5 text-white/90"></i>
            <div>
              <p>Credito y cobranza WhatsApp:</p>
              <p class="mt-0.5">
                <a class="text-white transition hover:text-cyan-200" href="https://wa.me/525517009348" target="_blank" rel="noopener">55 1700 9348</a>
                -
                <a class="text-white transition hover:text-cyan-200" href="https://wa.me/525667477007" target="_blank" rel="noopener">56 6747 7007</a>
              </p>
            </div>
          </div>
        </div>
        <div class="mt-3 flex items-center gap-2 border-t border-white/10 pt-3">
          <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/30 text-white transition hover:bg-white/10" href="https://www.facebook.com/ColegioDelValleCDMX/" target="_blank" rel="noopener" aria-label="Facebook">
            <i data-lucide="facebook" class="h-3.5 w-3.5"></i>
          </a>
          <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/30 text-white transition hover:bg-white/10" href="https://www.instagram.com/coledelvalleoficial/" target="_blank" rel="noopener" aria-label="Instagram">
            <i data-lucide="instagram" class="h-3.5 w-3.5"></i>
          </a>
          <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/30 text-white transition hover:bg-white/10" href="https://www.youtube.com/channel/UC9BpoT0OCFs254I9TvwTQ8g" target="_blank" rel="noopener" aria-label="YouTube">
            <i data-lucide="youtube" class="h-3.5 w-3.5"></i>
          </a>
        </div>
      </div>
    </aside>
  </div>

  <script>
    (() => {
      const menuLayer = document.getElementById('desktopMenuSidebar');
      const menuPanel = document.getElementById('menuPanel');
      const openBtn = document.getElementById('menuOpenBtn');
      const closeBtn = document.getElementById('menuCloseBtn');
      const backdrop = document.getElementById('menuBackdrop');
      const sidebarDetails = menuPanel ? menuPanel.querySelectorAll('nav details') : [];
      if (!menuLayer || !menuPanel || !openBtn || !closeBtn || !backdrop) return;

      const openMenu = () => {
        menuLayer.classList.remove('invisible', 'pointer-events-none');
        menuLayer.classList.add('visible', 'pointer-events-auto');
        menuLayer.setAttribute('aria-hidden', 'false');
        openBtn.setAttribute('aria-expanded', 'true');
        backdrop.classList.remove('opacity-0');
        backdrop.classList.add('opacity-100');
        menuPanel.classList.remove('translate-x-full');
        menuPanel.classList.add('translate-x-0');
        document.body.classList.add('overflow-hidden');
      };

      const closeMenu = () => {
        menuLayer.classList.remove('visible', 'pointer-events-auto');
        menuLayer.classList.add('invisible', 'pointer-events-none');
        menuLayer.setAttribute('aria-hidden', 'true');
        openBtn.setAttribute('aria-expanded', 'false');
        backdrop.classList.add('opacity-0');
        backdrop.classList.remove('opacity-100');
        menuPanel.classList.add('translate-x-full');
        menuPanel.classList.remove('translate-x-0');
        document.body.classList.remove('overflow-hidden');
      };

      openBtn.addEventListener('click', openMenu);
      closeBtn.addEventListener('click', closeMenu);
      backdrop.addEventListener('click', closeMenu);
      sidebarDetails.forEach((detail) => {
        detail.addEventListener('toggle', () => {
          if (!detail.open) return;
          sidebarDetails.forEach((other) => {
            if (other !== detail) {
              other.open = false;
            }
          });
        });
      });
      document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && menuLayer.getAttribute('aria-hidden') === 'false') {
          closeMenu();
        }
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
