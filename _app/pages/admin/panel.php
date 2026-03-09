<?php
declare(strict_types=1);
$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/');
$base = $base === '.' ? '' : $base;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel Admin | CDV</title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/output.css">
  <script defer src="<?php echo $base; ?>/_assets/lucide-loader.js?v=2" data-lucide-sprite="<?php echo $base; ?>/_assets/lucide-sprite.svg"></script>
  <style>
    body { font-family: "Figtree", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <main class="mx-auto w-full max-w-7xl px-4 py-10">
    <section class="flex flex-wrap items-center justify-between gap-4">
      <div>
        <h1 class="text-3xl font-semibold text-slate-900">Panel de Formularios</h1>
        <p class="mt-1 text-sm text-slate-500">Administra solo Contacto y Buzón del Rector.</p>
      </div>
      <a class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300" href="<?php echo $base; ?>/admin/logout">
        <i data-lucide="log-out" class="h-4 w-4"></i>
        Salir
      </a>
    </section>

    <?php if (!empty($dbError)): ?>
      <section class="mt-6 rounded-2xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-800">
        <?php echo htmlspecialchars((string) $dbError, ENT_QUOTES, 'UTF-8'); ?>
      </section>
    <?php endif; ?>

    <section class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-2">
      <a href="<?php echo $base; ?>/admin/contacto" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-600 text-white">
          <i data-lucide="users" class="h-6 w-6"></i>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-slate-900">Contacto</h2>
        <p class="mt-1 text-sm text-slate-600">Registros enviados desde el formulario de contacto.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo (int) $contactoCount; ?></p>
      </a>

      <a href="<?php echo $base; ?>/admin/buzon-rector" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-700 text-white">
          <i data-lucide="mailbox" class="h-6 w-6"></i>
        </div>
        <h2 class="mt-4 text-lg font-semibold text-slate-900">Buzón del Rector</h2>
        <p class="mt-1 text-sm text-slate-600">Mensajes enviados desde el formulario de buzón.</p>
        <p class="mt-4 text-2xl font-bold text-slate-800"><?php echo (int) $buzonCount; ?></p>
      </a>
    </section>
  </main>
</body>
</html>
