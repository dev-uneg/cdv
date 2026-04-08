<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Incidente WhatsApp Tracking | 07 Abril 2026</title>
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/output.css">
  <link rel="stylesheet" href="<?php echo $base; ?>/_assets/admin-fonts.css">
  <script defer src="<?php echo $base; ?>/_assets/lucide-loader.js?v=2" data-lucide-sprite="<?php echo $base; ?>/_assets/lucide-sprite.svg"></script>
</head>
<body class="min-h-screen bg-slate-100 text-slate-900">
  <main class="mx-auto w-full max-w-7xl px-4 py-10">
    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
      <div class="flex flex-wrap items-start justify-between gap-4">
        <div>
          <p class="inline-flex items-center gap-2 rounded-full bg-rose-100 px-3 py-1 text-xs font-semibold text-rose-800">
            <i data-lucide="shield-alert" class="h-3.5 w-3.5"></i>
            Reporte Estatico de Incidencia
          </p>
          <h1 class="mt-3 text-3xl font-semibold text-slate-900">Incidente de Tráfico Malicioso en Endpoint de WhatsApp</h1>
          <p class="mt-2 text-sm text-slate-600">Fecha del incidente: martes 07 de abril de 2026.</p>
          <p class="mt-1 text-sm text-slate-600">Este documento es estatico y no consulta base de datos en tiempo real.</p>
        </div>
        <a href="<?php echo $base; ?>/admin/attacks/report-fecha" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">
          <i data-lucide="arrow-left" class="h-4 w-4"></i>
          Volver a reportes
        </a>
      </div>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-3">
      <article class="xl:col-span-2 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-xl font-semibold text-slate-900">Que sucedio</h2>
        <p class="mt-3 text-sm leading-6 text-slate-700">
          Se detecto un pico anomalo de eventos en el endpoint publico de tracking de WhatsApp. El patron fue consistente
          con automatizacion maliciosa: alto volumen concentrado en una sola IP y cadenas de prueba de inyeccion en campos
          de entrada.
        </p>
        <p class="mt-3 text-sm leading-6 text-slate-700">
          El impacto principal fue de analitica: inflado de clicks y registros sin ruta valida. No se reporta en este
          documento evidencia de ejecucion exitosa de SQL malicioso; la incidencia se trato como contaminacion de metricas.
        </p>
      </article>
      <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-xl font-semibold text-slate-900">Lectura rapida</h2>
        <ul class="mt-3 space-y-3 text-sm text-slate-700">
          <li class="flex items-start gap-2"><i data-lucide="activity" class="mt-0.5 h-4 w-4 text-sky-700"></i><span>2796 eventos totales del dia.</span></li>
          <li class="flex items-start gap-2"><i data-lucide="radar" class="mt-0.5 h-4 w-4 text-rose-700"></i><span>2790 eventos desde la IP principal.</span></li>
          <li class="flex items-start gap-2"><i data-lucide="file-warning" class="mt-0.5 h-4 w-4 text-amber-700"></i><span>419 eventos sin <code>page_path</code>.</span></li>
          <li class="flex items-start gap-2"><i data-lucide="clock-3" class="mt-0.5 h-4 w-4 text-indigo-700"></i><span>Concentracion maxima en la hora 14:00.</span></li>
        </ul>
      </article>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">
      <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Eventos totales</p>
        <p class="mt-2 text-3xl font-bold text-slate-900">2796</p>
        <p class="mt-2 text-xs text-slate-600">Total de requests registradas en el endpoint durante el incidente.</p>
      </article>
      <article class="rounded-2xl border border-rose-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-rose-700">IP principal</p>
        <p class="mt-2 text-3xl font-bold text-rose-700">2790</p>
        <p class="mt-2 text-xs text-slate-600">Volumen concentrado en una sola IP, indicador de automatizacion.</p>
      </article>
      <article class="rounded-2xl border border-amber-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-amber-700">Sin page_path</p>
        <p class="mt-2 text-3xl font-bold text-amber-700">419</p>
        <p class="mt-2 text-xs text-slate-600">Eventos con origen vacio o nulo en la ruta capturada.</p>
      </article>
      <article class="rounded-2xl border border-sky-200 bg-white p-5 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wide text-sky-700">Hora pico</p>
        <p class="mt-2 text-3xl font-bold text-sky-700">14:00</p>
        <p class="mt-2 text-xs text-slate-600">Franja de mayor actividad para trazar la linea de tiempo del incidente.</p>
      </article>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-2">
      <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4">
          <h2 class="text-lg font-semibold text-slate-800">Top paginas impactadas</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-700">
              <tr><th class="px-4 py-3 font-semibold">Pagina</th><th class="px-4 py-3 font-semibold">Clicks</th></tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <tr><td class="px-4 py-3">(sin pagina)</td><td class="px-4 py-3 font-semibold">419</td></tr>
              <tr><td class="px-4 py-3">/</td><td class="px-4 py-3 font-semibold">402</td></tr>
              <tr><td class="px-4 py-3">/oferta-educativa/</td><td class="px-4 py-3 font-semibold">373</td></tr>
              <tr><td class="px-4 py-3">/nosotros/</td><td class="px-4 py-3 font-semibold">372</td></tr>
            </tbody>
          </table>
        </div>
      </article>

      <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Que significa este listado</h2>
        <ul class="mt-3 space-y-3 text-sm text-slate-700">
          <li class="flex items-start gap-2"><i data-lucide="info" class="mt-0.5 h-4 w-4 text-slate-500"></i><span><strong>(sin pagina)</strong> indica requests enviadas sin ruta valida.</span></li>
          <li class="flex items-start gap-2"><i data-lucide="home" class="mt-0.5 h-4 w-4 text-slate-500"></i><span>La presencia de rutas reales mezcladas con vacias sugiere automatizacion sobre endpoint publico.</span></li>
          <li class="flex items-start gap-2"><i data-lucide="bar-chart-3" class="mt-0.5 h-4 w-4 text-slate-500"></i><span>Estas cifras son un corte historico del incidente, no metrica en vivo.</span></li>
        </ul>
      </article>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-2">
      <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4">
          <h2 class="text-lg font-semibold text-slate-800">Top IPs observadas</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-700">
              <tr><th class="px-4 py-3 font-semibold">IP</th><th class="px-4 py-3 font-semibold">Eventos</th></tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <tr><td class="px-4 py-3">50.114.179.8</td><td class="px-4 py-3 font-semibold">2790</td></tr>
              <tr><td class="px-4 py-3">148.222.132.245</td><td class="px-4 py-3 font-semibold">2</td></tr>
              <tr><td class="px-4 py-3">143.105.17.249</td><td class="px-4 py-3 font-semibold">2</td></tr>
            </tbody>
          </table>
        </div>
      </article>

      <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Interpretacion breve</h2>
        <p class="mt-3 text-sm leading-6 text-slate-700">
          Cuando una sola IP concentra casi todo el volumen del dia, el comportamiento deja de parecer trafico humano normal
          y se interpreta como automatizacion o scanner.
        </p>
        <p class="mt-3 text-sm leading-6 text-slate-700">
          Este patron se reforzo por la presencia de payloads de prueba en parametros de la request.
        </p>
      </article>
    </section>

    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-2">
      <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4">
          <h2 class="text-lg font-semibold text-slate-800">Ejemplos de payloads detectados</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-700">
              <tr>
                <th class="px-4 py-3 font-semibold">Campo</th>
                <th class="px-4 py-3 font-semibold">Valor</th>
                <th class="px-4 py-3 font-semibold">Que significa</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <tr>
                <td class="px-4 py-3">page_path</td>
                <td class="px-4 py-3">/-1 OR 5*5=25</td>
                <td class="px-4 py-3 text-slate-600">Prueba booleana para forzar evaluaciones logicas en backend.</td>
              </tr>
              <tr>
                <td class="px-4 py-3">page_path</td>
                <td class="px-4 py-3">/if(now()=sysdate(),sleep(15),0)</td>
                <td class="px-4 py-3 text-slate-600">Payload time-based para buscar retrasos por inyeccion.</td>
              </tr>
              <tr>
                <td class="px-4 py-3">page_path</td>
                <td class="px-4 py-3">/-1 waitfor delay '0:0:15' --</td>
                <td class="px-4 py-3 text-slate-600">Variante SQL Server de demora; comun en escaneos automaticos.</td>
              </tr>
              <tr>
                <td class="px-4 py-3">target_url</td>
                <td class="px-4 py-3">-1 OR 5*5=25 --</td>
                <td class="px-4 py-3 text-slate-600">Mismo patron malicioso inyectado en otro campo.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </article>

      <article class="rounded-3xl border border-emerald-300 bg-emerald-50/60 p-6 shadow-sm">
        <div class="flex flex-wrap items-center justify-between gap-3">
          <h2 class="text-lg font-semibold text-slate-900">Como se resolvio</h2>
          <span class="inline-flex items-center gap-1 rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">
            <i data-lucide="shield-check" class="h-3.5 w-3.5"></i>
            Incidencia contenida
          </span>
        </div>

        <ul class="mt-4 space-y-3 text-sm text-slate-700">
          <li class="flex items-start gap-2 rounded-xl border border-emerald-200 bg-white px-3 py-2"><i data-lucide="check-circle-2" class="mt-0.5 h-4 w-4 text-emerald-600"></i><span>Se aplico validacion estricta de origen, <code>page_path</code> y <code>target_url</code>.</span></li>
          <li class="flex items-start gap-2 rounded-xl border border-emerald-200 bg-white px-3 py-2"><i data-lucide="check-circle-2" class="mt-0.5 h-4 w-4 text-emerald-600"></i><span>Se incorporo rate limit por IP para cortar rafagas.</span></li>
          <li class="flex items-start gap-2 rounded-xl border border-emerald-200 bg-white px-3 py-2"><i data-lucide="check-circle-2" class="mt-0.5 h-4 w-4 text-emerald-600"></i><span>Se bloquearon payloads sospechosos antes de guardar en tabla.</span></li>
          <li class="flex items-start gap-2 rounded-xl border border-emerald-200 bg-white px-3 py-2"><i data-lucide="check-circle-2" class="mt-0.5 h-4 w-4 text-emerald-600"></i><span>Se depuraron 2790 registros maliciosos del 07/04/2026; quedaron 7 eventos validos.</span></li>
        </ul>

        <div class="mt-5 grid grid-cols-2 gap-3">
          <div class="rounded-xl border border-emerald-300 bg-white px-3 py-2">
            <p class="text-[11px] font-semibold uppercase tracking-wide text-slate-500">Registros eliminados</p>
            <p class="mt-1 text-2xl font-bold text-slate-900">2790</p>
          </div>
          <div class="rounded-xl border border-emerald-300 bg-white px-3 py-2">
            <p class="text-[11px] font-semibold uppercase tracking-wide text-slate-500">Eventos validos finales</p>
            <p class="mt-1 text-2xl font-bold text-slate-900">7</p>
          </div>
        </div>

        <p class="mt-4 rounded-lg border border-emerald-200 bg-white px-3 py-2 text-xs text-slate-600">Nota: seccion estatica y documental; no consulta BD en tiempo real.</p>
      </article>
    </section>
  </main>

</body>
</html>
