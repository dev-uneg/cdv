<?php
$pageTitle = 'Contacto | Colegio del Valle';
$activePage = 'contacto';
require __DIR__ . '/partials/header.php';
?>
<section class="grid gap-8 md:grid-cols-2">
  <div>
    <h1 class="text-3xl md:text-4xl font-bold tracking-tight">Contacto</h1>
    <p class="mt-4 text-slate-600">¿Quieres más información? Escríbenos o visítanos.</p>
    <div class="mt-6 space-y-3 text-sm text-slate-600">
      <p><span class="font-semibold text-slate-900">Correo:</span> contacto@coldelvalle.edu.mx</p>
      <p><span class="font-semibold text-slate-900">Teléfono:</span> (000) 000 0000</p>
      <p><span class="font-semibold text-slate-900">Dirección:</span> Av. Principal 123, Valle.</p>
    </div>
  </div>
  <form class="rounded-2xl border border-slate-200 bg-white p-6 grid gap-4">
    <div>
      <label class="text-sm font-medium text-slate-700" for="nombre">Nombre</label>
      <input id="nombre" class="mt-2 w-full rounded-lg border border-slate-200 px-3 py-2" type="text" placeholder="Tu nombre" />
    </div>
    <div>
      <label class="text-sm font-medium text-slate-700" for="correo">Correo</label>
      <input id="correo" class="mt-2 w-full rounded-lg border border-slate-200 px-3 py-2" type="email" placeholder="correo@ejemplo.com" />
    </div>
    <div>
      <label class="text-sm font-medium text-slate-700" for="mensaje">Mensaje</label>
      <textarea id="mensaje" class="mt-2 w-full rounded-lg border border-slate-200 px-3 py-2" rows="4" placeholder="¿Cómo podemos ayudarte?"></textarea>
    </div>
    <button type="button" class="rounded-lg bg-slate-900 text-white px-4 py-2 text-sm font-semibold">Enviar</button>
  </form>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
