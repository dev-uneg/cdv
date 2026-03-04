<?php
$pageTitle = 'Buzon del Rector | Colegio del Valle';
$pageDescription = 'Buzon del rector: comparte sugerencias, comentarios o inquietudes con el Colegio del Valle.';
$activePage = '';
require __DIR__ . '/partials/header.php';

$baseUrl = defined('BASE_URL') ? BASE_URL : rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($baseUrl === '/') {
    $baseUrl = '';
}

$isError = isset($_GET['error']) && $_GET['error'] === '1';
$errorMessage = trim((string) ($_GET['error_msg'] ?? ''));
if ($errorMessage === '') {
    $errorMessage = 'No se pudo enviar tu solicitud. Intenta nuevamente.';
}
?>

<section class="py-16 bg-white">
  <div class="max-w-[1000px] mx-auto px-6">
    <div class="text-center">
      <h1 class="text-3xl md:text-4xl font-semibold text-slate-800">Buzon del Rector</h1>
      <p class="mt-4 text-slate-600">
        Comparte tus comentarios, sugerencias o inquietudes con nosotros. Nuestro equipo dara seguimiento a tu mensaje.
      </p>
    </div>

    <form class="mt-10 rounded-[32px] border border-slate-200 bg-white p-8 shadow-sm" action="<?= $baseUrl ?>/api/buzon-del-rector" method="post">
      <?php if ($isError): ?>
        <div class="mb-6 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-800">
          <?= htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8') ?>
        </div>
      <?php endif; ?>
      <div class="grid gap-6 md:grid-cols-2">
        <label class="text-sm text-slate-600">
          Nombre completo
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="text" name="nombre" placeholder="Tu nombre" required />
        </label>
        <label class="text-sm text-slate-600">
          Correo electronico
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="email" name="email" placeholder="tucorreo@ejemplo.com" required />
        </label>
        <label class="text-sm text-slate-600">
          Telefono de contacto
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="tel" name="telefono" placeholder="55 0000 0000" />
        </label>
        <label class="text-sm text-slate-600">
          Relacion con el colegio
          <select class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" name="relacion" required>
            <option value="" selected>Selecciona una opcion</option>
            <option value="madre-padre">Madre o padre de familia</option>
            <option value="alumno">Alumno(a)</option>
            <option value="egresado">Egresado(a)</option>
            <option value="docente">Docente</option>
            <option value="otro">Otro</option>
          </select>
        </label>
      </div>

      <div class="mt-6">
        <label class="text-sm text-slate-600">
          Asunto
          <input class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" type="text" name="asunto" placeholder="Motivo de tu mensaje" required />
        </label>
      </div>

      <div class="mt-6">
        <label class="text-sm text-slate-600">
          Mensaje
          <textarea class="mt-2 min-h-[160px] w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm text-slate-700" name="mensaje" placeholder="Escribe tu mensaje" required></textarea>
        </label>
      </div>

      <div class="mt-6 rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm text-slate-600">
        Aviso de privacidad: Los datos personales recabados en este formulario se utilizan unicamente para dar seguimiento a tu
        mensaje y no se compartiran con terceros. Puedes solicitar el acceso, rectificacion o eliminacion de tu informacion
        escribiendo a contacto del colegio.
      </div>

      <label class="mt-6 flex items-start gap-3 text-sm text-slate-600">
        <input class="mt-1 h-4 w-4 rounded border-slate-300" type="checkbox" name="aviso" required />
        Acepto el aviso de privacidad y autorizo el uso de mis datos para atender este mensaje.
      </label>

      <div class="mt-8 flex justify-center">
        <button class="inline-flex items-center justify-center gap-2 rounded-full bg-slate-900 px-8 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white hover:bg-slate-800" type="submit">
          Enviar mensaje
        </button>
      </div>
    </form>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
