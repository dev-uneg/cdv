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
  <title>Detalle Contacto | Admin CDV</title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/output.css">
  <script defer src="<?php echo $base; ?>/_assets/lucide-loader.js?v=2" data-lucide-sprite="<?php echo $base; ?>/_assets/lucide-sprite.svg"></script>
  <style>
    body { font-family: "Figtree", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <main class="mx-auto w-full max-w-4xl px-4 py-10">
    <div class="mb-6 flex items-center justify-between">
      <h1 class="text-2xl font-semibold text-slate-900">Detalle de Contacto</h1>
      <a class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300" href="<?php echo $base; ?>/admin/contacto">
        <i data-lucide="arrow-left" class="h-4 w-4"></i> Volver
      </a>
    </div>

    <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <dl class="grid gap-4 md:grid-cols-2">
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Fecha</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars(format_mx_datetime((string) ($row['created_at'] ?? '')), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Nombre</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['full_name'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Email</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['email'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Teléfono</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['phone'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Interés</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['interest'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Estado</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['status'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Canal</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['channel'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Medio</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['medium'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div class="md:col-span-2"><dt class="text-xs uppercase tracking-wide text-slate-500">Source</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['source'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div class="md:col-span-2"><dt class="text-xs uppercase tracking-wide text-slate-500">Mensaje</dt><dd class="mt-1 whitespace-pre-wrap text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['message'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div class="md:col-span-2"><dt class="text-xs uppercase tracking-wide text-slate-500">Error</dt><dd class="mt-1 whitespace-pre-wrap text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['error_message'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
      </dl>
    </section>
  </main>
</body>
</html>
