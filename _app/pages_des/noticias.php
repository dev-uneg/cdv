<?php
$pageTitle = 'Noticias | Colegio del Valle';
$pageDescription = 'Noticias y comunicados del Colegio del Valle.';
$activePage = '';
$baseUrl = defined('BASE_URL') ? BASE_URL : '';
$menuItems = require __DIR__ . '/partials/menu-items.php';
$menuSubItems = require __DIR__ . '/partials/des-menu-subitems.php';
$logoDarkSrc = $baseUrl . '/_imgs/Colegio-del-Valle-Logo-342x206.webp';
$headerWrapperClass = 'z-40 border-b border-slate-200 bg-white/95 backdrop-blur-sm';
$enableAos = true;
require __DIR__ . '/partials/head-start.php';

$query = trim($_GET['q'] ?? '');
$page = max(1, (int)($_GET['page'] ?? 1));
$perPage = 9;
$lower = fn($s) => function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s);

$posts = include __DIR__ . '/../pages/noticias/data.php';
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
$totalPages = max(1, (int) ceil($total / $perPage));
$page = min($page, $totalPages);
$offset = ($page - 1) * $perPage;
$pagedPosts = array_slice($posts, $offset, $perPage);
?>
<style>
  .noticias-hero-title {
    font-family: "Lilita One", cursive;
    font-size: clamp(2.8rem, 8vw, 6rem);
    line-height: 0.9;
    letter-spacing: 0.03em;
    text-transform: uppercase;
  }
  h1, h2, h3 {
    font-family: "Lilita One", cursive;
    font-weight: 400;
  }
</style>

<div class="flex h-[70vh] min-h-[70svh] min-h-[70dvh] flex-col">
<?php require __DIR__ . '/partials/header-white-sidebar.php'; ?>
<section class="relative flex-1 overflow-hidden bg-gradient-to-br from-[#0B4F6C] via-[#345995] to-[#03CEA4]" data-aos="zoom-out" data-aos-duration="900">
  <div class="pointer-events-none absolute -left-20 top-10 h-52 w-52 rounded-full bg-[#EAC435]/25 blur-3xl"></div>
  <div class="pointer-events-none absolute -right-16 bottom-8 h-64 w-64 rounded-full bg-[#FB4D3D]/20 blur-3xl"></div>
  <div class="mx-auto flex h-full w-full max-w-[1300px] items-center justify-center px-6">
    <div class="max-w-3xl text-center" data-aos="fade-up" data-aos-delay="80">
      <div class="mb-4 flex items-center justify-center text-white/90">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/35 bg-white/10">
          <i data-lucide="newspaper" class="h-5 w-5"></i>
        </span>
      </div>
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-white/80">Colegio del Valle</p>
      <h1 class="noticias-hero-title mt-4 text-white drop-shadow-[0_8px_24px_rgba(2,8,23,0.28)]">¡Entérate aquí!</h1>
      <p class="mt-6 text-base leading-relaxed text-white/95 md:text-lg">
        Novedades, actividades y comunicados de nuestra comunidad escolar.
      </p>
    </div>
  </div>
</section>
</div>

<section class="bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 py-10">
    <div class="rounded-[28px] border border-slate-200 bg-slate-50">
      <div class="px-8 py-10">
        <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Colegio Del Valle · Noticias</p>
        <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-[#345995]">Noticias y comunicados</h2>
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

<section class="py-12 bg-white" data-aos="fade-up">
  <div class="max-w-[1300px] mx-auto px-6 grid gap-10 lg:grid-cols-[1fr,0.35fr] items-start">
    <div>
      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($pagedPosts as $post): ?>
          <a class="group rounded-3xl border border-slate-200 bg-white overflow-hidden shadow-sm hover:shadow-md transition" href="<?= $baseUrl ?>/noticias/<?= $post['slug'] ?>">
            <div class="aspect-[16/10] bg-slate-100 overflow-hidden">
              <img class="h-full w-full object-cover" src="<?= $baseUrl ?>/_imgs/noticias/<?= $post['hero'] ?>" alt="<?= htmlspecialchars($post['title']) ?>" loading="lazy" />
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
            <a class="rounded-full border border-slate-200 px-4 py-2 text-slate-600 hover:bg-slate-50" href="<?= $baseUrl ?>/desarrollo/noticias/?page=<?= $page - 1 ?><?= $query !== '' ? '&q=' . urlencode($query) : '' ?>">Anterior</a>
          <?php endif; ?>
          <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a class="rounded-full border border-slate-200 px-4 py-2 <?= $i === $page ? 'bg-slate-900 text-white' : 'text-slate-600 hover:bg-slate-50' ?>" href="<?= $baseUrl ?>/desarrollo/noticias/?page=<?= $i ?><?= $query !== '' ? '&q=' . urlencode($query) : '' ?>">
              <?= $i ?>
            </a>
          <?php endfor; ?>
          <?php if ($page < $totalPages): ?>
            <a class="rounded-full border border-slate-200 px-4 py-2 text-slate-600 hover:bg-slate-50" href="<?= $baseUrl ?>/desarrollo/noticias/?page=<?= $page + 1 ?><?= $query !== '' ? '&q=' . urlencode($query) : '' ?>">Siguiente</a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>

    <?php
      $currentSlug = null;
      $sectionBase = $baseUrl . '/desarrollo/noticias/';
      include __DIR__ . '/../pages/noticias/sidebar.php';
    ?>
  </div>
</section>

<script>
  window.addEventListener('load', () => {
    if (!window.AOS) return;
    window.AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: false,
      mirror: true,
      offset: 60,
    });
  });
</script>

<?php require __DIR__ . '/partials/footer.php'; ?>
