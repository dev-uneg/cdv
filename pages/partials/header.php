<?php
$pageTitle = $pageTitle ?? 'Colegio del Valle';
$activePage = $activePage ?? '';
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
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    html, body { font-family: "Figtree", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <header class="border-b border-slate-200 bg-white">
    <div class="max-w-5xl mx-auto px-6 py-5 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
      <div class="text-xl font-semibold tracking-tight">Colegio del Valle</div>
      <nav class="flex gap-6 text-sm">
        <a class="<?= $navClass('home') ?>" href="/">Inicio</a>
        <a class="<?= $navClass('nosotros') ?>" href="/nosotros">Nosotros</a>
        <a class="<?= $navClass('servicios') ?>" href="/servicios">Servicios</a>
        <a class="<?= $navClass('contacto') ?>" href="/contacto">Contacto</a>
      </nav>
    </div>
  </header>
  <main class="max-w-5xl mx-auto px-6 py-16">
