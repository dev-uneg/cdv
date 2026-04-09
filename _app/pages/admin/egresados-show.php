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
  <title>Detalle Egresado | Admin CDV</title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/output.css">
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $base; ?>/_assets/lucide-loader.js?v=2" data-lucide-sprite="<?php echo $base; ?>/_assets/lucide-sprite.svg?v=20260409"></script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <?php require __DIR__ . '/partials/sidebar.php'; ?>
  <main class="w-full px-4 py-10 lg:pl-[17rem] lg:pr-6">
    <?php
      $headerBadgeIcon = 'graduation-cap';
      $headerBadgeText = 'Detalle · Egresados';
      $headerBadgeClass = 'bg-indigo-100 text-indigo-800';
      $headerTitleIcon = 'file-user';
      $headerTitleIconClass = 'h-7 w-7 text-indigo-700';
      $headerTitle = 'Detalle de Egresado';
      $headerSubtitle = 'Consulta completa del registro seleccionado.';
      $headerActionsHtml = '<a class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100" href="' . htmlspecialchars($base, ENT_QUOTES, 'UTF-8') . '/admin/egresados"><i data-lucide="arrow-left" class="h-4 w-4"></i>Volver</a>';
      require __DIR__ . '/partials/page-header.php';
    ?>

    <section class="mt-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
      <dl class="grid gap-4 md:grid-cols-2">
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Fecha</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars(format_mx_datetime((string) ($row['created_at'] ?? '')), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Nombre</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars(trim((string) (($row['nombre'] ?? '') . ' ' . ($row['apellido_paterno'] ?? '') . ' ' . ($row['apellido_materno'] ?? ''))), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Correo</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['email'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Teléfono</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['telefono'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Generación</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['generacion'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Nivel de egreso</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['nivel_egreso'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">¿Trabaja actualmente?</dt><dd class="mt-1 text-sm text-slate-800"><?php echo ((int) ($row['trabaja_actualmente'] ?? 0) === 1) ? 'Sí' : 'No'; ?></dd></div>
        <div><dt class="text-xs uppercase tracking-wide text-slate-500">Empresa</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['empresa'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
        <div class="md:col-span-2"><dt class="text-xs uppercase tracking-wide text-slate-500">Cargo actual</dt><dd class="mt-1 text-sm text-slate-800"><?php echo htmlspecialchars((string) ($row['cargo_actual'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></dd></div>
      </dl>
    </section>
  </main>
</body>
</html>
