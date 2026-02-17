<?php
$pageTitle = 'Primaria | Colegio del Valle';
$activePage = 'primaria';
require __DIR__ . '/partials/header.php';
?>
<section class="pt-0 pb-0 bg-white">
  <div class="w-full mx-auto px-0">
    <div class="h-[480px] w-full overflow-hidden rounded-none border border-slate-200 bg-white">
      <iframe
        class="h-full w-full"
        src="https://www.youtube.com/embed/_8ykrGpyyOM?rel=0"
        title="Primaria - Colegio del Valle"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen
      ></iframe>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center">
    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">RVOE SEP 09050086/06/2005</p>
    <h1 class="mt-6 text-3xl md:text-4xl font-semibold text-blue-700">
      No busques mas Primarias en la Colonia del Valle. ¡Conoce nuestra institucion!
    </h1>
    <p class="mt-4 text-slate-900 leading-relaxed">
      Si buscas primarias en la Colonia del Valle, has llegado al sitio ideal. En Colegio Del Valle sabemos que las
      bases fundamentales para la vida se aprenden en esta etapa de la educacion y nosotros buscamos los mas altos
      estandares de calidad dentro de los Colegios Privados en CDMX.
    </p>
    <p class="mt-12 text-xl text-blue-600">Forma parte de nuestra Comunidad</p>
    <h2 class="mt-3 text-4xl md:text-5xl font-semibold text-blue-700">Requisitos</h2>
    <p class="mt-4 text-blue-600">Para poder cursar alguno de los grados de primaria en Colegio Del Valle se requiere cumplir</p>
    <p class="mt-2 text-slate-900">con los siguientes documentos:</p>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[1.4fr,0.6fr]">
    <div class="space-y-8">
      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm" open>
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          Requisitos de ingreso Segundo a Sexto de Primaria
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <p>CURP dos copias ampliado a tamano carta dos copias.</p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Presentar Boleta de Evaluacion por Reporte de Evaluacion de 1º, 2º, 3º, 4º y 5º, segun sea del grado anterior a que ingresa, solamente para alumnos de 6º grado se necesitan todos los grados anteriores, estos expedidos por la S.E.P en original y dos copias.</li>
            <li>Certificado medico en donde nos indique su estado de salud, su tipo y grupo de sangre en original y dos copias.</li>
            <li>Cartilla de vacunacion dos copias.</li>
            <li>8 fotografias tamano infantil a color.</li>
            <li>Elaborar registro de Inscripcion y Reinscripcion con los datos que se soliciten en la misma SIN OMITIR NINGUNO original y dos copias (solicitar en direccion).</li>
            <li>Ficha de salud original y dos copias (solicitar en direccion).</li>
          </ul>
          <p class="text-sm">
            <span class="font-semibold text-slate-800">Nota:</span> Si en el momento de inscripcion no presenta alguno de estos documentos se suspendera el tramite de inscripcion.
          </p>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          Requisitos de ingreso Primero de Primaria
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <ul class="space-y-2 list-disc pl-6">
            <li>Carta compromiso original y copia (solicitar en direccion).</li>
            <li>Presentar Reporte de Evaluacion de Tercer grado de Educacion Preescolar en original y dos copias.</li>
            <li>Certificado medico en donde nos indique su estado de salud, su tipo y grupo de sangre en original y dos copias.</li>
            <li>8 fotografias tamano infantil a color.</li>
            <li>Elaborar registro de Inscripcion y Reinscripcion con los datos que se soliciten en la misma SIN OMITIR NINGUNO original y dos copias (solicitar en direccion).</li>
            <li>Ficha de salud original y dos copias (solicitar en direccion).</li>
            <li>CURP dos copias ampliado a tamano carta.</li>
            <li>El acreditamiento del programa Prefirst sera requisito para efectuar la inscripcion al primer nivel de Primaria Bilingue.</li>
          </ul>
          <p class="text-sm">
            <span class="font-semibold text-slate-800">Nota:</span> Si en el momento de inscripcion no presenta alguno de estos documentos se suspendera el tramite de inscripcion.
          </p>
        </div>
      </details>
    </div>
    <div class="flex flex-col gap-4">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/contacto">
        <i class="ri-information-line text-base"></i>
        Mas informacion
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/PDFs/primaria/Colegio-Del-Valle-Requisitos-Primaria-2024.pdf" target="_blank" rel="noopener">
        <i class="ri-download-2-line text-base"></i>
        Descargar requisitos
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[0.9fr,1.1fr] items-start" data-tabscope data-default="modelo">
    <div class="rounded-3xl border border-slate-200 bg-white p-6 space-y-3">
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-cyan-600 shadow-sm" type="button" data-tab="modelo">
        <i class="ri-book-open-line text-lg"></i>
        Modelo Educativo Primaria
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="mision">
        <i class="ri-flag-2-line text-lg"></i>
        Mision
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="vision">
        <i class="ri-eye-line text-lg"></i>
        Vision
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="valores">
        <i class="ri-heart-3-line text-lg"></i>
        Valores
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="talleres">
        <i class="ri-brush-line text-lg"></i>
        Talleres extraescolares
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="horario">
        <i class="ri-time-line text-lg"></i>
        Horario
      </button>
    </div>
    <div class="min-h-[280px] rounded-3xl border border-slate-200 bg-white p-8">
      <div data-panel="modelo">
        <h3 class="text-3xl font-semibold text-slate-800">Modelo Educativo Primaria</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Cada dia que pasa la vida nos da la oportunidad de mejorar todo lo que realizamos, de construir un mundo
          mejor, de aspirar a una Educacion llena de oportunidades, de cambios, de vanguardia y dedicacion; para lograr
          nuestros objetivos como escuela y nacion hay que esforzarse cada dia y prepararse para llegar a cumplir la
          meta fijada. Debido a esto la primaria Colegio Del Valle esta dedicada dia con dia a realizar un trabajo arduo
          para lograr que esta magna escuela sea de calidad y de entereza, en donde nuestros alumnos y padres de familia
          lleguen a cubrir cada una de las expectativas que tienen como estudiantes y como seres humanos.
        </p>
      </div>
      <div class="hidden" data-panel="mision">
        <h3 class="text-3xl font-semibold text-slate-800">Mision</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Promover permanentemente el desarrollo integral del alumno basado en una educacion de calidad centrada en el
          fortalecimiento de valores etico-morales, donde el estudiante se distinga por su constancia, esfuerzo,
          dedicacion y compromiso con la sociedad y el medio ambiente.
        </p>
      </div>
      <div class="hidden" data-panel="vision">
        <h3 class="text-3xl font-semibold text-slate-800">Vision</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Incorporar a nuestros alumnos a la vida cotidiana siempre bajo la linea de principios y valores que les
          sirvan para transformarse en mejores seres humanos.
        </p>
      </div>
      <div class="hidden" data-panel="valores">
        <h3 class="text-3xl font-semibold text-slate-800">Valores</h3>
        <ul class="mt-4 space-y-2 text-slate-600 list-disc pl-6">
          <li>Moral.</li>
          <li>Etica.</li>
          <li>Verdad.</li>
          <li>Justicia.</li>
          <li>Pensamiento.</li>
          <li>Inteligencia.</li>
          <li>Libertad.</li>
          <li>Respeto a los demas.</li>
        </ul>
      </div>
      <div class="hidden" data-panel="talleres">
        <h3 class="text-3xl font-semibold text-slate-800">Talleres extraescolares</h3>
        <ul class="mt-4 space-y-2 text-slate-600 list-disc pl-6">
          <li>Futbol</li>
          <li>Baloncesto</li>
          <li>Voleibol</li>
          <li>Tocho Bandera</li>
          <li>Taekwondo</li>
          <li>Porras</li>
          <li>Capoeira</li>
          <li>Piano</li>
          <li>Ajedrez</li>
        </ul>
      </div>
      <div class="hidden" data-panel="horario">
        <h3 class="text-3xl font-semibold text-slate-800">Horario</h3>
        <p class="mt-4 text-slate-600">Lunes a Viernes</p>
        <p class="mt-2 text-slate-600">de 15:30 a 17:30 hrs</p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center" data-tabscope data-default="ofrecemos">
    <h2 class="text-3xl md:text-4xl font-semibold text-slate-800">Servicios</h2>
    <p class="mt-3 text-slate-600">Conoce mas sobre lo que las mejores Escuelas Primarias en CDMX te ofrecen.</p>

    <div class="mt-8">
      <div class="inline-flex flex-wrap justify-center gap-2 rounded-full border border-slate-200 bg-white p-2 text-xs font-semibold uppercase tracking-[0.2em] text-slate-600">
        <button class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-cyan-700" type="button" data-tab="ofrecemos">
          <i class="ri-check-line text-base"></i>
          Ofrecemos
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="servicios">
          <i class="ri-service-line text-base"></i>
          Servicios adicionales
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="talleres">
          <i class="ri-palette-line text-base"></i>
          Talleres vespertinos
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="plan">
          <i class="ri-file-list-3-line text-base"></i>
          Plan de estudios
        </button>
      </div>
      <div class="mt-6 rounded-3xl border border-slate-200 bg-white p-8 text-left">
        <div data-panel="ofrecemos">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Primaria Bilingue*</li>
            <li>Profesorado altamente calificado</li>
            <li>Servicio medico</li>
            <li>Comedor</li>
            <li>Biblioteca y hemeroteca</li>
            <li>Aula de computo</li>
            <li>Aula de musica</li>
          </ul>
        </div>
        <div class="hidden" data-panel="servicios">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Ingles avanzado</li>
            <li>Instalaciones de vanguardia</li>
            <li>Seguridad Interna</li>
            <li>Convenios institucionales</li>
            <li>Escuela para padres</li>
          </ul>
        </div>
        <div class="hidden" data-panel="talleres">
          <div class="grid gap-8 md:grid-cols-2">
            <ul class="list-disc pl-6 space-y-2 text-slate-600">
              <li>Futbol</li>
              <li>Baloncesto</li>
              <li>Voleibol</li>
              <li>Tocho</li>
              <li>Bandera</li>
              <li>Taekwondo</li>
              <li>Porras</li>
              <li>Capoeira</li>
              <li>Piano</li>
              <li>Ajedrez</li>
            </ul>
            <div>
              <p class="text-lg font-semibold text-slate-800">Horario</p>
              <p class="mt-3 text-slate-600">Lunes a Viernes</p>
              <p class="mt-2 text-slate-600">de 15:30 a 17:30 hrs</p>
            </div>
          </div>
        </div>
        <div class="hidden" data-panel="plan">
          <div class="grid gap-8 md:grid-cols-2 text-slate-600">
            <div class="space-y-6">
              <div>
                <p class="font-semibold text-slate-800">Lenguajes</p>
                <ul class="mt-2 list-disc pl-6 space-y-1">
                  <li>Espanol</li>
                  <li>Ingles</li>
                  <li>Artes</li>
                </ul>
              </div>
              <div>
                <p class="font-semibold text-slate-800">Saberes y Pensamiento Cientifico</p>
                <ul class="mt-2 list-disc pl-6 space-y-1">
                  <li>Matematicas</li>
                  <li>Ciencias Naturales</li>
                </ul>
              </div>
              <div>
                <p class="font-semibold text-slate-800">Etica, Naturaleza y Sociedades</p>
                <ul class="mt-2 list-disc pl-6 space-y-1">
                  <li>Historia</li>
                  <li>Geografia</li>
                  <li>Formacion Civica y Etica</li>
                  <li>La Entidad Donde Vivo</li>
                </ul>
              </div>
            </div>
            <div class="space-y-6">
              <div>
                <p class="font-semibold text-slate-800">De lo Humano a lo Comunitario</p>
                <ul class="mt-2 list-disc pl-6 space-y-1">
                  <li>Educacion Fisica</li>
                  <li>Educacion Socioemocional</li>
                  <li>Tecnologia</li>
                  <li>Autonomia Curricular</li>
                  <li>Ingles</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="grid gap-6 md:grid-cols-3">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/PDFs/primaria/REGLAMENTO-PRIMARIA-2025-2026.pdf" target="_blank" rel="noopener">
        <i class="ri-file-text-line text-base"></i>
        Reglamento
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/IMGS/primaria/Calendario-primaria.jpg" target="_blank" rel="noopener">
        <i class="ri-calendar-event-line text-base"></i>
        Calendario academico
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/formas-de-pago">
        <i class="ri-bank-card-line text-base"></i>
        Formas de pago
      </a>
    </div>

    <h2 class="mt-10 text-4xl md:text-5xl font-semibold text-indigo-700 text-center">Preguntas frecuentes</h2>
    <div class="mt-12 space-y-5">
      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          ¿Como saber si mi hijo quedo inscrito en la primaria?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            En educacion primaria publica, el Estado Mexicano ofrece mecanismos para verificar si tu hijo quedo inscrito.
            En los colegios privados como Colegio Del Valle se dispone de otro sistema. Dirigirse a Direccion de Admisiones
            en un horario de lunes a viernes de 9:00 a 19:00 hrs y sabados de 9:00 a 13:00 hrs.
          </p>
          <p>
            Los padres deben checar los tiempos de reinscripcion en el calendario, debido a que la reinscripcion es un
            periodo en el que se deben actualizar los datos del estudiante.
          </p>
          <p>¡Contactanos para saber si tu hijo quedo inscrito en la primaria de Colegio Del Valle!</p>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          ¿Cuando salen de vacaciones los ninos de primaria?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            La estructura educativa primaria en Mexico fija vacaciones durante el transcurso del mes de julio y hasta
            finales del mes de agosto. En Colegio del Valle las fechas de vacaciones para estudiantes de primaria son
            las siguientes.
          </p>
          <ul class="list-disc pl-6 space-y-1">
            <li>Vacacion final de clases: Desde el 16 de julio y hasta 29 de agosto de 2024.</li>
            <li>Receso de clases carnaval: Desde el 25 al 29 de marzo 2024.</li>
            <li>Receso Semana Santa: Desde el 1 al 5 de abril de 2024.</li>
            <li>Receso fin de ano: Desde mediados de diciembre 2024 hasta los primeros de enero 2025.</li>
          </ul>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          ¿Como ver las calificaciones de primaria?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            En Colegio del Valle los papas pueden consultar las calificaciones accediendo a su historia academica con un
            solo clic. ¿Requieres una consulta en persona?, acercate a las instalaciones o contactanos via online.
          </p>
          <p>
            Por otro lado, los padres y tutores podran ver certificaciones de alumnos de primaria y otros niveles a traves
            del Sistema de Informacion y Gestion Educativa (SIGED). El ingreso en linea y es muy facil. Solo debes tener a
            la mano los datos del CURP del estudiante y la clave del Centro de Trabajo y Escuela (CCT). Ingresa los datos
            en el sitio web del SIGED y ¡listo! Ya puedes checar las calificaciones.
          </p>
        </div>
      </details>
    </div>
  </div>
</section>

<script>
  (() => {
    const scopes = document.querySelectorAll('[data-tabscope]');
    scopes.forEach((scope) => {
      const tabs = scope.querySelectorAll('[data-tab]');
      const panels = scope.querySelectorAll('[data-panel]');
      const setActive = (key) => {
        tabs.forEach((tab) => {
          const active = tab.getAttribute('data-tab') === key;
          tab.classList.toggle('text-cyan-600', active);
          tab.classList.toggle('shadow-sm', active);
          tab.classList.toggle('bg-cyan-50', active);
          tab.classList.toggle('text-slate-600', !active);
        });
        panels.forEach((panel) => {
          panel.classList.toggle('hidden', panel.getAttribute('data-panel') !== key);
        });
      };
      tabs.forEach((tab) => {
        tab.addEventListener('click', () => setActive(tab.getAttribute('data-tab')));
      });
      setActive(scope.getAttribute('data-default') || tabs[0]?.getAttribute('data-tab'));
    });
  })();
</script>
<?php require __DIR__ . '/partials/footer.php'; ?>
