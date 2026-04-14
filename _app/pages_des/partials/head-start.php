<?php
$baseUrl = isset($baseUrl) ? (string) $baseUrl : (defined('BASE_URL') ? BASE_URL : '');
$pageTitle = isset($pageTitle) && $pageTitle !== '' ? (string) $pageTitle : 'Colegio del Valle';
$enableAos = isset($enableAos) ? (bool) $enableAos : false;
$assetsPath = dirname(__DIR__, 3) . '/_assets';
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
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="icon" type="image/png" href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>/_imgs/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Questrial&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>/_assets/output.css" />
  <?php if ($enableAos): ?>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <?php endif; ?>
  <script
    defer
    src="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>/_assets/lucide-loader.js?v=<?= htmlspecialchars($lucideLoaderVersion, ENT_QUOTES, 'UTF-8') ?>"
    data-lucide-sprite="<?= htmlspecialchars($baseUrl . '/_assets/lucide-sprite.svg?v=' . $lucideSpriteVersion, ENT_QUOTES, 'UTF-8') ?>"
  ></script>
  <?php if ($enableAos): ?>
  <script defer src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <?php endif; ?>
  <style>
    html,
    body {
      font-family: "Questrial", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif;
    }
    .menu-quick-btn {
      display: inline-flex;
      width: fit-content;
      align-items: center;
      gap: 0.45rem;
      border-radius: 9999px;
      padding: 0.5rem 0.95rem;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.11em;
      text-transform: uppercase;
      color: #fff;
      transition: filter 0.2s ease, transform 0.2s ease;
    }
    .menu-quick-btn:hover {
      filter: brightness(1.06);
      transform: translateY(-1px);
    }
    .menu-quick-btn:focus-visible {
      outline: 2px solid rgba(255, 255, 255, 0.7);
      outline-offset: 2px;
    }
    .menu-quick-btn-tienda {
      background: linear-gradient(135deg, #2563eb 0%, #345995 100%);
    }
    .menu-quick-btn-quejas {
      background: linear-gradient(135deg, #d2a226 0%, #b7861d 100%);
    }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900 flex flex-col">
<main class="flex-1">
