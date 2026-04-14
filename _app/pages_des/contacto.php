<?php
$pageTitle = 'Contacto | Colegio del Valle';
$pageDescription = 'Contacta al Colegio del Valle en CDMX: ubicación, teléfono, admisiones y visita nuestras instalaciones.';
$activePage = 'contacto';
$baseUrl = defined('BASE_URL') ? BASE_URL : '';
$menuItems = require __DIR__ . '/partials/menu-items.php';
$menuSubItems = require __DIR__ . '/partials/des-menu-subitems.php';
$logoDarkSrc = $baseUrl . '/_imgs/Colegio-del-Valle-Logo-342x206.webp';
$headerWrapperClass = 'z-40 border-b border-slate-200 bg-white/95 backdrop-blur-sm';
$enableAos = true;
require __DIR__ . '/partials/head-start.php';

$turnstileConfig = [];
$turnstileConfigPath = __DIR__ . '/../config/turnstile.local.php';
if (file_exists($turnstileConfigPath)) {
    $turnstileConfig = require $turnstileConfigPath;
}
$turnstileSiteKey = (string) ($turnstileConfig['site_key'] ?? getenv('TURNSTILE_SITE_KEY') ?? '');
$turnstileEnabled = $turnstileSiteKey !== '' && $turnstileSiteKey !== 'PON_AQUI_TU_TURNSTILE_SITE_KEY';

$isSent = isset($_GET['sent']) && $_GET['sent'] === '1';
$isError = isset($_GET['error']) && $_GET['error'] === '1';
$errorMessage = trim((string) ($_GET['error_msg'] ?? ''));
if ($errorMessage === '') {
    $errorMessage = 'No se pudo enviar tu solicitud. Intenta nuevamente.';
}
?>
<style>
  .contacto-hero-title {
    font-family: "Lilita One", cursive;
    font-size: clamp(2.8rem, 8vw, 6rem);
    line-height: 0.9;
    letter-spacing: 0.03em;
    text-transform: uppercase;
  }
  h1, h2, h3 {
    font-family: "Lilita One", cursive;
    font-weight: 400;
  }
</style>
<div class="flex h-[70vh] min-h-[70svh] min-h-[70dvh] flex-col">
<?php require __DIR__ . '/partials/header-white-sidebar.php'; ?>
<section class="relative flex-1 overflow-hidden bg-gradient-to-br from-[#0B4F6C] via-[#345995] to-[#03CEA4]" data-aos="zoom-out" data-aos-duration="900">
  <div class="pointer-events-none absolute -left-20 top-10 h-52 w-52 rounded-full bg-[#EAC435]/25 blur-3xl"></div>
  <div class="pointer-events-none absolute -right-16 bottom-8 h-64 w-64 rounded-full bg-[#FB4D3D]/20 blur-3xl"></div>
  <div class="mx-auto flex h-full w-full max-w-[1300px] items-center justify-center px-6">
    <div class="max-w-3xl text-center" data-aos="fade-up" data-aos-delay="80">
      <div class="mb-4 flex items-center justify-center text-white/90">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/35 bg-white/10">
          <i data-lucide="message-circle" class="h-5 w-5"></i>
        </span>
      </div>
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-white/80">Colegio del Valle</p>
      <h1 class="contacto-hero-title mt-4 text-white drop-shadow-[0_8px_24px_rgba(2,8,23,0.28)]">Contacto</h1>
      <p class="mt-6 text-base leading-relaxed text-white/95 md:text-lg">
        Estamos listos para ayudarte con admisiones, costos, horarios y cualquier duda sobre el nivel educativo ideal para tu familia.
      </p>
    </div>
  </div>
</section>
</div>

<?php if ($turnstileEnabled): ?>
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<?php endif; ?>

<section class="py-14 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-2">
    <div>
      <h2 class="text-2xl md:text-3xl font-semibold text-[#345995]">Nuestra Misión</h2>
      <p class="mt-4 text-slate-600 leading-relaxed">
        Colegio Del Valle, con más de 40 años de tradición académica, brinda a nuestros alumnos un excelente nivel
        educativo. Nuestra institución cuenta con el mayor prestigio de la zona. Ven y conoce la nueva escuela de tus hijos.
      </p>
      <div class="mt-8 space-y-4 text-sm text-slate-600">
        <div class="flex items-start gap-3">
          <i class="text-lg text-slate-500" data-lucide="mail"></i>
          <div>
            <p class="font-semibold text-slate-800">Correo</p>
            <p><a class="hover:text-slate-900" href="mailto:contacto@coldelvalle.edu.mx">contacto@coldelvalle.edu.mx</a></p>
          </div>
        </div>
        <div class="flex items-start gap-3">
          <i class="text-lg text-slate-500" data-lucide="map-pin"></i>
          <div>
            <p class="font-semibold text-slate-800">Dirección</p>
            <p>Mier y Pesado 227, Col. del Valle Centro, 03100 Ciudad de México, CDMX</p>
          </div>
        </div>
        <div class="flex items-start gap-3">
          <i class="text-lg text-slate-500" data-lucide="phone"></i>
          <div>
            <p class="font-semibold text-slate-800">Teléfono</p>
            <p><a class="hover:text-slate-900" href="tel:+525550631500">55 5063 1500</a></p>
          </div>
        </div>
      </div>
    </div>

    <div>
      <h2 class="text-2xl md:text-3xl font-semibold text-[#345995]">Contáctanos</h2>
      <?php if ($isSent): ?>
        <div class="mt-5 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
          Gracias. Tu mensaje fue enviado correctamente.
        </div>
      <?php endif; ?>
      <?php if ($isError): ?>
        <div class="mt-5 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          <?= htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8') ?>
        </div>
      <?php endif; ?>

      <form class="mt-6 grid gap-4" method="post" action="<?= $baseUrl ?>/api/contacto">
        <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Nombre completo*" type="text" name="full_name" required />
        <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Correo Electrónico*" type="email" name="email" required />
        <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Teléfono*" type="tel" name="phone" required />

        <div class="relative">
          <select class="w-full appearance-none rounded-xl border border-slate-200 bg-white px-4 py-3 pr-10 text-sm text-slate-600" name="interest" required>
            <option value="">Estoy interesado en...</option>
            <option value="Kinder">Kinder</option>
            <option value="Pre First">Pre First</option>
            <option value="Primaria">Primaria</option>
            <option value="Secundaria">Secundaria</option>
            <option value="Preparatoria">Preparatoria</option>
          </select>
          <i class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-lg text-slate-500" data-lucide="chevron-down"></i>
        </div>

        <p class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm leading-relaxed text-slate-600">
          Tu información está segura con nosotros. Solo la usaremos para que un asesor de admisiones del Colegio del Valle
          te contacte, te guíe durante el proceso de inscripción y te comparta detalles claros sobre colegiaturas, costos y
          opciones disponibles según el nivel educativo que te interesa.
        </p>

        <input type="hidden" name="source" value="Página contacto CDV DES" />
        <input type="hidden" name="channel" value="Web" />
        <input type="hidden" name="medium" value="Sitio web" />

        <?php if ($turnstileEnabled): ?>
          <div class="cf-turnstile" data-sitekey="<?= htmlspecialchars($turnstileSiteKey, ENT_QUOTES, 'UTF-8') ?>"></div>
        <?php endif; ?>

        <label class="inline-flex items-center gap-3 text-sm text-slate-600">
          <input type="checkbox" name="privacy" value="1" required class="h-5 w-5 accent-emerald-600" />
          <span>
            Acepto el
            <a class="font-semibold text-emerald-700 underline hover:text-emerald-800" href="<?= $baseUrl ?>/aviso-de-privacidad/" target="_blank" rel="noopener">aviso de privacidad</a>
            y el uso de mis datos para contacto.
          </span>
        </label>

        <button type="submit" class="rounded-full bg-emerald-500 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white w-fit">
          Enviar
        </button>
      </form>
    </div>
  </div>
</section>

<section class="py-14 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 text-center">
    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Descubre nuestro</p>
    <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-[#345995]">Recorrido Virtual</h2>
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

<script>
  window.addEventListener('load', () => {
    if (!window.AOS) return;
    window.AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: false,
      mirror: true,
      offset: 60,
    });
  });
</script>

<?php require __DIR__ . '/partials/footer.php'; ?>
