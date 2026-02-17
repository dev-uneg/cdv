<?php
$pageTitle = 'Secundaria | Colegio del Valle';
$activePage = 'secundaria';
require __DIR__ . '/partials/header.php';
?>
<section class="pt-0 pb-0 bg-white">
  <div class="w-full mx-auto px-0">
    <div class="h-[480px] w-full overflow-hidden rounded-none border border-slate-200 bg-white">
      <iframe
        class="h-full w-full"
        src="https://www.youtube.com/embed/r4e50DQsLmo?rel=0"
        title="Secundaria - Colegio del Valle"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen
      ></iframe>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center">
    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">RVOE SEP 09000053/22/06/2000</p>
    <h1 class="mt-6 text-3xl md:text-4xl font-semibold text-blue-700">
      ¿Buscas Secundarias en la Colonia del Valle? ¡Conoce nuestra institucion!
    </h1>
    <p class="mt-4 text-slate-900 leading-relaxed">
      Conoce nuestros planes de estudio y las actividades extracurriculares que tus hijos podran experimentar en una de
      las mejores secundarias en la Colonia del Valle.
    </p>
    <p class="mt-12 text-xl text-blue-600">Forma parte de nuestra Comunidad</p>
    <h2 class="mt-3 text-4xl md:text-5xl font-semibold text-blue-700">Requisitos</h2>
    <p class="mt-4 text-blue-600">Para poder cursar alguno de los grados de Secundaria en Colegio Del Valle se requiere cumplir</p>
    <p class="mt-2 text-slate-900">con los siguientes documentos:</p>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[1.4fr,0.6fr]">
    <div class="space-y-8">
      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          Requisitos de ingreso para Secundaria:
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <ul class="space-y-2 list-disc pl-6">
            <li>Aprobar el examen psicometrico: Inteligencia y personalidad.</li>
            <li>Aprobar examen academico.</li>
            <li>Entrevista personal con Padres y alumnos aspirantes.</li>
            <li>Si acredita las pruebas se le hace entrega de su ficha con firma de aceptacion para iniciar con proceso de inscripcion.</li>
          </ul>
          <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">
            Documentos para entregar en el Departamento de Control Escolar en original y dos copias:
          </p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Acta de nacimiento (por ambos lados).</li>
            <li>Certificado de primaria y/o boleta original con promedio final de minimo 7.5 (por ambos lados).</li>
            <li>Carta de buena conducta.</li>
            <li>Carta de no adeudo de la escuela de procedencia.</li>
            <li>CURP (solo copias).</li>
            <li>4 fotos infantiles a color o blanco y negro.</li>
            <li>No debe de traer materias reprobadas del ciclo anterior.</li>
            <li>Certificado medico expedido por la secretaria de salud.</li>
            <li>Nota: Aspirantes extranjeros indispensable presentar acreditacion de estancia legal en nuestro pais (FM3 - FM2).</li>
            <li>Documentos originales apostillados.</li>
          </ul>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          En caso de Segundo de Secundaria agregar:
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <ul class="space-y-2 list-disc pl-6">
            <li>Boleta de 1er grado de Secundaria.</li>
          </ul>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          En caso de Tercero de Secundaria agregar:
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <ul class="space-y-2 list-disc pl-6">
            <li>Boleta de 1° de Secundaria.</li>
            <li>Boleta de 2° de Secundaria.</li>
            <li>Creditos legalizados en caso de que hayan reprobado materias en 1° o 2° de secundaria.</li>
          </ul>
        </div>
      </details>
    </div>
    <div class="flex flex-col gap-4">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/contacto">
        <i class="ri-information-line text-base"></i>
        Mas informacion
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/PDFs/secundaria/Colegio-Del-Valle-Requisitos-Secundaria.pdf" target="_blank" rel="noopener">
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
        Modelo Educativo Secundaria
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
    </div>
    <div class="min-h-[280px] rounded-3xl border border-slate-200 bg-white p-8">
      <div data-panel="modelo">
        <h3 class="text-3xl font-semibold text-slate-800">Modelo Educativo Secundaria</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Entre las mejores escuelas Secundarias en la Colonia del Valle, conoce Colegio Del Valle, una Institucion
          Educativa Privada pensada para el desarrollo optimo de adolescentes.
        </p>
        <p class="mt-4 text-slate-600 leading-relaxed">
          El Colegio Del Valle es reconocido hoy en dia, como una institucion seria, honesta y comprometida con la
          educacion de nuestra juventud, que trabaja por dotar a nuestra nacion de ciudadanos conscientes y capaces de
          enfrentar y transformar el mundo dinamico que les toco vivir. En este sentido, es sabido que al tiempo que se
          abordan los contenidos curriculares que establece la normatividad vigente de la SEP, simultaneamente hemos
          implementado estrategias de trabajo encaminadas a fomentar el trabajo colaborativo y el desarrollo de
          capacidades encaminadas para resolver problemas reales.
        </p>
      </div>
      <div class="hidden" data-panel="mision">
        <h3 class="text-3xl font-semibold text-slate-800">Mision</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          La secundaria Colegio Del Valle tiene como mision ser una institucion educativa, que ofrece la formacion de
          jovenes que sean capaces de desarrollar habilidades, actitudes y valores para su vida academica y cotidiana,
          fomentando en ellos las buenas costumbres y virtudes humanas.
        </p>
      </div>
      <div class="hidden" data-panel="vision">
        <h3 class="text-3xl font-semibold text-slate-800">Vision</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Ofrecemos una Educacion Secundaria de calidad, y de vanguardia en el modelo educativo, con reconocimiento y
          personal altamente capacitado, comprometido con la institucion.
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
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6">
    <div class="grid gap-6 md:grid-cols-3">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/PDFs/secundaria/REGLAMENTO-COMPLETO-SECUNDARIA.pdf" target="_blank" rel="noopener">
        <i class="ri-file-text-line text-base"></i>
        Reglamento
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/imgs/secundaria/Calendario-secundaria-com.webp" target="_blank" rel="noopener">
        <i class="ri-calendar-event-line text-base"></i>
        Calendario academico
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/formas-de-pago">
        <i class="ri-bank-card-line text-base"></i>
        Formas de pago
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center" data-tabscope data-default="ofrecemos">
    <h2 class="text-3xl md:text-4xl font-semibold text-slate-800">Servicios</h2>
    <p class="mt-3 text-slate-600">Conoce mas sobre lo que las mejores Escuelas Secundarias en CDMX te ofrecen.</p>

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
            <li>Grupos reducidos (maximo 23 alumnos)</li>
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
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Futbol</li>
            <li>Artes Plasticas</li>
            <li>Musica</li>
            <li>Taekwondo</li>
            <li>Porras</li>
            <li>Taller de tareas</li>
            <li>Nivelacion ingles</li>
          </ul>
        </div>
        <div class="hidden" data-panel="plan">
          <div class="grid gap-8 md:grid-cols-3 text-slate-600">
            <div>
              <p class="text-2xl font-semibold text-slate-800">Primero</p>
              <ul class="mt-3 list-disc pl-6 space-y-1">
                <li>Espanol I</li>
                <li>Matematicas I</li>
                <li>Ciencias I (enfasis en Biologia)</li>
                <li>Geografia de Mexico y del Mundo</li>
                <li>Lengua Extranjera I</li>
                <li>Educacion Fisica I</li>
                <li>Artes (Danza)</li>
                <li>Introduccion a Fisica y Quimica</li>
                <li>Desarrollo Humano</li>
                <li>Tecnologia I (Diseno Grafico, Diseno y Creacion Plastica, Turismo, Electronica, Diseno Arquitectonico e Informatica)</li>
              </ul>
            </div>
            <div>
              <p class="text-2xl font-semibold text-slate-800">Segundo</p>
              <ul class="mt-3 list-disc pl-6 space-y-1">
                <li>Espanol II</li>
                <li>Matematicas II</li>
                <li>Ciencias II (enfasis en Fisica)</li>
                <li>Historia I</li>
                <li>Formacion Civica y Etica I</li>
                <li>Lengua Extranjera II</li>
                <li>Educacion Fisica II</li>
                <li>Artes (Danza)</li>
                <li>Quimica</li>
                <li>Tecnologia II (Diseno Grafico, Diseno y Creacion Plastica, Turismo, Electronica, Diseno Arquitectonico e Informatica)</li>
              </ul>
            </div>
            <div>
              <p class="text-2xl font-semibold text-slate-800">Tercero</p>
              <ul class="mt-3 list-disc pl-6 space-y-1">
                <li>Espanol III</li>
                <li>Matematicas III</li>
                <li>Ciencias III (enfasis en Quimica)</li>
                <li>Historia II</li>
                <li>Formacion Civica y Etica II</li>
                <li>Lengua Extranjera III</li>
                <li>Educacion Fisica III</li>
                <li>Artes (Danza)</li>
                <li>Fisica</li>
                <li>Tecnologia III (Diseno Grafico, Diseno y Creacion Plastica, Turismo, Electronica, Diseno Arquitectonico e Informatica)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6">
    <h2 class="text-4xl md:text-5xl font-semibold text-indigo-700 text-center">Preguntas frecuentes</h2>
    <div class="mt-10 space-y-5">
      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          ¿Como sacar el certificado de secundaria?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            Antes de sacar el certificado de secundaria, el estudiante debio culminar sus estudios en uno de los colegios
            autorizados por la Secretaria de Educacion Publica (SEP). A traves de la plataforma de esta institucion, asi
            como del INEA, puedes sacar el certificado de secundaria en caso de haberlo extraviado.
          </p>
          <p>Para sacar el certificado de educacion secundaria deberas seguir los siguientes pasos:</p>
          <ul class="list-disc pl-6 space-y-1">
            <li>Se debe ingresar al sitio web del INEA.</li>
            <li>Suministrar al sistema el numero CURP.</li>
            <li>Seleccionar el nivel "secundaria".</li>
            <li>Oprimir descargar para obtener tu certificado.</li>
          </ul>
          <p>
            Colegio del Valle es una institucion autorizada por el SEP y las certificaciones de los alumnos en todas las
            etapas estan cargadas al sistema INEA. Puedes obtener el historial academico de tu hijo ingresando al sistema
            del colegio.
          </p>
          <p>¡Un clic y accede rapido y facil al record academico de tu hijo!</p>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          ¿Cuando salen de vacaciones los de secundaria?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            El calendario para la educacion de la SEP indica que las clases culminan oficialmente el proximo 19 de julio.
            No obstante, como los profesores tomaran un ciclo de formacion previo a esta fecha, las vacaciones para los
            alumnos de kinder, primaria y secundaria iniciaran el 16 de julio. El calendario para los estudiantes de
            secundaria del Colegio Del Valle se rige bajo el mismo esquema.
          </p>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          Se me pasaron las preinscripciones de secundaria, ¿que puedo hacer?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            Si has culminado la primaria en esta institucion, en Colegio Del Valle las inscripciones a educacion
            secundaria se realizan de forma automatica. Recuerda, el sistema educativo mexicano garantiza el derecho que
            tiene todo nino a la educacion.
          </p>
          <p>
            Si perdiste la oportunidad en las preinscripciones, espera a que la SEP publique las fechas para inscripciones
            extemporaneas. ¡Animo!
          </p>
          <p>
            Colegio del Valle resguarda el derecho a la educacion, contacta a traves de su sitio web y numeros de WhatsApp
            para formalizar la inscripcion.
          </p>
          <p>¡Que tu hijo no se quede fuera!</p>
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
