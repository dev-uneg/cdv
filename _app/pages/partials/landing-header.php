<?php
$pageTitle = $pageTitle ?? 'Colegio del Valle';
$pageDescription = isset($pageDescription) ? trim($pageDescription) : '';
$mainClass = $mainClass ?? '';
$baseUrl = defined('BASE_URL') ? BASE_URL : rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($baseUrl === '/') {
    $baseUrl = '';
}
$assetsPath = dirname(__DIR__, 3) . '/_assets';
$lucideSpritePath = $assetsPath . '/lucide-sprite.svg';
$lucideLoaderPath = $assetsPath . '/lucide-loader.js';
$lucideSpriteVersion = file_exists($lucideSpritePath) ? (string) filemtime($lucideSpritePath) : '0';
$lucideLoaderVersion = file_exists($lucideLoaderPath) ? (string) filemtime($lucideLoaderPath) : '0';
$lucideSpriteHref = $baseUrl . '/_assets/lucide-sprite.svg?v=' . $lucideSpriteVersion;
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <?php if ($pageDescription !== ''): ?>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>" />
  <?php endif; ?>
  <link rel="icon" type="image/png" href="<?= $baseUrl ?>/_imgs/favicon.png" />
  <link rel="stylesheet" href="<?= $baseUrl ?>/_assets/output.css" />
  <script
    defer
    src="<?= $baseUrl ?>/_assets/lucide-loader.js?v=<?= htmlspecialchars($lucideLoaderVersion, ENT_QUOTES, 'UTF-8') ?>"
    data-lucide-sprite="<?= htmlspecialchars($lucideSpriteHref, ENT_QUOTES, 'UTF-8') ?>"
  ></script>
  <style>
    @font-face {
      font-family: "Figtree";
      src: url("<?= $baseUrl ?>/_assets/fonts/Figtree-300.ttf") format("truetype");
      font-weight: 300;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: "Figtree";
      src: url("<?= $baseUrl ?>/_assets/fonts/Figtree-400.ttf") format("truetype");
      font-weight: 400;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: "Figtree";
      src: url("<?= $baseUrl ?>/_assets/fonts/Figtree-500.ttf") format("truetype");
      font-weight: 500;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: "Figtree";
      src: url("<?= $baseUrl ?>/_assets/fonts/Figtree-600.ttf") format("truetype");
      font-weight: 600;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: "Figtree";
      src: url("<?= $baseUrl ?>/_assets/fonts/Figtree-700.ttf") format("truetype");
      font-weight: 700;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: "Figtree";
      src: url("<?= $baseUrl ?>/_assets/fonts/Figtree-800.ttf") format("truetype");
      font-weight: 800;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: "Figtree";
      src: url("<?= $baseUrl ?>/_assets/fonts/Figtree-900.ttf") format("truetype");
      font-weight: 900;
      font-style: normal;
      font-display: swap;
    }
    html, body { font-family: "Figtree", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900 flex flex-col">
  <header class="bg-white">
    <div class="bg-slate-900 text-slate-100 text-xs">
      <div class="max-w-[1300px] mx-auto px-6 py-2 flex items-center justify-between gap-3">
        <div class="flex flex-wrap items-center gap-3">
          <span>ADMISIONES: <a class="underline decoration-white/40 hover:decoration-white" href="tel:+525550631500">55 5063 1500</a> - Opción 1</span>
          <span class="text-slate-400">|</span>
          <span>WHATSAPP: <a class="underline decoration-white/40 hover:decoration-white" href="https://wa.me/525571137882" target="_blank" rel="noopener">55 7113 7882</a></span>
        </div>
        <div class="flex items-center gap-2 text-sm">
          <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/40" href="https://www.facebook.com/ColegioDelValleCDMX/" target="_blank" rel="noopener" aria-label="Facebook">
            <i data-lucide="facebook"></i>
          </a>
          <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/40" href="https://www.instagram.com/coledelvalleoficial/" target="_blank" rel="noopener" aria-label="Instagram">
            <i data-lucide="instagram"></i>
          </a>
          <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/40" href="https://www.youtube.com/channel/UC9BpoT0OCFs254I9TvwTQ8g" target="_blank" rel="noopener" aria-label="YouTube">
            <i data-lucide="youtube"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="border-b border-slate-200">
      <div class="max-w-[1300px] mx-auto px-6 py-5 flex items-center justify-center">
        <a href="<?= $baseUrl ?>/" class="inline-flex items-center justify-center">
          <img class="h-16 md:h-20 w-auto" src="<?= $baseUrl ?>/_imgs/Colegio-del-Valle-Logo-342x206.webp" alt="Colegio del Valle" width="342" height="206" />
        </a>
      </div>
    </div>
  </header>
  <main class="w-full flex-1 <?= htmlspecialchars($mainClass, ENT_QUOTES, 'UTF-8') ?>">
