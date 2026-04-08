<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reportes de Ataques | CDV</title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/output.css">
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $base; ?>/_assets/lucide-loader.js?v=2" data-lucide-sprite="<?php echo $base; ?>/_assets/lucide-sprite.svg"></script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <main class="mx-auto w-full max-w-7xl px-4 py-10">
    <section class="flex flex-wrap items-start justify-between gap-4 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
      <div>
        <p class="inline-flex items-center gap-1.5 rounded-full bg-rose-100 px-3 py-1 text-xs font-semibold text-rose-800">
          <i data-lucide="shield-alert" class="h-3.5 w-3.5"></i>
          Seguridad · Reportes Estáticos
        </p>
        <h1 class="mt-3 flex items-center gap-2 text-3xl font-semibold text-slate-900">
          <i data-lucide="file-warning" class="h-7 w-7 text-rose-700"></i>
          Reportes de Ataques
        </h1>
        <p class="mt-1 text-sm text-slate-600">Listado de reportes guardados en <code>_app/pages/admin/attacks</code>.</p>
      </div>
      <a href="<?php echo $base; ?>/admin/panel" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">
        <i data-lucide="layout-dashboard" class="h-4 w-4"></i>
        Panel
      </a>
    </section>

    <section class="mt-8">
      <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4">
          <h2 class="text-lg font-semibold text-slate-800">Tabla de reportes</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-700">
              <tr>
                <th class="px-4 py-3 font-semibold"><span class="inline-flex items-center gap-1"><i data-lucide="file-code-2" class="h-4 w-4"></i>Archivo</span></th>
                <th class="px-4 py-3 font-semibold"><span class="inline-flex items-center gap-1"><i data-lucide="type" class="h-4 w-4"></i>Título</span></th>
                <th class="px-4 py-3 font-semibold"><span class="inline-flex items-center gap-1"><i data-lucide="clock-3" class="h-4 w-4"></i>Actualizado</span></th>
                <th class="px-4 py-3 font-semibold"><span class="inline-flex items-center gap-1"><i data-lucide="mouse-pointer-click" class="h-4 w-4"></i>Acción</span></th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <?php if ($availableReports === []): ?>
                <tr><td colspan="4" class="px-4 py-4 text-slate-500">No hay reportes estáticos todavía.</td></tr>
              <?php endif; ?>
              <?php foreach (array_reverse($availableReports) as $report): ?>
                <tr>
                  <td class="px-4 py-3 text-slate-800">
                    <span class="inline-flex items-center gap-2">
                      <i data-lucide="file-text" class="h-4 w-4 text-slate-400"></i>
                      <?php echo htmlspecialchars((string) ($report['file'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>
                    </span>
                  </td>
                  <td class="px-4 py-3 text-slate-700"><?php echo htmlspecialchars((string) ($report['title'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="whitespace-nowrap px-4 py-3 text-slate-500"><?php echo htmlspecialchars((string) ($report['updated_at'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="px-4 py-3">
                    <a href="<?php echo htmlspecialchars((string) ($report['url'] ?? '#'), ENT_QUOTES, 'UTF-8'); ?>" class="inline-flex items-center gap-1.5 rounded-md bg-slate-900 px-2.5 py-1.5 text-xs font-semibold text-white hover:bg-slate-800">
                      <i data-lucide="external-link" class="h-3.5 w-3.5"></i>
                      Abrir reporte
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </article>
    </section>
  </main>
</body>
</html>
