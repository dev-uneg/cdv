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
  <title>Pipedrive Owner IDs | CDV Admin</title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/output.css">
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $base; ?>/_assets/lucide-loader.js?v=2" data-lucide-sprite="<?php echo $base; ?>/_assets/lucide-sprite.svg?v=20260409"></script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <?php require __DIR__ . '/partials/sidebar.php'; ?>
  <main class="w-full px-4 py-10 lg:pl-[17rem] lg:pr-6">
    <?php
      $headerBadgeIcon = 'plug-zap';
      $headerBadgeText = 'Integraciones · CRM';
      $headerBadgeClass = 'bg-indigo-100 text-indigo-800';
      $headerTitleIcon = 'id-card';
      $headerTitleIconClass = 'h-7 w-7 text-indigo-700';
      $headerTitle = 'Pipedrive Owner IDs';
      $headerSubtitleHtml = 'Consulta usuarios activos de Pipedrive para saber qué <code>owner_id</code> usar al crear leads.';
      $headerActionsHtml = '<a href="' . htmlspecialchars((string) $base, ENT_QUOTES, 'UTF-8') . '/admin/panel" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100"><i data-lucide="layout-grid" class="h-4 w-4"></i>Panel</a><button id="reloadBtn" type="button" class="inline-flex items-center gap-2 rounded-lg bg-indigo-700 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-800"><i data-lucide="refresh-cw" class="h-4 w-4"></i>Cargar usuarios</button>';
      require __DIR__ . '/partials/page-header.php';
    ?>

    <section class="mt-6 rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
      <p id="status" class="text-sm text-slate-600">Cargando usuarios de Pipedrive...</p>
      <div class="mt-4 overflow-x-auto">
        <table class="min-w-full divide-y divide-slate-200 text-sm">
          <thead class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">
            <tr>
              <th class="px-4 py-3">Owner ID</th>
              <th class="px-4 py-3">Nombre</th>
              <th class="px-4 py-3">Email</th>
              <th class="px-4 py-3">Activo</th>
              <th class="px-4 py-3">Acción</th>
            </tr>
          </thead>
          <tbody id="usersBody" class="divide-y divide-slate-100">
            <tr>
              <td colspan="5" class="px-4 py-6 text-center text-slate-500">Sin datos aún.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <script>
    (() => {
      const endpoint = <?php echo json_encode($base . '/admin/api/pipedrive-users', JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
      const status = document.getElementById('status');
      const usersBody = document.getElementById('usersBody');
      const reloadBtn = document.getElementById('reloadBtn');

      const setStatus = (text, isError = false) => {
        status.textContent = text;
        status.className = isError
          ? 'text-sm text-rose-700'
          : 'text-sm text-slate-600';
      };

      const renderRows = (users) => {
        if (!Array.isArray(users) || users.length === 0) {
          usersBody.innerHTML = '<tr><td colspan="5" class="px-4 py-6 text-center text-slate-500">No se encontraron usuarios.</td></tr>';
          return;
        }

        usersBody.innerHTML = users.map((user) => {
          const ownerId = Number(user.owner_id || 0);
          const name = String(user.name || '').replace(/&/g, '&amp;').replace(/</g, '&lt;');
          const email = String(user.email || '').replace(/&/g, '&amp;').replace(/</g, '&lt;');
          const active = user.active ? 'Sí' : 'No';
          const badgeClass = user.active
            ? 'bg-emerald-50 text-emerald-700'
            : 'bg-slate-100 text-slate-600';
          return [
            '<tr>',
            '<td class="px-4 py-3 font-mono font-semibold text-slate-900">' + ownerId + '</td>',
            '<td class="px-4 py-3 text-slate-900">' + name + '</td>',
            '<td class="px-4 py-3 text-slate-700">' + email + '</td>',
            '<td class="px-4 py-3"><span class="inline-flex rounded-full px-2 py-0.5 text-xs font-semibold ' + badgeClass + '">' + active + '</span></td>',
            '<td class="px-4 py-3">',
            '<button type="button" data-owner-id="' + ownerId + '" class="copy-owner inline-flex items-center rounded-md border border-slate-200 bg-white px-2 py-1 text-xs font-semibold text-slate-700 hover:border-slate-300">Copiar ID</button>',
            '</td>',
            '</tr>'
          ].join('');
        }).join('');
      };

      const loadUsers = async () => {
        setStatus('Consultando usuarios de Pipedrive...');
        reloadBtn.disabled = true;
        try {
          const response = await fetch(endpoint, { credentials: 'same-origin' });
          const json = await response.json();
          if (!response.ok || !json.success) {
            throw new Error(json.message || 'No se pudieron cargar usuarios.');
          }
          renderRows(json.users || []);
          setStatus('Usuarios cargados: ' + Number(json.count || 0) + '.');
        } catch (error) {
          usersBody.innerHTML = '<tr><td colspan="5" class="px-4 py-6 text-center text-rose-700">Error al consultar Pipedrive.</td></tr>';
          setStatus(String(error && error.message ? error.message : 'Error inesperado'), true);
        } finally {
          reloadBtn.disabled = false;
        }
      };

      reloadBtn.addEventListener('click', loadUsers);
      loadUsers();

      usersBody.addEventListener('click', async (event) => {
        const target = event.target;
        if (!(target instanceof HTMLElement)) return;
        const btn = target.closest('.copy-owner');
        if (!(btn instanceof HTMLButtonElement)) return;
        const ownerId = btn.getAttribute('data-owner-id') || '';
        if (ownerId === '') return;

        try {
          await navigator.clipboard.writeText(ownerId);
          const originalText = btn.textContent;
          btn.textContent = 'Copiado';
          window.setTimeout(() => {
            btn.textContent = originalText;
          }, 900);
        } catch (e) {
          setStatus('No se pudo copiar al portapapeles. ID: ' + ownerId, true);
        }
      });
    })();
  </script>
</body>
</html>
