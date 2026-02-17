<?php
$slug = 'evaluacion-formativa-nueva-escuela-mexicana';
$pageTitle = 'Evaluación formativa en la Nueva Escuela Mexicana | Colegio del Valle';
$activePage = '';
require __DIR__ . '/../partials/header.php';

$posts = include __DIR__ . '/data.php';
$post = $posts[0] ?? null;
?>

<section class="py-12 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[1fr,0.35fr] items-start">
    <article class="max-w-none">
      <div class="mb-8 h-[450px] overflow-hidden rounded-[32px] border border-slate-200 bg-slate-100">
        <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/blog/post-1.jpg" alt="Evaluación formativa en la Nueva Escuela Mexicana" loading="lazy" />
      </div>
      <p class="text-xs uppercase tracking-[0.2em] text-slate-400">10 febrero 2026 · Educación Integral</p>
      <h1 class="mt-2 text-3xl md:text-4xl font-semibold text-slate-800">Evaluación formativa en la Nueva Escuela Mexicana</h1>
      <p class="mt-5 text-base leading-relaxed text-slate-700">
        La transformación educativa impulsada en México durante los últimos años ha colocado a la evaluación como un elemento
        central del proceso de enseñanza-aprendizaje. En este contexto, la evaluación formativa en la Nueva Escuela Mexicana
        se consolida como una herramienta pedagógica que prioriza el acompañamiento, la reflexión y el desarrollo integral
        del estudiante, más allá de la calificación numérica.
      </p>

      <div class="mt-8 rounded-3xl border border-slate-200 bg-slate-50 p-6">
        <h2 class="text-xl font-semibold text-slate-800">Índice de contenido</h2>
        <ol class="mt-4 space-y-2 text-sm text-slate-700 list-decimal pl-5">
          <li><a class="hover:text-indigo-600" href="#que-es">¿Qué es la evaluación formativa en la NEM?</a></li>
          <li><a class="hover:text-indigo-600" href="#caracteristicas">Características de la evaluación formativa NEM</a></li>
          <li><a class="hover:text-indigo-600" href="#importancia">Importancia de la evaluación formativa en la Nueva Escuela Mexicana</a></li>
          <li><a class="hover:text-indigo-600" href="#como-se-aplica">¿Cómo se aplica la evaluación formativa en la NEM?</a></li>
          <li><a class="hover:text-indigo-600" href="#observacion">Observación continua</a></li>
          <li><a class="hover:text-indigo-600" href="#retroalimentacion">Retroalimentación constante</a></li>
          <li><a class="hover:text-indigo-600" href="#autoevaluacion">Autoevaluación y coevaluación</a></li>
          <li><a class="hover:text-indigo-600" href="#instrumentos">Instrumentos de evaluación formativa</a></li>
          <li><a class="hover:text-indigo-600" href="#diferencias">Diferencias entre evaluación formativa y evaluación sumativa</a></li>
          <li><a class="hover:text-indigo-600" href="#rol-docente">Rol del docente en la evaluación formativa NEM</a></li>
          <li><a class="hover:text-indigo-600" href="#retos">Retos de la evaluación formativa en la NEM</a></li>
          <li><a class="hover:text-indigo-600" href="#faq">Preguntas frecuentes</a></li>
          <li><a class="hover:text-indigo-600" href="#conoce-cdv">Conoce Colegio Del Valle y su modelo educativo</a></li>
          <li><a class="hover:text-indigo-600" href="#fuentes">Fuentes de consulta</a></li>
        </ol>
      </div>

      <section class="mt-10 space-y-6 text-slate-700">
        <div id="que-es">
          <h2 class="text-2xl font-semibold text-slate-800">¿Qué es la evaluación formativa en la NEM?</h2>
          <p class="mt-3 leading-relaxed">
            La evaluación formativa NEM es un proceso continuo y sistemático que tiene como finalidad identificar avances,
            dificultades y oportunidades de mejora en el aprendizaje de los estudiantes, con el propósito de retroalimentar
            y ajustar la enseñanza.
          </p>
          <p class="mt-3 leading-relaxed">
            A diferencia de los modelos tradicionales centrados en exámenes y resultados finales, la evaluación formativa se
            enfoca en el proceso. Permite observar cómo aprende el estudiante, cómo construye el conocimiento y qué apoyos
            requiere para avanzar. Este enfoque se alinea con los principios de inclusión, equidad y aprendizaje significativo
            que promueve la Nueva Escuela Mexicana.
          </p>
        </div>

        <div id="caracteristicas">
          <h2 class="text-2xl font-semibold text-slate-800">Características de la evaluación formativa NEM</h2>
          <p class="mt-3 leading-relaxed">
            La evaluación formativa NEM presenta una serie de características que la distinguen de otros tipos de evaluación:
          </p>
          <ul class="mt-3 list-disc pl-6 space-y-2">
            <li>Es continua, ya que se aplica durante todo el proceso educativo.</li>
            <li>Es cualitativa, pues valora el desempeño, las habilidades y las actitudes, no solo los resultados.</li>
            <li>Es flexible, adaptándose a los contextos, ritmos y necesidades de cada estudiante.</li>
            <li>Es participativa, involucrando a docentes, estudiantes y, en algunos casos, a las familias.</li>
            <li>Es orientadora, ya que proporciona información para mejorar la práctica docente y el aprendizaje del alumno.</li>
          </ul>
          <p class="mt-3 leading-relaxed">
            Estas características refuerzan el enfoque humanista de la NEM y fortalecen la evaluación como una herramienta pedagógica,
            no punitiva.
          </p>
        </div>

        <div id="importancia">
          <h2 class="text-2xl font-semibold text-slate-800">Importancia de la evaluación formativa en la Nueva Escuela Mexicana</h2>
          <p class="mt-3 leading-relaxed">
            La relevancia de la evaluación formativa nueva escuela mexicana radica en su capacidad para transformar la relación
            entre enseñar y evaluar. Este tipo de evaluación permite detectar dificultades de aprendizaje de manera oportuna y
            atenderlas antes de que se conviertan en rezagos.
          </p>
          <p class="mt-3 leading-relaxed">
            Además, promueve la autonomía del estudiante al hacerlo consciente de sus avances y áreas de mejora. Desde esta perspectiva,
            la evaluación deja de ser un momento aislado para convertirse en un proceso de acompañamiento constante, coherente con los
            ejes articuladores de la Nueva Escuela Mexicana (NEM), como la inclusión, el pensamiento crítico y la responsabilidad social.
          </p>
        </div>

        <div id="como-se-aplica">
          <h2 class="text-2xl font-semibold text-slate-800">¿Cómo se aplica la evaluación formativa en la NEM?</h2>
          <p class="mt-3 leading-relaxed">
            La aplicación de la evaluación formativa requiere estrategias claras y una práctica docente reflexiva. A continuación,
            se describen algunas de las formas más comunes de implementarla en el aula.
          </p>
        </div>

        <div id="observacion">
          <h3 class="text-xl font-semibold text-slate-800">Observación continua</h3>
          <p class="mt-2 leading-relaxed">
            La observación sistemática es uno de los pilares de la evaluación formativa. El docente observa la participación, el desempeño,
            las interacciones y los procesos cognitivos de los estudiantes durante las actividades diarias.
          </p>
          <p class="mt-2 leading-relaxed">
            Esta observación permite identificar fortalezas, estilos de aprendizaje y áreas que requieren apoyo, facilitando la toma de
            decisiones pedagógicas oportunas.
          </p>
        </div>

        <div id="retroalimentacion">
          <h3 class="text-xl font-semibold text-slate-800">Retroalimentación constante</h3>
          <p class="mt-2 leading-relaxed">
            La retroalimentación es un elemento clave de la evaluación formativa. No se limita a señalar errores, sino que orienta al
            estudiante sobre cómo mejorar, qué estrategias puede emplear y cuáles han sido sus avances.
          </p>
          <p class="mt-2 leading-relaxed">
            Una retroalimentación efectiva es clara, específica y constructiva, fortaleciendo la motivación y el compromiso del alumno
            con su aprendizaje.
          </p>
        </div>

        <div id="autoevaluacion">
          <h3 class="text-xl font-semibold text-slate-800">Autoevaluación y coevaluación</h3>
          <p class="mt-2 leading-relaxed">
            La NEM promueve la participación activa del estudiante en su proceso evaluativo. La autoevaluación permite que el alumno
            reflexione sobre su propio desempeño, mientras que la coevaluación fomenta el análisis colaborativo entre pares.
          </p>
          <p class="mt-2 leading-relaxed">
            Estas prácticas desarrollan habilidades cognitivas, pensamiento crítico y responsabilidad, aspectos esenciales para el
            aprendizaje a lo largo de la vida.
          </p>
        </div>

        <div id="instrumentos">
          <h3 class="text-xl font-semibold text-slate-800">Instrumentos de evaluación formativa</h3>
          <p class="mt-2 leading-relaxed">
            Los instrumentos de evaluación formativa en la NEM son diversos y se seleccionan según el propósito de aprendizaje. Algunos
            de los más utilizados son los siguientes.
          </p>
          <ul class="mt-3 list-disc pl-6 space-y-2">
            <li>Rúbricas descriptivas</li>
            <li>Listas de cotejo</li>
            <li>Registros anecdóticos</li>
            <li>Portafolios de evidencias</li>
            <li>Diarios de aprendizaje</li>
            <li>Escalas de valoración</li>
          </ul>
          <p class="mt-3 leading-relaxed">
            Estos instrumentos permiten documentar el proceso de aprendizaje de manera sistemática y ofrecen información útil para la
            mejora continua tanto del alumno como del docente.
          </p>
        </div>

        <div id="diferencias">
          <h2 class="text-2xl font-semibold text-slate-800">Diferencias entre evaluación formativa y evaluación sumativa</h2>
          <p class="mt-3 leading-relaxed">
            Comprender la diferencia entre ambos enfoques resulta fundamental dentro del modelo educativo NEM.
          </p>
          <p class="mt-3 leading-relaxed">
            La evaluación formativa se centra en el proceso y tiene como objetivo mejorar el aprendizaje en curso. Es flexible, cualitativa
            y orientadora.
          </p>
          <p class="mt-3 leading-relaxed">
            Por su parte, la evaluación sumativa se aplica al final de un periodo para verificar el nivel de logro alcanzado. Generalmente,
            se expresa en calificaciones y tiene una función acreditativa, como se ha hecho tradicionalmente en México.
          </p>
          <p class="mt-3 leading-relaxed">
            En la NEM, ambos tipos de evaluación coexisten, pero la evaluación formativa adquiere un papel protagónico al orientar la
            enseñanza y favorecer aprendizajes significativos.
          </p>
        </div>

        <div id="rol-docente">
          <h2 class="text-2xl font-semibold text-slate-800">Rol del docente en la evaluación formativa NEM</h2>
          <p class="mt-3 leading-relaxed">
            El rol del docente en la evaluación NEM es determinante para el éxito de este enfoque. El maestro deja de ser un evaluador
            exclusivamente calificador y se convierte en un mediador del aprendizaje. Entre sus funciones destacan las enumeradas a continuación.
          </p>
          <ul class="mt-3 list-disc pl-6 space-y-2">
            <li>Diseñar estrategias de evaluación acordes a los aprendizajes esperados.</li>
            <li>Observar y analizar el desempeño de los estudiantes.</li>
            <li>Proporcionar retroalimentación oportuna y pertinente.</li>
            <li>Ajustar la enseñanza con base en los resultados de la evaluación.</li>
            <li>Promover la reflexión y la participación del alumno en su proceso evaluativo.</li>
          </ul>
          <p class="mt-3 leading-relaxed">
            Este rol requiere formación continua, reflexión pedagógica y compromiso con el desarrollo integral del estudiante.
          </p>
        </div>

        <div id="retos">
          <h2 class="text-2xl font-semibold text-slate-800">Retos de la evaluación formativa en la NEM</h2>
          <p class="mt-3 leading-relaxed">
            A pesar de sus beneficios, la implementación de la evaluación formativa enfrenta diversos retos. Uno de los principales es el
            cambio de paradigma, tanto para docentes como para familias acostumbradas a modelos tradicionales basados en exámenes y calificaciones.
          </p>
          <p class="mt-3 leading-relaxed">
            Otros desafíos incluyen la carga administrativa, la necesidad de capacitación docente y la adaptación de instrumentos evaluativos
            a contextos diversos. No obstante, superar estos retos fortalece la práctica educativa y contribuye a una educación más justa y significativa.
          </p>
        </div>

        <div id="faq">
          <h2 class="text-2xl font-semibold text-slate-800">Preguntas frecuentes</h2>
          <div class="mt-4 space-y-4">
            <div>
              <h3 class="text-lg font-semibold text-slate-800">¿La evaluación formativa sustituye a los exámenes?</h3>
              <p class="mt-2 leading-relaxed text-slate-700">
                No. La evaluación formativa no elimina los exámenes, pero reduce su peso como único criterio de valoración. Ambos enfoques
                pueden complementarse.
              </p>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-slate-800">¿Cómo se califican los avances?</h3>
              <p class="mt-2 leading-relaxed text-slate-700">
                Los avances se registran principalmente de forma cualitativa, mediante observaciones, rúbricas y evidencias de aprendizaje.
                Las calificaciones se utilizan de manera complementaria.
              </p>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-slate-800">¿Qué instrumentos recomienda la NEM?</h3>
              <p class="mt-2 leading-relaxed text-slate-700">
                La NEM recomienda instrumentos como rúbricas, listas de cotejo, portafolios y registros de observación, entre otros, para
                evaluar a los estudiantes.
              </p>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-slate-800">¿Es obligatoria en todos los niveles?</h3>
              <p class="mt-2 leading-relaxed text-slate-700">
                Sí. La evaluación formativa es un enfoque transversal que se aplica desde educación inicial hasta educación media superior,
                de acuerdo con la NEM.
              </p>
            </div>
          </div>
        </div>

        <div id="conoce-cdv">
          <h2 class="text-2xl font-semibold text-slate-800">Conoce Colegio Del Valle y su modelo educativo</h2>
          <p class="mt-3 leading-relaxed">
            En Colegio Del Valle, los principios de la Nueva Escuela Mexicana se integran con nuestro modelo constructivista y bilingüe,
            el cual acompaña a los alumnos desde kínder hasta preparatoria, priorizando la reflexión, el pensamiento crítico y la formación humana.
            Conocer y aplicar la evaluación formativa es parte del compromiso con una educación de calidad.
          </p>
          <p class="mt-3 leading-relaxed">
            Te invitamos a visitarnos para conocer más sobre nuestra propuesta educativa y cómo formamos a estudiantes preparados para los retos
            del presente y del futuro.
          </p>
        </div>

        <div id="fuentes">
          <h2 class="text-2xl font-semibold text-slate-800">Fuentes de consulta</h2>
          <ul class="mt-3 list-disc pl-6 space-y-2 text-slate-700">
            <li><a class="text-indigo-600 hover:underline" href="https://nuevaescuelamexicana.sep.gob.mx/" target="_blank" rel="noopener">https://nuevaescuelamexicana.sep.gob.mx/</a></li>
            <li><a class="text-indigo-600 hover:underline" href="https://educacionbasica.sep.gob.mx/wp-content/uploads/2024/05/La-NEM-y-su-impacto-en-la-sociedad.pdf" target="_blank" rel="noopener">https://educacionbasica.sep.gob.mx/wp-content/uploads/2024/05/La-NEM-y-su-impacto-en-la-sociedad.pdf</a></li>
            <li><a class="text-indigo-600 hover:underline" href="https://www.emmi.com.mx/perfil-del-docente-nem/" target="_blank" rel="noopener">https://www.emmi.com.mx/perfil-del-docente-nem/</a></li>
            <li><a class="text-indigo-600 hover:underline" href="https://www.emmi.com.mx/evaluacion-formativa-en-la-nem/" target="_blank" rel="noopener">https://www.emmi.com.mx/evaluacion-formativa-en-la-nem/</a></li>
          </ul>
        </div>
      </section>
    </article>

    <div class="lg:sticky lg:top-8 h-fit">
      <?php
        $sectionBase = $baseUrl . '/blog';
        $query = '';
        include __DIR__ . '/sidebar.php';
      ?>
    </div>
  </div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
