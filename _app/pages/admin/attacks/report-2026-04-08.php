<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reporte de Seguridad de Endpoints | 08 Abril 2026</title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/output.css">
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $base; ?>/_assets/lucide-loader.js?v=2" data-lucide-sprite="<?php echo $base; ?>/_assets/lucide-sprite.svg?v=20260409"></script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
  <?php require __DIR__ . '/../partials/sidebar.php'; ?>
  <main class="w-full px-4 py-10 lg:pl-[17rem] lg:pr-6">
    <?php
      $headerBadgeIcon = 'shield-check';
      $headerBadgeText = 'Reporte Estático · Seguridad Informática';
      $headerBadgeClass = 'bg-sky-100 text-sky-800';
      $headerTitleIcon = 'shield-check';
      $headerTitleIconClass = 'h-7 w-7 text-sky-700';
      $headerTitle = 'Revisión General de Endpoints (Bootstrap)';
      $headerSubtitle = 'Fecha: 08 de abril de 2026. Documento estático para lectura ejecutiva: no consulta BD ni reemplaza pruebas de seguridad activas.';
      $headerActionsHtml = '<a href="' . htmlspecialchars($base, ENT_QUOTES, 'UTF-8') . '/admin/attacks/report-fecha" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100"><i data-lucide="arrow-left" class="h-4 w-4"></i>Volver a reportes</a>';
      require __DIR__ . '/../partials/page-header.php';
    ?>

    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-2">
      <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">De que va este reporte</h2>
        <p class="mt-3 text-sm leading-6 text-slate-700">
          Este reporte resume los endpoints mas sensibles definidos en <code>_app/bootstrap.php</code>, con enfoque de seguridad
          practica: para que sirve cada ruta y cual es su oportunidad de mejora principal.
        </p>
      </article>
      <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Cuando si / cuando no</h2>
        <ul class="mt-3 space-y-2 text-sm text-slate-700">
          <li class="flex items-start gap-2"><i data-lucide="check-circle-2" class="mt-0.5 h-4 w-4 text-emerald-600"></i><span><strong>Si:</strong> cuando necesitas panorama rapido de riesgo funcional por endpoint.</span></li>
          <li class="flex items-start gap-2"><i data-lucide="x-circle" class="mt-0.5 h-4 w-4 text-rose-600"></i><span><strong>No:</strong> cuando necesitas evidencia tecnica profunda (pentest, logs forenses o escaneo en vivo).</span></li>
        </ul>
      </article>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-6">
      <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4">
          <h2 class="text-lg font-semibold text-slate-800">Inventario completo · Endpoints activos (uso actual)</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-700">
              <tr>
                <th class="px-4 py-3 font-semibold">Endpoint</th>
                <th class="px-4 py-3 font-semibold">Metodo</th>
                <th class="px-4 py-3 font-semibold">Estado</th>
                <th class="px-4 py-3 font-semibold">Para que sirve</th>
                <th class="px-4 py-3 font-semibold">Area de oportunidad</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <tr><td class="px-4 py-3 font-medium">/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Home pública.</td><td class="px-4 py-3">Aplicar headers de seguridad y caché consistente.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/nosotros/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Página institucional.</td><td class="px-4 py-3">Verificar enlaces externos y política CSP.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/servicios</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Sección de servicios.</td><td class="px-4 py-3">Validar recursos embebidos de terceros.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/lp-general</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Landing principal.</td><td class="px-4 py-3">Revisar integridad de scripts de marketing.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/lp-general/gracias</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Thank-you de landing.</td><td class="px-4 py-3">Evitar exposición de datos sensibles en query params.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/contacto/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Formulario de contacto.</td><td class="px-4 py-3">Mantener anti-spam visible y validación frontend/backend.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/aviso-de-privacidad/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Aviso de privacidad.</td><td class="px-4 py-3">Versionado de documento y fecha de actualización visible.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/gracias</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Página genérica de agradecimiento.</td><td class="px-4 py-3">Evitar contenido indexable no deseado.</td></tr>

              <tr><td class="px-4 py-3 font-medium">/api/contacto</td><td class="px-4 py-3">POST</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Alta de leads de contacto.</td><td class="px-4 py-3">Rate limit + validación robusta de payload.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/api/contacto-landing</td><td class="px-4 py-3">POST</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Alta de leads desde landing.</td><td class="px-4 py-3">Paridad de controles con <code>/api/contacto</code>.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/api/buzon-del-rector</td><td class="px-4 py-3">POST</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Recepción de mensajes institucionales.</td><td class="px-4 py-3">Limitar frecuencia y sanitizar campos largos.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/api/events/whatsapp-click</td><td class="px-4 py-3">POST</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Tracking de clics a WhatsApp.</td><td class="px-4 py-3">Mantener filtros anti-payload y origen confiable.</td></tr>

              <tr><td class="px-4 py-3 font-medium">/admin/login</td><td class="px-4 py-3">GET|POST</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Acceso al panel admin.</td><td class="px-4 py-3">Lockout temporal y monitoreo de intentos fallidos.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/panel</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Dashboard administrativo.</td><td class="px-4 py-3">Mensajes de error diferenciados por módulo.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/reports</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Índice de reportes.</td><td class="px-4 py-3">Controlar acceso por sesión y rol.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/reports/cdv-mensual</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Reporte mensual CDV.</td><td class="px-4 py-3">Excluir ruido malicioso de métricas.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/attacks/report-fecha</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Índice de reportes de seguridad estáticos.</td><td class="px-4 py-3">Mantener bitácora y formato consistente.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/contacto</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Listado de leads contacto.</td><td class="px-4 py-3">Paginación y protección contra scraping interno.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/contacto/show</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Detalle de lead.</td><td class="px-4 py-3">Ocultar datos sensibles por defecto.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/contacto/delete</td><td class="px-4 py-3">POST</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Eliminación de lead.</td><td class="px-4 py-3">Añadir confirmación fuerte + auditoría.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/contacto/export</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Exportación de leads.</td><td class="px-4 py-3">Registrar quién exporta y cuándo.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/buzon-rector</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Listado de mensajes de buzón.</td><td class="px-4 py-3">Reforzar visibilidad por perfil autorizado.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/buzon-rector/show</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Detalle de mensaje.</td><td class="px-4 py-3">Minimizar exposición de PII en pantalla.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/buzon-rector/delete</td><td class="px-4 py-3">POST</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Eliminación de mensaje.</td><td class="px-4 py-3">Auditoría de borrado y razón de acción.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/buzon-rector/export</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Exportación de buzón.</td><td class="px-4 py-3">Control de acceso y trazabilidad de archivo.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin/logout</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Cerrar sesión admin.</td><td class="px-4 py-3">Invalidar sesión y token al salir.</td></tr>

              <tr><td class="px-4 py-3 font-medium">/oferta-educativa/kinder</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Oferta Kinder (canónica).</td><td class="px-4 py-3">Revisión periódica de enlaces a documentos.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/oferta-academica/kinder</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Alias vigente de Kinder.</td><td class="px-4 py-3">Mantener consistencia SEO con canonical.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/oferta-academica/kinder/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Alias con slash de Kinder.</td><td class="px-4 py-3">Consolidar analytics para evitar duplicados.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/oferta-educativa/pre-first</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Oferta Pre-first.</td><td class="px-4 py-3">Control de scripts terceros por página.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/oferta-educativa/primaria</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Oferta Primaria (canónica).</td><td class="px-4 py-3">Validar recursos descargables vigentes.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/oferta-academica/primaria</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Alias vigente de Primaria.</td><td class="px-4 py-3">Consolidar métricas por canonical.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/oferta-academica/primaria/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Alias con slash de Primaria.</td><td class="px-4 py-3">Evitar duplicidad de crawling.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/oferta-educativa/secundaria</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Oferta Secundaria.</td><td class="px-4 py-3">Revisión de enlaces y PDFs.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/oferta-educativa/preparatoria</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Oferta Preparatoria.</td><td class="px-4 py-3">Asegurar consistencia de CTAs.</td></tr>

              <tr><td class="px-4 py-3 font-medium">/noticias/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Índice de noticias.</td><td class="px-4 py-3">Controlar enlaces externos en contenido.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/noticias/{slug}</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-sky-700">Dinamico</td><td class="px-4 py-3">Detalle de noticia según rutas en <code>pages/noticias/routes.php</code>.</td><td class="px-4 py-3">Validar slugs y evitar referencias rotas.</td></tr>

              <tr><td class="px-4 py-3 font-medium">/formas-de-pago</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Página institucional.</td><td class="px-4 py-3">Mantener contenido actualizado y confiable.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/beneficios</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Página institucional.</td><td class="px-4 py-3">Verificar consistencia de navegación.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/reglamentos</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Descarga de reglamentos.</td><td class="px-4 py-3">Evitar duplicados y rotura de rutas de PDF.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/buzon-del-rector</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Landing del buzón.</td><td class="px-4 py-3">Mensajes claros sobre uso de datos personales.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/buzon-del-rector/gracias</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Thank-you de buzón.</td><td class="px-4 py-3">Evitar indexación innecesaria.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/dejanos-saber-de-ti</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Página institucional.</td><td class="px-4 py-3">Revisión periódica de enlaces salientes.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/alumnos</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Comunidad alumnos.</td><td class="px-4 py-3">Hardening de recursos descargables.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/egresados/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Comunidad egresados (canónica).</td><td class="px-4 py-3">Monitorear formularios y enlaces externos.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/docentes/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Comunidad docentes.</td><td class="px-4 py-3">Control de dependencias visuales externas.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/talleres-vespertinos/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Comunidad talleres (canónica).</td><td class="px-4 py-3">Consolidar canonical y redirecciones.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/alumnos/calendarios-academicos/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Calendario académico alumnos (canónica).</td><td class="px-4 py-3">Revisar vigencia de contenido por ciclo.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/ixu/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3 text-emerald-700">Activo</td><td class="px-4 py-3">Página IXU (canónica).</td><td class="px-4 py-3">Verificar consistencia de tracking y formularios.</td></tr>
            </tbody>
          </table>
        </div>
      </article>

      <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4">
          <h2 class="text-lg font-semibold text-slate-800">Legacy redirects (compatibilidad) · no usar en enlaces nuevos</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-700">
              <tr>
                <th class="px-4 py-3 font-semibold">Endpoint legacy</th>
                <th class="px-4 py-3 font-semibold">Metodo</th>
                <th class="px-4 py-3 font-semibold">Redirige a</th>
                <th class="px-4 py-3 font-semibold">Estado</th>
                <th class="px-4 py-3 font-semibold">Recomendacion</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <tr><td class="px-4 py-3 font-medium">/nosotros</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/nosotros/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">No usar en campañas nuevas; mantener por SEO.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/lp-general/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/lp-general</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Actualizar backlinks internos a canónica.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/lp-general/gracias/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/lp-general/gracias</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Evitar enlaces directos desde formularios nuevos.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/contacto</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/contacto/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Usar ruta con slash en navegación.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/aviso-de-privacidad</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/aviso-de-privacidad/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Conservar solo para compatibilidad histórica.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/admin</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/admin/login</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">No exponer en enlaces públicos.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/kinder</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/oferta-educativa/kinder</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Migrar campañas a ruta canónica.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/pre-first</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/oferta-educativa/pre-first</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Evitar nuevas publicaciones con slug legacy.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/primaria</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/oferta-educativa/primaria</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Mantener redirección 301 permanente.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/secundaria</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/oferta-educativa/secundaria</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">No usar en links de menú.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/preparatoria</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/oferta-educativa/preparatoria</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Reforzar canonical en sitemap.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/noticias</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/noticias/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Consolidar tráfico en ruta con slash.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/alumnos/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/comunidad/alumnos</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Mantener por enlaces antiguos.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/egresados</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/egresados/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Actualizar enlaces internos al destino final.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/egresados/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/egresados/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Evitar doble salto de redirección.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/egresados</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/egresados/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Usar siempre URL final en campañas.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/docentes</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/comunidad/docentes/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">No enlazar versión sin slash.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/talleres</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/talleres-vespertinos/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Reemplazar en materiales viejos.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/talleres/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/talleres-vespertinos/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Centralizar tracking en ruta canónica.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/talleres-vespertinos</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/talleres-vespertinos/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Mantener 301 y evitar duplicidad SEO.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/calendario-academico</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/comunidad/alumnos/calendarios-academicos/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">No usar en navegación actual.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/calendario-academico/</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/comunidad/alumnos/calendarios-academicos/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Conservar solo por historicidad.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/comunidad/alumnos/calendarios-academicos</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/comunidad/alumnos/calendarios-academicos/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Usar siempre versión canónica con slash.</td></tr>
              <tr><td class="px-4 py-3 font-medium">/ixu</td><td class="px-4 py-3">GET</td><td class="px-4 py-3">/ixu/</td><td class="px-4 py-3 text-amber-700">Legacy redirect</td><td class="px-4 py-3">Actualizar enlaces externos gradualmente.</td></tr>
            </tbody>
          </table>
        </div>
      </article>
    </section>

    <section class="mt-6">
      <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Nota final</h2>
        <p class="mt-3 text-sm leading-6 text-slate-700">
          Este reporte es una guia breve y entendible para priorizar mejoras de seguridad por endpoint.
          No sustituye auditoria tecnica completa ni pruebas de intrusion controladas.
        </p>
      </article>
    </section>

    <section class="mt-6">
      <article class="rounded-3xl border border-amber-200 bg-amber-50 p-6 shadow-sm">
        <h2 class="text-lg font-semibold text-amber-900">Areas de oportunidad prioritarias</h2>
        <ul class="mt-3 space-y-3 text-sm text-amber-900">
          <li class="flex items-start gap-2">
            <i data-lucide="alert-triangle" class="mt-0.5 h-4 w-4"></i>
            <span><strong>APIs públicas:</strong> estandarizar validaciones de entrada, límites de longitud y rechazo de payloads sospechosos en todos los endpoints POST.</span>
          </li>
          <li class="flex items-start gap-2">
            <i data-lucide="alert-triangle" class="mt-0.5 h-4 w-4"></i>
            <span><strong>Anti-abuso:</strong> aplicar rate limit consistente por IP/sesión en <code>/api/contacto</code>, <code>/api/contacto-landing</code> y <code>/api/buzon-del-rector</code>.</span>
          </li>
          <li class="flex items-start gap-2">
            <i data-lucide="alert-triangle" class="mt-0.5 h-4 w-4"></i>
            <span><strong>Admin:</strong> reforzar lockout de login, monitorear intentos fallidos y mantener separación clara de errores por módulo.</span>
          </li>
          <li class="flex items-start gap-2">
            <i data-lucide="alert-triangle" class="mt-0.5 h-4 w-4"></i>
            <span><strong>Datos y reportes:</strong> excluir tráfico anómalo de tableros ejecutivos para evitar decisiones con métricas contaminadas.</span>
          </li>
          <li class="flex items-start gap-2">
            <i data-lucide="alert-triangle" class="mt-0.5 h-4 w-4"></i>
            <span><strong>Legacy routes:</strong> mantenerlas solo para compatibilidad SEO/usuarios antiguos; no usar para nuevas ligas ni campañas.</span>
          </li>
        </ul>
      </article>
    </section>
  </main>
</body>
</html>
