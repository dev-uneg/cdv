<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reportes | CDV</title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/output.css">
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $base; ?>/_assets/lucide-loader.js?v=3" data-lucide-sprite="<?php echo $base; ?>/_assets/lucide-sprite.svg"></script>
  <style>
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $base; ?>/_assets/fonts/Figtree-400.ttf') format('truetype');
      font-weight: 400;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $base; ?>/_assets/fonts/Figtree-500.ttf') format('truetype');
      font-weight: 500;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $base; ?>/_assets/fonts/Figtree-600.ttf') format('truetype');
      font-weight: 600;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: 'Figtree';
      src: url('<?php echo $base; ?>/_assets/fonts/Figtree-700.ttf') format('truetype');
      font-weight: 700;
      font-style: normal;
      font-display: swap;
    }
    body { font-family: 'Figtree', ui-sans-serif, system-ui, sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <main class="mx-auto w-full max-w-6xl px-4 py-10">
    <section class="flex flex-wrap items-center justify-between gap-3">
      <div>
        <h1 class="text-3xl font-semibold text-[#0b2c65]">Reportes</h1>
        <p class="mt-1 text-sm text-slate-500">Listado de reportes mensuales de performance web y CRO (CDV).</p>
      </div>
      <div class="flex items-center gap-2">
        <a href="<?php echo $base; ?>/admin/panel" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">
          <i data-lucide="layout-grid" class="h-4 w-4"></i>
          Panel
        </a>
        <a href="<?php echo $base; ?>/admin/logout" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">
          <i data-lucide="log-out" class="h-4 w-4"></i>
          Salir
        </a>
      </div>
    </section>

    <?php if ($dbError !== ''): ?>
      <section class="mt-6 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
        <?php echo htmlspecialchars($dbError, ENT_QUOTES, 'UTF-8'); ?>
      </section>
    <?php endif; ?>

    <section class="mt-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
      <div class="border-b border-slate-200 px-5 py-4">
        <h2 class="text-2xl font-semibold text-slate-800">Histórico de reportes</h2>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full text-left text-sm">
          <thead class="bg-slate-100 text-slate-700">
            <tr>
              <th class="px-4 py-3 font-semibold">Reporte</th>
              <th class="px-4 py-3 font-semibold">Periodo</th>
              <th class="px-4 py-3 font-semibold">Leads</th>
              <th class="px-4 py-3 font-semibold">Page views</th>
              <th class="px-4 py-3 font-semibold">Estado</th>
              <th class="px-4 py-3 font-semibold">Acción</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">
            <?php if ($rows === []): ?>
              <tr><td colspan="6" class="px-4 py-4 text-slate-500">Aún no hay meses con datos para mostrar reportes.</td></tr>
            <?php endif; ?>
            <?php foreach ($rows as $row): ?>
              <tr>
                <td class="px-4 py-3 font-medium text-slate-800"><?php echo htmlspecialchars((string) $row['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 text-slate-700"><?php echo htmlspecialchars((string) $row['period'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 font-semibold text-slate-900"><?php echo (int) $row['leads']; ?></td>
                <td class="px-4 py-3 font-semibold text-slate-900"><?php echo (int) ($row['page_views'] ?? 0); ?></td>
                <td class="px-4 py-3">
                  <?php if ((string) $row['status'] === 'En progreso'): ?>
                    <span class="inline-flex rounded-full border border-amber-200 bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-800">En progreso</span>
                  <?php else: ?>
                    <span class="inline-flex rounded-full border border-emerald-200 bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">Cerrado</span>
                  <?php endif; ?>
                </td>
                <td class="px-4 py-3">
                  <div class="flex flex-wrap items-center gap-2">
                    <a href="<?php echo $base; ?>/admin/reports/cdv-mensual?ym=<?php echo rawurlencode((string) $row['ym']); ?>" class="inline-flex items-center gap-2 rounded-lg bg-[#0b2c65] px-3 py-2 text-xs font-semibold text-white hover:bg-[#092653]">
                      <i data-lucide="file-text" class="h-4 w-4"></i>
                      Performance
                    </a>
                    <a href="<?php echo $base; ?>/admin/reports/engagement-mensual?ym=<?php echo rawurlencode((string) $row['ym']); ?>" class="inline-flex items-center gap-2 rounded-lg bg-teal-700 px-3 py-2 text-xs font-semibold text-white hover:bg-teal-800">
                      <i data-lucide="activity" class="h-4 w-4"></i>
                      Engagement
                    </a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>
</body>
</html>
