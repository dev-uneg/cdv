<?php
declare(strict_types=1);

$base = isset($base) ? (string) $base : rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/');
$base = $base === '.' ? '' : $base;
$requestPath = (string) parse_url((string) ($_SERVER['REQUEST_URI'] ?? ''), PHP_URL_PATH);

$adminNavItems = [
    ['href' => '/admin/panel', 'label' => 'Panel', 'icon' => 'layout-grid', 'prefix' => '/admin/panel'],
    ['href' => '/admin/contacto', 'label' => 'Contacto', 'icon' => 'users', 'prefix' => '/admin/contacto'],
    ['href' => '/admin/buzon-rector', 'label' => 'Buzón', 'icon' => 'mailbox', 'prefix' => '/admin/buzon-rector'],
    ['href' => '/admin/egresados', 'label' => 'Egresados', 'icon' => 'graduation-cap', 'prefix' => '/admin/egresados'],
    ['href' => '/admin/reports', 'label' => 'Reportes', 'icon' => 'file-text', 'prefix' => '/admin/reports'],
    ['href' => '/admin/attacks/report-fecha', 'label' => 'Ataques', 'icon' => 'shield-alert', 'prefix' => '/admin/attacks'],
    ['href' => '/admin/pipedrive-owner-ids', 'label' => 'Owner IDs', 'icon' => 'id-card', 'prefix' => '/admin/pipedrive-owner-ids'],
];
?>
<aside class="fixed inset-y-0 left-0 z-40 hidden w-64 border-r border-slate-200 bg-white lg:block">
  <div class="flex h-full flex-col">
    <div class="border-b border-slate-200 px-5 py-4">
      <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">CDV</p>
      <h2 class="mt-1 text-lg font-semibold text-slate-900">Admin</h2>
    </div>
    <nav class="flex-1 space-y-1 px-3 py-4">
      <?php foreach ($adminNavItems as $item): ?>
        <?php
          $isActive = str_starts_with($requestPath, (string) $item['prefix']);
          $itemClass = $isActive
              ? 'border-slate-300 bg-slate-100 text-slate-900'
              : 'border-transparent text-slate-600 hover:border-slate-200 hover:bg-slate-50 hover:text-slate-900';
        ?>
        <a href="<?php echo htmlspecialchars($base . (string) $item['href'], ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center gap-2 rounded-lg border px-3 py-2 text-sm font-semibold <?php echo $itemClass; ?>">
          <i data-lucide="<?php echo htmlspecialchars((string) $item['icon'], ENT_QUOTES, 'UTF-8'); ?>" class="h-4 w-4"></i>
          <?php echo htmlspecialchars((string) $item['label'], ENT_QUOTES, 'UTF-8'); ?>
        </a>
      <?php endforeach; ?>
    </nav>
    <div class="border-t border-slate-200 p-3">
      <a href="<?php echo htmlspecialchars($base . '/admin/logout', ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50">
        <i data-lucide="log-out" class="h-4 w-4"></i>
        Salir
      </a>
    </div>
  </div>
</aside>
