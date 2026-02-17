<?php
$pageTitle = 'Contacto | Colegio del Valle';
$activePage = 'contacto';
require __DIR__ . '/partials/header.php';
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
          <i class="ri-mail-line text-lg text-slate-500"></i>
          <div>
            <p class="font-semibold text-slate-800">Correo</p>
            <p>contacto@coldelvalle.edu.mx</p>
          </div>
        </div>
        <div class="flex items-start gap-3">
          <i class="ri-map-pin-line text-lg text-slate-500"></i>
          <div>
            <p class="font-semibold text-slate-800">Direccion</p>
            <p>Mier y Pesado 227, Col. del Valle Centro, 03100 Ciudad de Mexico, CDMX</p>
          </div>
        </div>
        <div class="flex items-start gap-3">
          <i class="ri-phone-line text-lg text-slate-500"></i>
          <div>
            <p class="font-semibold text-slate-800">Telefono</p>
            <p>55 5063 1500</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h2 class="text-2xl md:text-3xl font-semibold text-slate-800">¡Contactanos!</h2>
      <form class="mt-6 grid gap-4">
        <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Nombre*" type="text" />
        <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Apellido paterno*" type="text" />
        <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Correo Electronico*" type="email" />
        <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Telefono*" type="tel" />
        <div class="relative">
          <select class="w-full appearance-none rounded-xl border border-slate-200 bg-white px-4 py-3 pr-10 text-sm text-slate-600">
            <option value="">Estoy interesado en...</option>
            <option>Kinder</option>
            <option>Pre First</option>
            <option>Primaria</option>
            <option>Secundaria</option>
            <option>Prepa</option>
          </select>
          <i class="ri-arrow-down-s-line pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-lg text-slate-500"></i>
        </div>
        <textarea class="rounded-xl border border-slate-200 px-4 py-3 text-sm" rows="4" placeholder="Mensaje"></textarea>
        <button type="button" class="rounded-full bg-emerald-500 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white w-fit">Enviar</button>
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
        <iframe class="h-full w-full" allowfullscreen src="https://tourmkr.com/F1pt9LMxiq"></iframe>
      </div>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
