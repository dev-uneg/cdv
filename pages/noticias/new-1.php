<?php
$slug = 'new-1';
$pageTitle = 'Colegio Del Valle anuncia semana de aprendizaje creativo | Colegio del Valle';
$activePage = '';
require __DIR__ . '/../partials/header.php';

$posts = include __DIR__ . '/data.php';
$post = $posts[0] ?? null;
?>

<section class="py-12 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[1fr,0.35fr] items-start">
    <article class="max-w-none">
      <div class="mb-8 h-[450px] overflow-hidden rounded-[32px] border border-slate-200 bg-slate-100">
        <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/noticias/default.jpg" alt="Colegio Del Valle anuncia semana de aprendizaje creativo" loading="lazy" />
      </div>
      <p class="text-xs uppercase tracking-[0.2em] text-slate-400">17 febrero 2026 · Comunidad Escolar</p>
      <h1 class="mt-2 text-3xl md:text-4xl font-semibold text-slate-800">Colegio Del Valle anuncia semana de aprendizaje creativo</h1>
      <p class="mt-5 text-base leading-relaxed text-slate-700">
        Como parte de su plan anual, Colegio Del Valle presentó una semana especial de aprendizaje creativo para integrar proyectos,
        arte y trabajo colaborativo en todos los niveles. La propuesta busca conectar los contenidos académicos con experiencias
        prácticas y significativas dentro del aula.
      </p>
      <p class="mt-4 text-base leading-relaxed text-slate-700">
        Durante estos días, los alumnos participarán en actividades que combinan investigación, expresión artística y trabajo en
        equipo, con el acompañamiento de docentes y familias. La iniciativa refuerza la formación integral y la convivencia escolar.
      </p>

      <div class="mt-8 rounded-3xl border border-slate-200 bg-slate-50 p-6">
        <h2 class="text-xl font-semibold text-slate-800">Actividades destacadas</h2>
        <ul class="mt-4 list-disc pl-6 space-y-2 text-sm text-slate-700">
          <li>Proyectos interdisciplinarios por grado.</li>
          <li>Talleres de arte, música y expresión corporal.</li>
          <li>Muestras de aprendizaje abiertas a la comunidad.</li>
        </ul>
      </div>
      <p class="mt-6 text-sm text-slate-500">
        Esta noticia es ficticia y funciona como contenido temporal para el sitio. El objetivo es mostrar el formato de noticias con un
        texto claro y breve.
      </p>
    </article>

    <div class="lg:sticky lg:top-8 h-fit">
      <?php
        $sectionBase = $baseUrl . '/noticias';
        $query = '';
        include __DIR__ . '/sidebar.php';
      ?>
    </div>
  </div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
