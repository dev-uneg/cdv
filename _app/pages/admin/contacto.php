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
  <title>Contacto | Admin CDV</title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/output.css">
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $base; ?>/_assets/lucide-loader.js?v=2" data-lucide-sprite="<?php echo $base; ?>/_assets/lucide-sprite.svg"></script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <main class="mx-auto w-full max-w-7xl px-4 py-10">
    <section class="flex flex-wrap items-center justify-between gap-4">
      <div>
        <h1 class="text-2xl font-semibold text-slate-900">Formulario de Contacto</h1>
        <p class="mt-1 text-sm text-slate-500">Total: <?php echo (int) $total; ?> registros</p>
      </div>
      <div class="flex flex-wrap items-center gap-3">
        <form method="get" action="<?php echo $base; ?>/admin/contacto" class="flex flex-wrap items-center gap-2 text-sm text-slate-600">
          <div class="flex flex-wrap items-center gap-2 rounded-xl border border-slate-200 bg-white px-3 py-2">
            <label class="text-xs font-semibold text-slate-500">Desde</label>
            <input type="date" name="from" value="<?php echo htmlspecialchars($dateFrom, ENT_QUOTES, 'UTF-8'); ?>" class="text-xs text-slate-700 outline-none">
            <span class="text-slate-300">|</span>
            <label class="text-xs font-semibold text-slate-500">Hasta</label>
            <input type="date" name="to" value="<?php echo htmlspecialchars($dateTo, ENT_QUOTES, 'UTF-8'); ?>" class="text-xs text-slate-700 outline-none">
          </div>
          <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-slate-900 p-2 text-white hover:bg-slate-800" aria-label="Filtrar">
            <i data-lucide="filter" class="h-4 w-4"></i>
          </button>
          <input type="hidden" name="per_page" value="<?php echo (int) $perPage; ?>">
          <input type="hidden" name="page" value="1">
        </form>
        <a class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white p-2 text-slate-600 hover:border-slate-300 <?php echo $hasDateFilter ? '' : 'pointer-events-none opacity-40'; ?>" href="<?php echo $base; ?>/admin/contacto/export?from=<?php echo urlencode($dateFrom); ?>&to=<?php echo urlencode($dateTo); ?>" aria-label="Exportar CSV">
          <i data-lucide="download" class="h-4 w-4"></i>
        </a>
        <a class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300" href="<?php echo $base; ?>/admin/panel">
          <i data-lucide="layout-grid" class="h-4 w-4"></i> Panel
        </a>
        <a class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white p-2 text-slate-600 hover:border-slate-300" href="<?php echo $base; ?>/admin/logout" aria-label="Salir">
          <i data-lucide="log-out" class="h-4 w-4"></i>
        </a>
      </div>
    </section>

    <?php if ($dbError !== ''): ?>
      <section class="mt-6 rounded-2xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-800">
        <?php echo htmlspecialchars($dbError, ENT_QUOTES, 'UTF-8'); ?>
      </section>
    <?php endif; ?>

    <section class="mt-6 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm" data-bulk-scope="contacto-table">
      <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-200 px-4 py-3">
        <form method="post" action="<?php echo $base; ?>/admin/contacto/delete" data-bulk-delete-form data-checkbox-scope="contacto-table" class="flex flex-wrap items-center gap-3">
          <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($csrf, ENT_QUOTES, 'UTF-8'); ?>">
          <span data-selected-ids></span>
          <label class="inline-flex items-center gap-2 text-sm text-slate-700">
            <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-slate-900 focus:ring-slate-900" data-select-all>
            Seleccionar todo
          </label>
          <span class="text-sm text-slate-600">Seleccionados: <strong data-selected-count>0</strong></span>
          <button type="submit" class="inline-flex items-center gap-2 rounded-lg border border-rose-200 bg-rose-50 px-3 py-2 text-sm font-semibold text-rose-700 hover:border-rose-300 disabled:cursor-not-allowed disabled:opacity-50" data-bulk-delete-button disabled>
            <i data-lucide="trash-2" class="h-4 w-4"></i> Borrar seleccionados
          </button>
        </form>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full text-left text-sm">
          <thead class="bg-slate-100 text-slate-600">
            <tr>
              <th class="px-4 py-3 font-semibold w-10"><span class="sr-only">Seleccionar</span></th>
              <th class="px-4 py-3 font-semibold">Fecha</th>
              <th class="px-4 py-3 font-semibold">Nombre</th>
              <th class="px-4 py-3 font-semibold">Email</th>
              <th class="px-4 py-3 font-semibold">Teléfono</th>
              <th class="px-4 py-3 font-semibold">Interés</th>
              <th class="px-4 py-3 font-semibold">Estado</th>
              <th class="px-4 py-3 font-semibold">Acciones</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">
            <?php if ($rows === []): ?>
              <tr><td colspan="8" class="px-4 py-6 text-center text-slate-500">Sin registros todavía.</td></tr>
            <?php endif; ?>
            <?php foreach ($rows as $row): ?>
              <tr class="hover:bg-slate-50">
                <td class="px-4 py-3">
                  <input type="checkbox" value="<?php echo (int) $row['id']; ?>" class="h-4 w-4 rounded border-slate-300 text-slate-900 focus:ring-slate-900" data-row-checkbox>
                </td>
                <td class="px-4 py-3 text-slate-500"><?php echo htmlspecialchars(format_mx_datetime((string) ($row['created_at'] ?? '')), ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 font-medium text-slate-800"><?php echo htmlspecialchars((string) ($row['full_name'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 text-slate-600"><?php echo htmlspecialchars((string) ($row['email'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 text-slate-600"><?php echo htmlspecialchars((string) ($row['phone'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3 text-slate-600"><?php echo htmlspecialchars((string) ($row['interest'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="px-4 py-3">
                  <?php
                  $status = (string) ($row['status'] ?? '');
                  $statusLabel = $status === 'pipedrive_ok' ? 'Pipedrive OK' : ($status === 'pipedrive_failed' ? 'Pipedrive error' : 'Recibido');
                  $statusClass = $status === 'pipedrive_ok' ? 'bg-emerald-50 text-emerald-700' : ($status === 'pipedrive_failed' ? 'bg-rose-50 text-rose-700' : 'bg-slate-100 text-slate-600');
                  ?>
                  <span class="inline-flex rounded-full px-3 py-1 text-xs font-semibold <?php echo $statusClass; ?>">
                    <?php echo $statusLabel; ?>
                  </span>
                </td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <a class="inline-flex items-center justify-center rounded-md border border-slate-200 bg-white p-2 text-slate-600 hover:border-slate-300" href="<?php echo $base; ?>/admin/contacto/show?id=<?php echo (int) $row['id']; ?>" aria-label="Ver">
                      <i data-lucide="eye" class="h-4 w-4"></i>
                    </a>
                    <form method="post" action="<?php echo $base; ?>/admin/contacto/delete" onsubmit="return confirm('¿Eliminar este registro?');">
                      <input type="hidden" name="id" value="<?php echo (int) $row['id']; ?>">
                      <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($csrf, ENT_QUOTES, 'UTF-8'); ?>">
                      <button class="inline-flex items-center justify-center rounded-md border border-rose-200 bg-rose-50 p-2 text-rose-600 hover:border-rose-300" aria-label="Eliminar">
                        <i data-lucide="trash-2" class="h-4 w-4"></i>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>

    <section class="mt-6 flex flex-wrap items-center justify-between gap-3 text-sm text-slate-600">
      <form method="get" action="<?php echo $base; ?>/admin/contacto" class="flex items-center gap-2">
        <label for="per_page" class="font-medium">Ver</label>
        <select id="per_page" name="per_page" class="rounded-lg border border-slate-200 bg-white px-3 py-2" onchange="this.form.submit()">
          <?php foreach ($perPageOptions as $opt): ?>
            <option value="<?php echo $opt; ?>" <?php echo $opt === $perPage ? 'selected' : ''; ?>><?php echo $opt; ?></option>
          <?php endforeach; ?>
        </select>
        <?php if ($dateFrom !== ''): ?>
          <input type="hidden" name="from" value="<?php echo htmlspecialchars($dateFrom, ENT_QUOTES, 'UTF-8'); ?>">
        <?php endif; ?>
        <?php if ($dateTo !== ''): ?>
          <input type="hidden" name="to" value="<?php echo htmlspecialchars($dateTo, ENT_QUOTES, 'UTF-8'); ?>">
        <?php endif; ?>
        <input type="hidden" name="page" value="1">
      </form>
      <div>Página <?php echo (int) $page; ?> de <?php echo (int) $totalPages; ?></div>
      <div class="flex items-center gap-2">
        <?php if ($page > 1): ?>
          <a class="rounded-lg border border-slate-200 bg-white px-3 py-1.5 font-semibold hover:border-slate-300" href="<?php echo $base; ?>/admin/contacto?page=<?php echo $page - 1; ?>&per_page=<?php echo $perPage; ?>&from=<?php echo urlencode($dateFrom); ?>&to=<?php echo urlencode($dateTo); ?>">Anterior</a>
        <?php endif; ?>
        <?php if ($page < $totalPages): ?>
          <a class="rounded-lg border border-slate-200 bg-white px-3 py-1.5 font-semibold hover:border-slate-300" href="<?php echo $base; ?>/admin/contacto?page=<?php echo $page + 1; ?>&per_page=<?php echo $perPage; ?>&from=<?php echo urlencode($dateFrom); ?>&to=<?php echo urlencode($dateTo); ?>">Siguiente</a>
        <?php endif; ?>
      </div>
    </section>
  </main>
  <script src="<?php echo $base; ?>/_assets/admin-bulk-delete.js"></script>
</body>
</html>
