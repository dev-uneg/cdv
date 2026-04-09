<?php
$pageTitle = 'Dejanos saber de ti | Egresados CDV';
$pageDescription = 'Registro de egresados de Colegio del Valle para compartir trayectoria y recibir información institucional.';
$activePage = '';
require __DIR__ . '/partials/header.php';

$baseUrl = defined('BASE_URL') ? BASE_URL : rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($baseUrl === '/') {
    $baseUrl = '';
}

$isError = isset($_GET['error']) && $_GET['error'] === '1';
$errorMessage = trim((string) ($_GET['error_msg'] ?? ''));
if ($errorMessage === '') {
    $errorMessage = 'No se pudo guardar tu registro. Intenta nuevamente.';
}
?>

<section class="py-16 bg-white">
  <div class="max-w-[1000px] mx-auto px-6">
    <div class="text-center">
      <h1 class="text-3xl md:text-4xl font-semibold text-slate-800">Dejanos saber de ti</h1>
      <h2 class="mt-3 text-xl font-semibold text-slate-700">Egresados en acción.</h2>
      <p class="mt-4 text-slate-600 leading-relaxed">
        Hoy en día conocerte para nosotros es importante, queremos saber qué has hecho, en dónde has dejado tu huella y, con ello, poder compartirte información importante respecto a tu alma mater, así como accesos a múltiples beneficios por ser egresado de Colegio del Valle.
      </p>
      <p class="mt-4 text-slate-600 leading-relaxed">
        Por favor, ayúdanos con tu registro.
      </p>
      <p class="mt-3 text-sm font-semibold uppercase tracking-[0.2em] text-slate-500">Egresados CDV</p>
      <p class="mt-2 text-sm text-slate-500">Los campos con <span class="font-semibold text-rose-600">*</span> son obligatorios.</p>
    </div>

    <form class="mt-10 rounded-[32px] border border-slate-200 bg-white p-8 shadow-sm" action="<?= $baseUrl ?>/api/egresados-registro" method="post">
      <?php if ($isError): ?>
        <div class="mb-6 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          <?= htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8') ?>
        </div>
      <?php endif; ?>

      <div class="grid gap-6 md:grid-cols-3">
        <label class="text-sm text-slate-600">
          Nombre <span class="font-semibold text-rose-600">*</span>
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="text" name="nombre" required />
        </label>
        <label class="text-sm text-slate-600">
          Apellido Paterno <span class="font-semibold text-rose-600">*</span>
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="text" name="apellido_paterno" required />
        </label>
        <label class="text-sm text-slate-600">
          Apellido Materno <span class="font-semibold text-rose-600">*</span>
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="text" name="apellido_materno" required />
        </label>
      </div>

      <div class="mt-6 grid gap-6 md:grid-cols-2">
        <label class="text-sm text-slate-600">
          Generación <span class="font-semibold text-rose-600">*</span>
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="text" name="generacion" placeholder="Ej. 2012-2016" required />
        </label>
        <label class="text-sm text-slate-600">
          Nivel de egreso <span class="font-semibold text-rose-600">*</span>
          <select class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" name="nivel_egreso" required>
            <option value="" selected>Por favor, seleccione una opción</option>
            <option value="Primaria">Primaria</option>
            <option value="Secundaria">Secundaria</option>
            <option value="Preparatoria">Preparatoria</option>
            <option value="Otro">Otro</option>
          </select>
        </label>
      </div>

      <div class="mt-6 grid gap-6 md:grid-cols-2">
        <label class="text-sm text-slate-600">
          Teléfono <span class="font-semibold text-rose-600">*</span>
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="tel" name="telefono" required />
        </label>
      </div>

      <div class="mt-6 grid gap-6 md:grid-cols-2">
        <label class="text-sm text-slate-600">
          Correo electrónico <span class="font-semibold text-rose-600">*</span>
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="email" name="email" required />
        </label>
        <fieldset class="text-sm text-slate-600">
          <legend class="mb-2">¿Actualmente estás trabajando? <span class="font-semibold text-rose-600">*</span></legend>
          <div class="flex flex-wrap items-center gap-4">
            <label class="inline-flex items-center gap-2">
              <input type="radio" name="trabaja_actualmente" value="si" required>
              <span>Sí</span>
            </label>
            <label class="inline-flex items-center gap-2">
              <input type="radio" name="trabaja_actualmente" value="no" required>
              <span>No</span>
            </label>
          </div>
        </fieldset>
      </div>

      <div class="mt-6 grid gap-6 md:grid-cols-2" data-empleo-fields>
        <label class="text-sm text-slate-600">
          Empresa <span class="font-semibold text-rose-600">*</span>
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="text" name="empresa" data-empleo-input />
        </label>
        <label class="text-sm text-slate-600">
          Cargo actual <span class="font-semibold text-rose-600">*</span>
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="text" name="cargo_actual" data-empleo-input />
        </label>
      </div>

      <label class="mt-6 flex items-start gap-3 text-sm text-slate-600">
        <input class="mt-1 h-4 w-4 rounded border-slate-300" type="checkbox" name="aviso" required>
        <span>
          Acepto el
          <a class="font-semibold text-emerald-700 underline hover:text-emerald-800" href="<?= $baseUrl ?>/aviso-de-privacidad/" target="_blank" rel="noopener">aviso de privacidad</a>
          y autorizo el uso de mis datos para contacto institucional.
        </span>
      </label>

      <div class="mt-8 flex justify-center">
        <button class="inline-flex items-center justify-center gap-2 rounded-full bg-slate-900 px-8 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white hover:bg-slate-800" type="submit">
          Enviar registro
        </button>
      </div>
    </form>
  </div>
</section>

<script>
  (function () {
    var radios = document.querySelectorAll('input[name="trabaja_actualmente"]');
    var empleoInputs = document.querySelectorAll('[data-empleo-input]');

    function syncTrabajoState() {
      var selected = document.querySelector('input[name="trabaja_actualmente"]:checked');
      var working = selected && selected.value === 'si';

      empleoInputs.forEach(function (input) {
        if (working) {
          input.disabled = false;
          input.required = true;
          if (input.value.trim().toLowerCase() === 'no aplica') {
            input.value = '';
          }
          return;
        }

        input.value = 'No aplica';
        input.required = false;
        input.disabled = true;
      });
    }

    radios.forEach(function (radio) {
      radio.addEventListener('change', syncTrabajoState);
    });

    syncTrabajoState();
  })();
</script>

<?php require __DIR__ . '/partials/footer.php'; ?>
