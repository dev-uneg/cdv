<?php
if (!isset($posts)) {
  $posts = [];
}
$recent = $posts;
usort($recent, fn($a, $b) => ($b['date_ts'] ?? 0) <=> ($a['date_ts'] ?? 0));
$recent = array_slice($recent, 0, 5);
$searchAction = $sectionBase ?? ($baseUrl . '/noticias');
$currentQuery = $query ?? '';
?>

<aside class="rounded-3xl border border-slate-200 bg-white p-6">
  <h2 class="text-lg font-semibold text-slate-800">Buscar</h2>
  <form class="mt-3" action="<?= $searchAction ?>" method="get">
    <div class="flex gap-2">
      <input class="w-full rounded-2xl border border-slate-200 px-4 py-2 text-sm" type="text" name="q" placeholder="Buscar" value="<?= htmlspecialchars($currentQuery) ?>" />
      <button class="rounded-2xl border border-slate-200 px-4 py-2 text-sm text-slate-600 hover:bg-slate-50" type="submit">Buscar</button>
    </div>
  </form>

  <h2 class="mt-8 text-lg font-semibold text-slate-800">Recientes</h2>
  <ul class="mt-3 space-y-3 text-sm text-slate-600">
    <?php foreach ($recent as $item): ?>
      <li>
        <a class="hover:text-indigo-600" href="<?= $baseUrl ?>/noticias/<?= $item['slug'] ?>">
          <?= htmlspecialchars($item['title']) ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</aside>
