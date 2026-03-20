<?php
$pageTitle = 'Preparatoria | Colegio del Valle';
$pageDescription = 'Preparatoria en Colegio del Valle: clave UNAM, excelencia académica y orientacion vocacional.';
$activePage = 'preparatoria';
require __DIR__ . '/partials/header.php';
$defaultInterest = 'Prepa';
$sourcePage = 'Pagina Preparatoria CDV';
$turnstileConfig = [];
$turnstileConfigPath = __DIR__ . '/../config/turnstile.local.php';
if (file_exists($turnstileConfigPath)) {
    $turnstileConfig = require $turnstileConfigPath;
}
$turnstileSiteKey = (string) ($turnstileConfig['site_key'] ?? getenv('TURNSTILE_SITE_KEY') ?? '');
$turnstileEnabled = $turnstileSiteKey !== '' && $turnstileSiteKey !== 'PON_AQUI_TU_TURNSTILE_SITE_KEY';
?>
<?php if ($turnstileEnabled): ?>
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<?php endif; ?>
<section class="pt-0 pb-0 bg-white">
  <div class="w-full mx-auto px-0">
    <div class="h-[480px] w-full overflow-hidden rounded-none border border-slate-200 bg-white">
      <iframe
        class="h-full w-full"
        src="https://www.youtube-nocookie.com/embed/83nEDQ2AMgc?rel=0"
        title="Preparatoria - Colegio del Valle"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen
      ></iframe>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-2 items-start lg:items-center">
    <div class="text-center lg:text-left">
      <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">Clave UNAM 1172</p>
      <h1 class="mt-6 text-3xl md:text-4xl font-semibold text-blue-700">
        ¿Buscas Preparatorias en la Colonia del Valle? ¡Conoce nuestra institución!
      </h1>
      <p class="mt-4 text-slate-900 leading-relaxed">
        La formación de nivel medio superior definirá las metas que el alumno se proponga para su futuro; la carrera a
        escoger, en que se quiere especializar y que area laboral prefiere. Haz la elección correcta con una de las
        mejores preparatorias en la Colonia del Valle: Colegio Del Valle.
      </p>
    </div>
    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
      <?php require __DIR__ . '/partials/admisiones-form.php'; ?>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center">
    <p class="text-xl text-blue-600">Forma parte de nuestra Comunidad</p>
    <h2 class="mt-3 text-4xl md:text-5xl font-semibold text-blue-700">Requisitos</h2>
    <p class="mt-4 text-blue-600">Para poder cursar alguno de los grados de Preparatoria en Colegio Del Valle se requiere cumplir</p>
    <p class="mt-2 text-slate-900">con los siguientes documentos:</p>
  </div>
  <div class="mt-12 max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[1.4fr,0.6fr]">
    <div class="space-y-8">
      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          Requisitos de inscripción para alumnos procedentes de otro plantel 4° año
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <p class="font-semibold text-slate-800">17 años, cumplidos en el mes de agosto.</p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Solicitud de Inscripción totalmente requisitada.</li>
            <li>Haber presentado examen de admisión.</li>
            <li>Haber presentado entrevista familiar.</li>
          </ul>
          <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">
            Entregar la siguiente documentación en original y 2 copias:
          </p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Acta de nacimiento.</li>
            <li>Certificado de secundaria.</li>
            <li>Carta de buena conducta o recomendacion.</li>
            <li>CURP (solo copias) amplificado a 200%.</li>
            <li>4 fotografias tamaño infantil blanco y negro papel mate.</li>
            <li>Boleta de calificaciones de la escuela de procedencia.</li>
            <li>Historial académico de la UNAM.</li>
            <li>Constancia de estudios con las últimas calificaciones incluyendo extraordinarios.</li>
          </ul>
          <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">En caso de recursar:</p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Credencial de la UNAM (en caso de recursar).</li>
            <li>Historial académico de la UNAM (en caso de recursar).</li>
          </ul>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          Requisitos de inscripción 5° año:
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <p class="font-semibold text-slate-800">18 años.</p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Llenar solicitud de Inscripción.</li>
            <li>Haber presentado examen de admisión.</li>
            <li>Haber presentado entrevista familiar.</li>
          </ul>
          <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">
            Entregar la siguiente documentación en original y 2 copias:
          </p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Acta de nacimiento.</li>
            <li>Certificado de secundaria.</li>
            <li>Carta de buena conducta o recomendacion.</li>
            <li>CURP (solo copias).</li>
            <li>4 fotografias tamaño infantil blanco y negro papel mate.</li>
            <li>Boleta de calificaciones de la escuela de procedencia.</li>
            <li>Historial académico de la UNAM.</li>
            <li>Constancia de estudios con las últimas calificaciones incluyendo extraordinarios.</li>
          </ul>
          <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">En caso de recursar:</p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Credencial de la UNAM (en caso de recursar).</li>
            <li>Historial académico de la UNAM (en caso de recursar).</li>
          </ul>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-6 open:shadow-sm">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          Requisitos de inscripción 6° año:
        </summary>
        <div class="mt-5 space-y-4 text-slate-600">
          <p class="font-semibold text-slate-800">19 años.</p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Llenar solicitud de Inscripción.</li>
            <li>Haber presentado examen de admisión.</li>
            <li>Haber presentado entrevista familiar.</li>
          </ul>
          <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">
            Entregar la siguiente documentación en original y 2 copias:
          </p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Acta de nacimiento.</li>
            <li>Certificado de secundaria.</li>
            <li>Carta de buena conducta o recomendacion.</li>
            <li>CURP (solo copias).</li>
            <li>4 fotografias tamaño infantil blanco y negro papel mate.</li>
            <li>2 fotografias tamaño diploma.</li>
            <li>3 fotografias tamaño credencial 5 x 3.5 cm ovaladas.</li>
            <li>Boleta de calificaciones de la escuela de procedencia.</li>
          </ul>
          <p class="text-sm font-semibold uppercase tracking-wide text-slate-700">En caso de recursar:</p>
          <ul class="space-y-2 list-disc pl-6">
            <li>Credencial de la UNAM (en caso de recursar).</li>
            <li>Historial académico de la UNAM (en caso de recursar).</li>
          </ul>
        </div>
      </details>
    </div>
    <div class="flex flex-col gap-4">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/contacto/">
        <i class="text-base" data-lucide="info"></i>
        Mas información
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/_assets/PDFs/preparatoria/Colegio-Del-Valle-Requisitos-Preparatoria-2023.pdf" target="_blank" rel="noopener">
        <i class="text-base" data-lucide="download"></i>
        Descargar requisitos
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[0.9fr,1.1fr] items-start" data-tabscope data-default="elegirnos">
    <div class="rounded-3xl border border-slate-200 bg-white p-6 space-y-3">
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-cyan-600 shadow-sm" type="button" data-tab="elegirnos">
        <i class="text-lg" data-lucide="star"></i>
        ¿Por qué elegirnos?
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="modelo">
        <i class="text-lg" data-lucide="book-open"></i>
        Modelo Educativo Preparatoria
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="mision">
        <i class="text-lg" data-lucide="flag"></i>
        Misión
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="vision">
        <i class="text-lg" data-lucide="eye"></i>
        Visión
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="valores">
        <i class="text-lg" data-lucide="heart"></i>
        Valores
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="talleres">
        <i class="text-lg" data-lucide="brush"></i>
        Talleres extraescolares
      </button>
      <button class="inline-flex w-full items-center gap-3 rounded-2xl border border-slate-200 px-4 py-3 text-left text-sm font-semibold text-slate-600 hover:bg-slate-50" type="button" data-tab="horario">
        <i class="text-lg" data-lucide="clock-3"></i>
        Horarios
      </button>
    </div>
    <div class="min-h-[280px] rounded-3xl border border-slate-200 bg-white p-8">
      <div data-panel="elegirnos">
        <h3 class="text-3xl font-semibold text-slate-800">¿Por qué elegirnos?</h3>
        <div class="mt-4 space-y-4 text-slate-600 leading-relaxed">
          <p>47 años nos respaldan, somos una Escuela Preparatoria que se recomienda de familia en familia.</p>
          <p>Instalaciones modernas y agradables así como una excelente ubicación.</p>
          <p>
            Seguimiento personalizado a los alumnos a través de los orientadores, con el objeto de tener acciones
            preventivas para rescate de materias, ademas de contar con un Coordinador Académico y una Coordinacion de
            orientadores.
          </p>
          <p>
            Contamos con un area de psicología para atención y seguimiento de los problemas frecuentes que se presentan y
            son propios de la edad. Muy importante porque cada vez es más frecuente la problemática que presentan hoy en
            día los jóvenes y padres de familia. Se trabaja en conjunto con profesores, coordinadores y padres de familia.
          </p>
          <p>
            Nuestro Programa llamado Horizontes brinda apoyo y seguimiento para materias con alto grado de dificultad como
            Matemáticas, Física, Química.
          </p>
          <p>
            Somos una escuela segura con operativos de vigilancia en el ingreso, egreso y estancia de los alumnos, somos
            una escuela A PUERTA CERRADA.
          </p>
          <p>Profesorado de calidad autorizados por la UNAM, comprometidos con el desarrollo integral de nuestros alumnos.</p>
          <p>En areas de servicio administrativas contamos con horario extendido (9:00 a 14:00 y de 16:00 a 19:00).</p>
          <div>
            <p class="font-semibold text-slate-800">Las areas de servicio administrativas son:</p>
            <ul class="mt-2 list-disc pl-6 space-y-1">
              <li>Admisiones, recepcion de documentos, uniformes.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="hidden" data-panel="modelo">
        <h3 class="text-3xl font-semibold text-slate-800">Modelo Educativo Preparatoria</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          El modelo educativo de Preparatoria Colegio Del Valle, asegura la alta calidad en sus funciones académicas y
          administrativas, obligando a una sinergia de superacion y eficiencia entre alumnos, profesores y autoridades.
          Sus principios estan encaminados a apoyar el desarrollo integral de los jóvenes mediante la conceptualizacion
          del conocimiento como un proceso comprensivo de información actualizada y sobre todo en un ambiente humanista.
        </p>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Se basa en la teoria del Constructivismo: los seres humanos son producto de su capacidad para adquirir
          conocimientos y para reflexionar sobre si mismos, lo que les ha permitido anticipar, explicar y controlar
          propositivamente la naturaleza, y construir la cultura.
        </p>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Se considera Integral: porque considera y atiende todas las dimensiones del educando (cognitivas, axiologicas,
          fisicas y sociales).
        </p>
      </div>
      <div class="hidden" data-panel="mision">
        <h3 class="text-3xl font-semibold text-slate-800">Misión</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          La Preparatoria Colegio Del Valle tiene como misión ser una institución educativa, que ofrece la formación de
          jóvenes que pueden desarrollar habilidades, actitudes y valores para su vida académica y cotidiana, fomentando
          en ellos las buenas costumbres y virtudes humanas.
        </p>
      </div>
      <div class="hidden" data-panel="vision">
        <h3 class="text-3xl font-semibold text-slate-800">Visión</h3>
        <p class="mt-4 text-slate-600 leading-relaxed">
          Ofrecemos una Educación Preparatoria de calidad, y de vanguardia en el modelo educativo, con reconocimiento y
          personal altamente capacitado, comprometido con la institución.
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
          <li>Capoeira</li>
          <li>Ajedrez</li>
        </ul>
      </div>
      <div class="hidden" data-panel="horario">
        <h3 class="text-3xl font-semibold text-slate-800">Horarios</h3>
        <p class="mt-4 text-slate-600">Lunes a Viernes</p>
        <p class="mt-2 text-slate-600">Entrada de 6:30 a 7:00 a.m.</p>
        <p class="mt-2 text-slate-600">Salida 13:45 hrs</p>
        <p class="mt-2 text-slate-600">Servicio de Comedor 15:00 hrs</p>
        <p class="mt-2 text-slate-600">Talleres Extraescolares de 15:30 a 17:30 hrs</p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center" data-tabscope data-default="plan">
    <h2 class="text-3xl md:text-4xl font-semibold text-slate-800">Servicios</h2>
    <p class="mt-3 text-slate-600">¿Estas buscando Preparatorias en Benito Juarez? Conoce lo que tenemos para ti.</p>

    <div class="mt-8">
      <div class="inline-flex flex-wrap justify-center gap-2 rounded-full border border-slate-200 bg-white p-2 text-xs font-semibold uppercase tracking-[0.2em] text-slate-600">
        <button class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-cyan-700" type="button" data-tab="plan">
          <i class="text-base" data-lucide="list"></i>
          Plan de estudios
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="actividades">
          <i class="text-base" data-lucide="brush"></i>
          Actividades
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="talleres">
          <i class="text-base" data-lucide="palette"></i>
          Talleres vespertinos
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="horario-serv">
          <i class="text-base" data-lucide="clock-3"></i>
          Horarios
        </button>
        <button class="inline-flex items-center gap-2 rounded-full px-4 py-2 hover:bg-slate-50" type="button" data-tab="ofrecemos">
          <i class="text-base" data-lucide="check"></i>
          Ofrecemos
        </button>
      </div>
      <div class="mt-6 rounded-3xl border border-slate-200 bg-white p-8 text-left">
        <div class="hidden" data-panel="talleres">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Futbol</li>
            <li>Baloncesto</li>
            <li>Voleibol</li>
            <li>Tocho Bandera</li>
            <li>Capoeira</li>
            <li>Ajedrez</li>
          </ul>
        </div>
        <div class="hidden" data-panel="plan">
          <div class="grid gap-8 lg:grid-cols-3 text-slate-600">
            <div>
              <p class="text-2xl font-semibold text-slate-800">Cuarto</p>
              <ul class="mt-3 list-disc pl-6 space-y-1">
                <li>Matemáticas IV</li>
                <li>Física III</li>
                <li>Lengua Espanola</li>
                <li>Logica</li>
                <li>Historia Universal III</li>
                <li>Educación Estetica y Artistica IV</li>
                <li>Geografia</li>
                <li>Educación Física IV</li>
                <li>Informatica</li>
                <li>Inglés IV</li>
                <li>Orientacion Educativa IV</li>
                <li>Dibujo II</li>
              </ul>
            </div>
            <div>
              <p class="text-2xl font-semibold text-slate-800">Quinto</p>
              <ul class="mt-3 list-disc pl-6 space-y-1">
                <li>Matemáticas V</li>
                <li>Química III</li>
                <li>Biología IV</li>
                <li>Educación para la Salud</li>
                <li>Historia de Mexico II</li>
                <li>Etimologias Grecolatinas</li>
                <li>Inglés V</li>
                <li>Educación Estetica y Artistica V</li>
                <li>Orientacion Educativa V</li>
                <li>Literatura Universal</li>
                <li>Informatica II</li>
                <li>Etica</li>
                <li>Educación Física V</li>
              </ul>
            </div>
            <div>
              <p class="text-2xl font-semibold text-slate-800">Sexto</p>
              <p class="mt-3 font-semibold text-slate-800">Tronco comun</p>
              <ul class="mt-2 list-disc pl-6 space-y-1">
                <li>Derecho</li>
                <li>Informatica III</li>
                <li>Inglés VI</li>
                <li>Matemáticas VI</li>
                <li>Psicologia</li>
                <li>Literatura Mexicana e Iberoamericana</li>
                <li>Educación Física VI</li>
              </ul>
              <p class="mt-4 font-semibold text-slate-800">Area I Fisico Matemáticas y de las Ingenierias</p>
              <ul class="mt-2 list-disc pl-6 space-y-1">
                <li>Física IV</li>
                <li>Dibujo Constructivo II</li>
                <li>Química IV</li>
                <li>Temas selectos de Matemáticas</li>
              </ul>
              <p class="mt-4 font-semibold text-slate-800">Area II Ciencias Biologicas y de la Salud</p>
              <ul class="mt-2 list-disc pl-6 space-y-1">
                <li>Física IV</li>
                <li>Química IV</li>
                <li>Biología V</li>
                <li>Temas selectos de Biología</li>
              </ul>
              <p class="mt-4 font-semibold text-slate-800">Area III Ciencias Sociales</p>
              <ul class="mt-2 list-disc pl-6 space-y-1">
                <li>Geografia Economica</li>
                <li>Introduccion al Estudio de las Ciencias Sociales y Economicas</li>
                <li>Problemas Sociales, Politicos y Economicos de Mexico</li>
                <li>Contabilidad y Gestion Administrativa</li>
                <li>Estadistica y Probabilidad</li>
              </ul>
              <p class="mt-4 font-semibold text-slate-800">Area IV Humanidades y Artes</p>
              <ul class="mt-2 list-disc pl-6 space-y-1">
                <li>Historia de la Cultura</li>
                <li>Historia de las Doctrinas Filosoficas</li>
                <li>Introduccion al Estudio de las Ciencias Sociales y Economicas</li>
                <li>Historia del Arte</li>
                <li>Comunicación Visual</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="hidden" data-panel="actividades">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Teatro</li>
            <li>Porras</li>
            <li>Estudiantina</li>
            <li>Pintura</li>
            <li>Danza</li>
            <li>Selecciones deportivas</li>
            <li>Participacion en actividades desarrolladas por la UNAM.</li>
            <li>Actividades Sociales.</li>
            <li>Actividades de integracion y multidisciplinarias</li>
            <li>Visitas guiadas</li>
            <li>Concursos de matemáticas</li>
            <li>Ajedrez</li>
            <li>Oratoria en el idioma inglés</li>
            <li>Semana cultural.</li>
            <li>Semana verde</li>
            <li>Feria de ciencias</li>
            <li>Programa de Horizontes (apoyo de materias con deficiencia académica)</li>
            <li>Actividades Civicas</li>
            <li>Intercambios Internacionales Culturales</li>
          </ul>
        </div>
        <div class="hidden" data-panel="horario-serv">
          <p class="text-slate-600">Lunes a Viernes</p>
          <p class="mt-2 text-slate-600">Entrada de 6:30 a 7:00 a.m.</p>
          <p class="mt-2 text-slate-600">Salida 13:45 hrs</p>
          <p class="mt-2 text-slate-600">Servicio de Comedor 15:00 hrs</p>
          <p class="mt-2 text-slate-600">Talleres Extraescolares de 15:30 a 17:30 hrs</p>
        </div>
        <div class="hidden" data-panel="ofrecemos">
          <ul class="list-disc pl-6 space-y-2 text-slate-600">
            <li>Grupos reducidos (maximo 23 alumnos)</li>
            <li>Profesorado altamente calificado</li>
            <li>Inglés avanzado</li>
            <li>Servicios</li>
            <li>Biblioteca y hemeroteca</li>
            <li>Servicios de cafeteria</li>
            <li>Papeleria</li>
            <li>Enfermeria</li>
            <li>Laboratorios de computo</li>
            <li>Aula de música</li>
            <li>Internet inalambrico</li>
            <li>Instalaciones de vanguardia</li>
            <li>Seguridad Interna</li>
            <li>Convenios institucionales</li>
            <li>Escuela para padres</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 text-center">
    <p class="text-lg text-slate-600">Descubre más sobre las Preparatorias Privadas en CDMX</p>
    <div class="mt-6 grid gap-4 md:grid-cols-4">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/_assets/PDFs/preparatoria/REGLAMENTO-OFICIAL-PREPA.pdf" target="_blank" rel="noopener">
        <i class="text-base" data-lucide="file-text"></i>
        Reglamento
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/_imgs/preparatoria/Calendario-preparatoria.webp" target="_blank" rel="noopener">
        <i class="text-base" data-lucide="calendar-days"></i>
        Calendario académico
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="<?= $baseUrl ?>/aviso-de-privacidad/" target="_blank" rel="noopener">
        <i class="text-base" data-lucide="shield-check"></i>
        Aviso de privacidad
      </a>
      <a class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-slate-300 px-6 py-3 text-center text-xs font-semibold uppercase tracking-[0.2em] text-slate-700" href="#">
        <i class="text-base" data-lucide="building"></i>
        DGIRE UNAM
      </a>
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
          Preparatoria Colegio del Valle: costos que son una inversion para el exito
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            Es fundamental que los padres comprendan que proveer una educación de calidad es invertir en el futuro de sus
            hijos. Colegio del Valle esta consciente de ello y comprometido con una educación de excelencia. Los
            estudiantes de educación preparatoria son formados en instalaciones de vanguardia.
          </p>
          <p>
            Contamos con clases intensivas de inglés, nuestro plan de estudios retoma el de la Escuela Nacional
            Preparatoria de la UNAM, organizamos eventos inter escolares e intercambios internacionales. Estos son solo
            algunos de los motivos para seleccionar a Colegio del Valle y asistir a los jóvenes para alcanzar el exito
            profesional.
          </p>
          <p>Para más información sobre los recursos y costos de la Prepa Del Valle haz clic aquí.</p>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          ¿Qué documento te dan al terminar la preparatoria?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            El documento que te entregan al culminar la prepa se llama Certificado de Bachillerato. Es un título oficial,
            emitido por la institución educativa de donde egresaste y esta autenticado por el Estado Mexicano. Este
            certificado da cuenta de que has cumplido con todo el régimen académico y es importante debido a que es el
            comprobante requerido para acceder a la educación superior o el mercado laboral.
          </p>
          <p>
            Para que un certificado de bachillerato sea considerado legal, debe estar verificado por la Secretaria de
            Educación Publica (SEP), llevar firma autenticada del director del colegio y la entidad federativa. Para
            aprender como validar un certificado de preparatoria, haz clic en el enlace proporcionado.
          </p>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          ¿Puedo ingresar sin uniforme de preparatoria Colegio del Valle?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            El uniforme en educación preparatoria es de uso reglamentario. El mismo no debe llevar ningún dibujo, letrero
            o color distinto a los dispuestos por Colegio del Valle en su reglamento. El incumplimiento de este codigo de
            vestimenta puede resultar en la negacion de acceso al colegio y posibles sanciones.
          </p>
        </div>
      </details>

      <details class="group rounded-2xl border border-slate-200 p-5">
        <summary class="flex cursor-pointer items-center gap-4 list-none text-lg font-semibold text-slate-800">
          <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-600 text-xl">
            <span class="group-open:hidden">+</span>
            <span class="hidden group-open:inline">−</span>
          </span>
          ¿Cómo es el uniforme de preparatoria Colegio del Valle?
        </summary>
        <div class="mt-4 space-y-3 text-slate-600">
          <p>
            Los uniformes son distintos para chicos y chicas, y varian también segun el día. Existe el uniforme
            deportivo, el de uso diario y el de invierno. Generalmente, los y las estudiantes utilizan pantalon o falda
            escolar, playera tipo polo de color blanco y sueter azul marino, estas dos últimas prendas llevan el logo de
            la escuela. En cuanto a calzado, se usan mocasines negros y medias azul marino.
          </p>
          <p>¡Mucha suerte en esta nueva etapa escolar!</p>
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
