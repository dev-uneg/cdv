<?php
$pageTitle = $pageTitle ?? 'Colegio del Valle';
$activePage = $activePage ?? '';
$baseUrl = defined('BASE_URL') ? BASE_URL : rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($baseUrl === '/') {
    $baseUrl = '';
}
$navClass = function (string $key) use ($activePage): string {
    if ($key === $activePage) {
        return 'text-slate-900 font-semibold';
    }
    return 'text-slate-600 hover:text-slate-900';
};
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/output.css" />
  <!--
    Tailwind CDN (solo desarrollo/urgencias). Para usarlo:
    1) comenta el link a /assets/output.css
    2) descomenta el script CDN
  -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <style>
    :root {
      --cdv-orange: #f97316;
      --cdv-orange-deep: #ea580c;
      --cdv-blue: #0ea5e9;
      --cdv-blue-deep: #0284c7;
      --cdv-ink: #0f172a;
    }
    html, body { font-family: "Figtree", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif; }
    .display-font { font-family: "Figtree", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif; }
    .hero-sunburst {
      background-image:
        radial-gradient(circle at 12% 20%, rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0) 55%),
        repeating-conic-gradient(from 0deg, #f97316 0deg 12deg, #fb923c 12deg 24deg);
      background-color: #fb923c;
    }
    .hero-blob {
      background: linear-gradient(135deg, #0ea5e9 0%, #38bdf8 100%);
      border-radius: 999px;
      box-shadow: 0 20px 40px rgba(2, 132, 199, 0.25);
    }
    .soft-grid {
      background-image:
        radial-gradient(circle at 1px 1px, rgba(15, 23, 42, 0.08) 1px, transparent 0);
      background-size: 26px 26px;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.82);
      backdrop-filter: blur(10px);
    }
    .mobile-menu summary {
      list-style: none;
    }
    .mobile-menu summary::-webkit-details-marker {
      display: none;
    }
    .topbar-marquee {
      overflow: hidden;
      flex: 1 1 auto;
      min-width: 0;
    }
    .topbar-marquee__inner {
      display: flex;
      width: max-content;
      animation: topbar-marquee 20s linear infinite;
    }
    .topbar-marquee__group {
      display: inline-flex;
      align-items: center;
      gap: 1rem;
      padding-right: 1.5rem;
      white-space: nowrap;
    }
    .topbar-marquee__group--duplicate {
      display: inline-flex;
    }
    .topbar-icons {
      flex-shrink: 0;
    }
    @keyframes topbar-marquee {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    @media (min-width: 640px) {
      .topbar-marquee {
        overflow: visible;
      }
      .topbar-marquee__inner {
        width: 100%;
        animation: none;
      }
      .topbar-marquee__group {
        white-space: normal;
        padding-right: 0;
        flex-wrap: wrap;
      }
      .topbar-marquee__group--duplicate {
        display: none;
      }
    }
    @media (prefers-reduced-motion: reduce) {
      .topbar-marquee__inner {
        animation: none;
        transform: translateX(0);
      }
    }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <header class="bg-white">
    <div class="bg-slate-900 text-slate-100 text-xs">
      <div class="max-w-[1300px] mx-auto px-6 py-2 flex items-center justify-between gap-3">
        <div class="topbar-marquee">
          <div class="topbar-marquee__inner">
            <div class="topbar-marquee__group">
              <span>ADMISIONES: 55 5063 1500 - Opcion 1</span>
              <span class="text-slate-400">|</span>
              <span>WHATSAPP: 55 7113 7882</span>
              <span class="text-slate-400">|</span>
              <span>CREDITO Y COBRANZA WHATSAPP: 55 1700 9348 - 56 6747 7007</span>
            </div>
            <div class="topbar-marquee__group topbar-marquee__group--duplicate" aria-hidden="true">
              <span>ADMISIONES: 55 5063 1500 - Opcion 1</span>
              <span class="text-slate-400">|</span>
              <span>WHATSAPP: 55 7113 7882</span>
              <span class="text-slate-400">|</span>
              <span>CREDITO Y COBRANZA WHATSAPP: 55 1700 9348 - 56 6747 7007</span>
            </div>
          </div>
        </div>
        <div class="topbar-icons flex items-center gap-2 text-sm">
          <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/40" href="https://www.facebook.com/ColegioDelValleCDMX/" target="_blank" rel="noopener" aria-label="Facebook">
            <i class="ri-facebook-fill"></i>
          </a>
          <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/40" href="https://www.instagram.com/coledelvalleoficial/" target="_blank" rel="noopener" aria-label="Instagram">
            <i class="ri-instagram-line"></i>
          </a>
          <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/40" href="https://www.youtube.com/channel/UC9BpoT0OCFs254I9TvwTQ8g" target="_blank" rel="noopener" aria-label="YouTube">
            <i class="ri-youtube-fill"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="border-b border-slate-200">
      <div class="max-w-[1300px] mx-auto px-6 py-5 flex flex-col gap-4 lg:flex-row lg:items-center lg:gap-10">
        <div class="flex items-center justify-between">
          <a class="flex items-center gap-4" href="<?= $baseUrl ?>/">
            <img class="h-16 md:h-20 w-auto" src="<?= $baseUrl ?>/imgs/Colegio-del-Valle-Logo-342x206.png" alt="Colegio del Valle" />
          </a>
          <button id="mobile-menu-open" class="lg:hidden inline-flex items-center gap-2 rounded-full border border-slate-200 px-4 py-2 text-[10px] font-semibold uppercase tracking-[0.2em] text-slate-700 hover:bg-slate-50" type="button" aria-controls="mobile-menu" aria-expanded="false">
            <i class="ri-menu-3-line text-lg"></i>
            Menu
          </button>
        </div>
        <nav class="hidden lg:flex flex-wrap items-center gap-4 text-xs font-semibold uppercase tracking-[0.15em] lg:ml-auto lg:justify-end">
          <a class="<?= $navClass('home') ?>" href="<?= $baseUrl ?>/">Inicio</a>
          <a class="<?= $navClass('nosotros') ?>" href="<?= $baseUrl ?>/nosotros">Nosotros</a>
          <div class="relative group">
            <a class="<?= $navClass('servicios') ?> inline-flex items-center gap-1" href="<?= $baseUrl ?>/servicios">
              Oferta Academica
              <i class="ri-arrow-down-s-line text-sm"></i>
            </a>
            <div class="pointer-events-none absolute left-0 top-full z-20 mt-3 w-56 rounded-2xl border border-slate-200 bg-white p-3 text-[11px] font-semibold uppercase tracking-[0.15em] text-slate-700 shadow-lg opacity-0 transition group-hover:pointer-events-auto group-hover:opacity-100 before:absolute before:-top-3 before:left-0 before:h-3 before:w-full before:content-['']">
              <a class="block rounded-lg px-3 py-2 hover:bg-slate-50" href="<?= $baseUrl ?>/kinder">Kinder</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-slate-50" href="<?= $baseUrl ?>/pre-first">Pre First</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-slate-50" href="<?= $baseUrl ?>/primaria">Primaria</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-slate-50" href="<?= $baseUrl ?>/secundaria">Secundaria</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-slate-50" href="<?= $baseUrl ?>/preparatoria">Preparatoria</a>
            </div>
          </div>
          <a class="text-slate-600 hover:text-slate-900" href="<?= $baseUrl ?>/noticias">Noticias</a>
          <div class="relative group">
            <a class="text-slate-600 hover:text-slate-900 inline-flex items-center gap-1" href="#comunidad">
              Comunidad
              <i class="ri-arrow-down-s-line text-sm"></i>
            </a>
            <div class="pointer-events-none absolute left-0 top-full z-20 mt-3 w-56 rounded-2xl border border-slate-200 bg-white p-3 text-[11px] font-semibold uppercase tracking-[0.15em] text-slate-700 shadow-lg opacity-0 transition group-hover:pointer-events-auto group-hover:opacity-100 before:absolute before:-top-3 before:left-0 before:h-3 before:w-full before:content-['']">
              <a class="block rounded-lg px-3 py-2 hover:bg-slate-50" href="<?= $baseUrl ?>/comunidad/alumnos">Alumnos</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-slate-50" href="<?= $baseUrl ?>/comunidad/egresados">Egresados</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-slate-50" href="<?= $baseUrl ?>/comunidad/docentes">Docentes</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-slate-50" href="<?= $baseUrl ?>/comunidad/talleres">Talleres Vespertinos</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-slate-50" href="<?= $baseUrl ?>/comunidad/calendario-academico">Calendarios Academicos</a>
            </div>
          </div>
          <a class="<?= $navClass('contacto') ?>" href="<?= $baseUrl ?>/contacto">Contacto</a>
          <a class="text-slate-600 hover:text-slate-900" href="<?= $baseUrl ?>/blog">Blog</a>
          <a class="text-slate-600 hover:text-slate-900" href="<?= $baseUrl ?>/ixu">IXU</a>
        </nav>
      </div>
    </div>
    <div id="mobile-menu" class="mobile-menu fixed inset-0 z-50 hidden lg:hidden" aria-hidden="true">
      <button class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm opacity-0 transition-opacity duration-300" type="button" data-mobile-close aria-label="Cerrar menu"></button>
      <aside class="absolute right-0 top-0 flex h-full w-[85vw] max-w-sm flex-col bg-white shadow-2xl translate-x-full transition-transform duration-300 ease-out" data-mobile-panel>
        <div class="flex items-center justify-between border-b border-slate-200 px-6 py-5">
          <span class="text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-500">Menu</span>
          <button class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-slate-200 text-slate-600 hover:bg-slate-50" type="button" data-mobile-close aria-label="Cerrar menu">
            <i class="ri-close-line text-lg"></i>
          </button>
        </div>
        <nav class="flex-1 overflow-y-auto px-6 py-6 space-y-3 text-xs font-semibold uppercase tracking-[0.15em]">
          <a class="block rounded-lg px-3 py-3 <?= $navClass('home') ?> hover:bg-slate-50" href="<?= $baseUrl ?>/" data-mobile-close>Inicio</a>
          <a class="block rounded-lg px-3 py-3 <?= $navClass('nosotros') ?> hover:bg-slate-50" href="<?= $baseUrl ?>/nosotros" data-mobile-close>Nosotros</a>
          <details class="group rounded-xl border border-slate-200 bg-slate-50 px-3 py-3 open:shadow-sm">
            <summary class="flex cursor-pointer list-none items-center justify-between text-slate-700">
              <span>Oferta Academica</span>
              <i class="ri-arrow-down-s-line text-lg"></i>
            </summary>
            <div class="mt-3 space-y-2 text-[11px] font-semibold uppercase tracking-[0.15em] text-slate-600">
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/servicios" data-mobile-close>Ver todo</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/kinder" data-mobile-close>Kinder</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/pre-first" data-mobile-close>Pre First</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/primaria" data-mobile-close>Primaria</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/secundaria" data-mobile-close>Secundaria</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/preparatoria" data-mobile-close>Preparatoria</a>
            </div>
          </details>
          <a class="block rounded-lg px-3 py-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900" href="<?= $baseUrl ?>/noticias" data-mobile-close>Noticias</a>
          <details class="group rounded-xl border border-slate-200 bg-slate-50 px-3 py-3 open:shadow-sm">
            <summary class="flex cursor-pointer list-none items-center justify-between text-slate-700">
              <span>Comunidad</span>
              <i class="ri-arrow-down-s-line text-lg"></i>
            </summary>
            <div class="mt-3 space-y-2 text-[11px] font-semibold uppercase tracking-[0.15em] text-slate-600">
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/comunidad/alumnos" data-mobile-close>Alumnos</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/comunidad/egresados" data-mobile-close>Egresados</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/comunidad/docentes" data-mobile-close>Docentes</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/comunidad/talleres" data-mobile-close>Talleres Vespertinos</a>
              <a class="block rounded-lg px-3 py-2 hover:bg-white" href="<?= $baseUrl ?>/comunidad/calendario-academico" data-mobile-close>Calendarios Academicos</a>
            </div>
          </details>
          <a class="block rounded-lg px-3 py-3 <?= $navClass('contacto') ?> hover:bg-slate-50" href="<?= $baseUrl ?>/contacto" data-mobile-close>Contacto</a>
          <a class="block rounded-lg px-3 py-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900" href="<?= $baseUrl ?>/blog" data-mobile-close>Blog</a>
          <a class="block rounded-lg px-3 py-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900" href="<?= $baseUrl ?>/ixu" data-mobile-close>IXU</a>
        </nav>
      </aside>
    </div>

    <script>
      (() => {
        const menu = document.getElementById('mobile-menu');
        const openBtn = document.getElementById('mobile-menu-open');
        if (!menu || !openBtn) return;

        const panel = menu.querySelector('[data-mobile-panel]');
        const backdrop = menu.querySelector('[data-mobile-close]');
        const closeBtns = menu.querySelectorAll('[data-mobile-close]');

        const openMenu = () => {
          menu.classList.remove('hidden');
          menu.setAttribute('aria-hidden', 'false');
          openBtn.setAttribute('aria-expanded', 'true');
          document.body.classList.add('overflow-hidden');
          requestAnimationFrame(() => {
            panel.classList.remove('translate-x-full');
            panel.classList.add('translate-x-0');
            backdrop.classList.remove('opacity-0');
            backdrop.classList.add('opacity-100');
          });
        };

        const closeMenu = () => {
          panel.classList.add('translate-x-full');
          panel.classList.remove('translate-x-0');
          backdrop.classList.add('opacity-0');
          backdrop.classList.remove('opacity-100');
          menu.setAttribute('aria-hidden', 'true');
          openBtn.setAttribute('aria-expanded', 'false');
          document.body.classList.remove('overflow-hidden');
          setTimeout(() => {
            if (panel.classList.contains('translate-x-full')) {
              menu.classList.add('hidden');
            }
          }, 300);
        };

        openBtn.addEventListener('click', openMenu);
        closeBtns.forEach((btn) => btn.addEventListener('click', closeMenu));
        menu.addEventListener('keydown', (event) => {
          if (event.key === 'Escape') {
            closeMenu();
          }
        });
      })();
    </script>
  </header>
  <main class="w-full">
