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
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $base; ?>/_assets/lucide-loader.js?v=2" data-lucide-sprite="<?php echo $base; ?>/_assets/lucide-sprite.svg?v=20260409"></script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <?php require __DIR__ . '/partials/sidebar.php'; ?>
  <main class="w-full px-4 py-10 lg:pl-[17rem] lg:pr-6">
    <?php
      $headerBadgeIcon = 'user-round-search';
      $headerBadgeText = 'Detalle · Contacto';
      $headerBadgeClass = 'bg-emerald-100 text-emerald-800';
      $headerTitleIcon = 'file-user';
      $headerTitleIconClass = 'h-7 w-7 text-emerald-700';
      $headerTitle = 'Detalle de Contacto';
      $headerSubtitle = 'Consulta completa del lead seleccionado.';
      $headerActionsHtml = '<a class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100" href="' . htmlspecialchars($base, ENT_QUOTES, 'UTF-8') . '/admin/contacto"><i data-lucide="arrow-left" class="h-4 w-4"></i>Volver</a>';
      require __DIR__ . '/partials/page-header.php';
    ?>

    <section class="mt-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
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
        <div class="md:col-span-2"><dt class="text-xs uppercase tracking-wide text-slate-500">Página origen</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['page_path'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div class="md:col-span-2"><dt class="text-xs uppercase tracking-wide text-slate-500">Mensaje</dt><dd class="mt-1 whitespace-pre-wrap text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['message'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div class="md:col-span-2"><dt class="text-xs uppercase tracking-wide text-slate-500">Error</dt><dd class="mt-1 whitespace-pre-wrap text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['error_message'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
      </dl>
    </section>
  </main>
</body>
</html>
