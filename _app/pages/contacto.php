<?php
$pageTitle = 'Contacto | Colegio del Valle';
$pageDescription = 'Contacta al Colegio del Valle en CDMX: ubicacion, telefono, admisiones y visita nuestras instalaciones.';
$activePage = 'contacto';
require __DIR__ . '/partials/header.php';
$baseUrl = defined('BASE_URL') ? BASE_URL : rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($baseUrl === '/') {
    $baseUrl = '';
}
$isSent = isset($_GET['sent']) && $_GET['sent'] === '1';
$isError = isset($_GET['error']) && $_GET['error'] === '1';
?>
<section class="py-12 bg-white">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-10 text-center">
      <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Colegio Del Valle</p>
      <h1 class="mt-4 text-4xl md:text-5xl font-semibold text-slate-800">Admisiones</h1>
    </div>
  </div>
</section>

<section class="py-14 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-2">
    <div>
      <h2 class="text-2xl md:text-3xl font-semibold text-slate-800">Nuestra Mision</h2>
      <p class="mt-4 text-slate-600 leading-relaxed">
        Colegio Del Valle, con mas de 40 anos de tradicion academica, brinda a nuestros alumnos un excelente nivel
        educativo. Nuestra institucion cuenta con el mayor prestigio de la zona. ¡Ven y conoce la nueva escuela de tus hijos!
      </p>
      <div class="mt-8 space-y-4 text-sm text-slate-600">
        <div class="flex items-start gap-3">
          <i class="text-lg text-slate-500" data-lucide="mail"></i>
          <div>
            <p class="font-semibold text-slate-800">Correo</p>
            <p>contacto@coldelvalle.edu.mx</p>
          </div>
        </div>
        <div class="flex items-start gap-3">
          <i class="text-lg text-slate-500" data-lucide="map-pin"></i>
          <div>
            <p class="font-semibold text-slate-800">Direccion</p>
            <p>Mier y Pesado 227, Col. del Valle Centro, 03100 Ciudad de Mexico, CDMX</p>
          </div>
        </div>
        <div class="flex items-start gap-3">
          <i class="text-lg text-slate-500" data-lucide="phone"></i>
          <div>
            <p class="font-semibold text-slate-800">Telefono</p>
            <p>55 5063 1500</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h2 class="text-2xl md:text-3xl font-semibold text-slate-800">¡Contactanos!</h2>
      <?php if ($isSent): ?>
        <div class="mt-5 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
          Gracias. Tu mensaje fue enviado correctamente.
        </div>
      <?php endif; ?>
      <?php if ($isError): ?>
        <div class="mt-5 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          No se pudo enviar tu solicitud. Intenta nuevamente.
        </div>
      <?php endif; ?>
      <form class="mt-6 grid gap-4" method="post" action="<?= $baseUrl ?>/api/contacto">
        <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Nombre completo*" type="text" name="full_name" required />
        <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Correo Electronico*" type="email" name="email" required />
        <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Telefono*" type="tel" name="phone" required />
        <div class="relative">
          <select class="w-full appearance-none rounded-xl border border-slate-200 bg-white px-4 py-3 pr-10 text-sm text-slate-600" name="interest" required>
            <option value="">Estoy interesado en...</option>
            <option value="Kinder">Kinder</option>
            <option value="Pre First">Pre First</option>
            <option value="Primaria">Primaria</option>
            <option value="Secundaria">Secundaria</option>
            <option value="Prepa">Prepa</option>
          </select>
          <i class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-lg text-slate-500" data-lucide="chevron-down"></i>
        </div>
        <p class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm leading-relaxed text-slate-600">
          Tu informacion esta segura con nosotros. Solo la usaremos para que un asesor de admisiones del Colegio del Valle
          te contacte, te guie durante el proceso de inscripcion y te comparta detalles claros sobre colegiaturas, costos y
          opciones disponibles segun el nivel educativo que te interesa.
        </p>
        <input type="hidden" name="source" value="Pagina contacto CDV" />
        <input type="hidden" name="channel" value="Web" />
        <input type="hidden" name="medium" value="Sitio web" />
        <input type="text" name="company_website" class="hidden" tabindex="-1" autocomplete="off" aria-hidden="true" />
        <label class="inline-flex items-start gap-2 text-xs text-slate-600">
          <input type="checkbox" name="privacy" value="1" required class="mt-0.5" />
          <span>Acepto el aviso de privacidad y el uso de mis datos para contacto.</span>
        </label>
        <button type="submit" class="rounded-full bg-emerald-500 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white w-fit">Enviar</button>
      </form>
    </div>
  </div>
</section>

<section class="py-14 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center">
    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Descubre nuestro</p>
    <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-slate-800">Recorrido Virtual</h2>
    <p class="mt-3 text-slate-600">Conoce a Colegio Del Valle de forma virtual mediante este recorrido.</p>
    <div class="mt-8 rounded-3xl border border-slate-200 bg-white overflow-hidden">
      <div class="aspect-[16/9] w-full">
        <iframe
          class="h-full w-full"
          title="Recorrido virtual del Colegio del Valle"
          allowfullscreen
          src="https://tourmkr.com/F1pt9LMxiq"
        ></iframe>
      </div>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
