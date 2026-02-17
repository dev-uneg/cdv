<?php
$pageTitle = 'Noticias | Colegio del Valle';
$activePage = '';
require __DIR__ . '/../partials/header.php';

$query = trim($_GET['q'] ?? '');
$page = max(1, (int)($_GET['page'] ?? 1));
$perPage = 9;
$lower = fn($s) => function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s);

$posts = include __DIR__ . '/data.php';

usort($posts, fn($a, $b) => ($b['date_ts'] ?? 0) <=> ($a['date_ts'] ?? 0));

if ($query !== '') {
  $q = $lower($query);
  $posts = array_values(array_filter($posts, function ($post) use ($q, $lower) {
    $title = $lower($post['title'] ?? '');
    $excerpt = $lower($post['excerpt'] ?? '');
    return str_contains($title, $q) || str_contains($excerpt, $q);
  }));
}

$total = count($posts);
$totalPages = max(1, (int)ceil($total / $perPage));
$page = min($page, $totalPages);
$offset = ($page - 1) * $perPage;
$pagedPosts = array_slice($posts, $offset, $perPage);
?>

<section class="bg-white">
  <div class="max-w-[1300px] mx-auto px-6 py-10">
    <div class="rounded-[28px] border border-slate-200 bg-slate-50">
      <div class="px-8 py-10">
        <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Colegio Del Valle · Noticias</p>
        <h1 class="mt-3 text-3xl md:text-4xl font-semibold text-slate-800">Noticias y comunicados</h1>
        <p class="mt-4 max-w-3xl text-base leading-relaxed text-slate-700">
          En esta sección compartimos novedades, actividades y comunicados relevantes de la comunidad escolar. Aquí encontrarás
          información breve y clara sobre proyectos, eventos y momentos importantes que fortalecen la vida académica y la convivencia.
        </p>
        <div class="mt-6 flex flex-wrap gap-3 text-xs uppercase tracking-[0.18em] text-slate-500">
          <span class="rounded-full border border-slate-200 bg-white px-4 py-2">Comunidad escolar</span>
          <span class="rounded-full border border-slate-200 bg-white px-4 py-2">Eventos</span>
          <span class="rounded-full border border-slate-200 bg-white px-4 py-2">Comunicados</span>
          <span class="rounded-full border border-slate-200 bg-white px-4 py-2">Actividades</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-12 bg-white">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[1fr,0.35fr] items-start">
    <div>
      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($pagedPosts as $post): ?>
          <a class="group rounded-3xl border border-slate-200 bg-white overflow-hidden shadow-sm hover:shadow-md transition" href="<?= $baseUrl ?>/noticias/<?= $post['slug'] ?>">
            <div class="aspect-[16/10] bg-slate-100 overflow-hidden">
              <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/imgs/noticias/<?= $post['hero'] ?>" alt="<?= htmlspecialchars($post['title']) ?>" loading="lazy" />
            </div>
            <div class="p-5">
              <p class="text-xs uppercase tracking-[0.2em] text-slate-400"><?= htmlspecialchars($post['date']) ?> · <?= htmlspecialchars($post['category']) ?></p>
              <h3 class="mt-2 text-lg font-semibold text-slate-800 group-hover:text-indigo-600">
                <?= htmlspecialchars($post['title']) ?>
              </h3>
              <p class="mt-2 text-sm text-slate-600"><?= htmlspecialchars($post['excerpt']) ?></p>
            </div>
          </a>
        <?php endforeach; ?>
      </div>

      <?php if ($totalPages > 1): ?>
        <div class="mt-10 flex flex-wrap justify-center gap-2 text-sm">
          <?php if ($page > 1): ?>
            <a class="rounded-full border border-slate-200 px-4 py-2 text-slate-600 hover:bg-slate-50" href="<?= $baseUrl ?>/noticias?page=<?= $page - 1 ?><?= $query !== '' ? '&q=' . urlencode($query) : '' ?>">Anterior</a>
          <?php endif; ?>
          <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a class="rounded-full border border-slate-200 px-4 py-2 <?= $i === $page ? 'bg-slate-900 text-white' : 'text-slate-600 hover:bg-slate-50' ?>" href="<?= $baseUrl ?>/noticias?page=<?= $i ?><?= $query !== '' ? '&q=' . urlencode($query) : '' ?>">
              <?= $i ?>
            </a>
          <?php endfor; ?>
          <?php if ($page < $totalPages): ?>
            <a class="rounded-full border border-slate-200 px-4 py-2 text-slate-600 hover:bg-slate-50" href="<?= $baseUrl ?>/noticias?page=<?= $page + 1 ?><?= $query !== '' ? '&q=' . urlencode($query) : '' ?>">Siguiente</a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>

    <?php
      $currentSlug = null;
      $sectionBase = $baseUrl . '/noticias';
      include __DIR__ . '/sidebar.php';
    ?>
  </div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
