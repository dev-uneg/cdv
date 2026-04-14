<?php
$baseUrl = isset($baseUrl) ? (string) $baseUrl : '';
$headerWrapperClass = isset($headerWrapperClass) && $headerWrapperClass !== ''
    ? (string) $headerWrapperClass
    : 'sticky top-0 z-40 border-b border-slate-200 bg-white/95 backdrop-blur-sm';
$logoDarkSrc = isset($logoDarkSrc) && $logoDarkSrc !== ''
    ? (string) $logoDarkSrc
    : ($baseUrl . '/_imgs/Colegio-del-Valle-Logo-342x206.webp');
$menuItems = isset($menuItems) && is_array($menuItems)
    ? $menuItems
    : (require __DIR__ . '/menu-items.php');
$menuSubItems = isset($menuSubItems) && is_array($menuSubItems) ? $menuSubItems : [];
?>
<header class="<?= htmlspecialchars($headerWrapperClass, ENT_QUOTES, 'UTF-8') ?>">
  <div class="mx-auto flex max-w-[1400px] items-center justify-between px-6 py-3 md:px-8">
    <a href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>/desarrollo/" aria-label="Ir a Home Desarrollo">
      <img class="h-auto w-[138px] sm:w-[154px]" src="<?= htmlspecialchars($logoDarkSrc, ENT_QUOTES, 'UTF-8') ?>" alt="Colegio del Valle">
    </a>
    <button class="inline-flex items-center gap-2 rounded-full border border-slate-900 px-4 py-2 text-[12px] font-semibold uppercase tracking-[0.12em] text-slate-900 transition hover:border-[#345995] hover:bg-[#345995] hover:text-white" type="button" id="menuOpenBtn" aria-haspopup="dialog" aria-controls="desktopMenuSidebar" aria-expanded="false">
      <i data-lucide="menu" class="h-[16px] w-[16px]"></i>
      <span>Menu</span>
    </button>
  </div>
</header>

<div class="fixed inset-0 z-[80] invisible pointer-events-none" id="desktopMenuSidebar" aria-hidden="true">
  <button class="absolute inset-0 bg-slate-950/35 opacity-0 backdrop-blur-sm transition duration-300" type="button" id="menuBackdrop" aria-label="Cerrar menu"></button>
  <aside class="absolute right-0 top-0 flex h-full w-[min(32vw,420px)] min-w-[320px] translate-x-full flex-col gap-5 border-l border-white/20 px-6 py-6 backdrop-blur-2xl transition duration-300" id="menuPanel" aria-label="Menu principal">
    <div class="flex items-center justify-between gap-3 border-b border-white/20 pb-4">
      <a class="menu-quick-btn menu-quick-btn-tienda !px-4 !py-2" href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>/desarrollo/contacto/">
        <i data-lucide="user" class="h-3.5 w-3.5"></i>
        <span>Admisiones</span>
      </a>
      <button class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-white/30 text-white transition hover:bg-white/10" type="button" id="menuCloseBtn" aria-label="Cerrar menu">
        <i data-lucide="x" class="h-5 w-5"></i>
      </button>
    </div>
    <nav class="flex-1 overflow-y-auto">
      <ul class="grid gap-1.5">
        <?php foreach ($menuItems as $item): ?>
          <li>
            <?php if (isset($menuSubItems[$item['label']])): ?>
              <details class="group rounded-xl border border-transparent open:border-white/20 text-[12px] uppercase tracking-[0.08em] text-white">
                <summary class="flex cursor-pointer list-none items-center justify-between rounded-xl px-3 py-2.5 transition hover:bg-white/10">
                  <span><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></span>
                  <i data-lucide="chevron-down" class="h-4 w-4 transition group-open:rotate-180"></i>
                </summary>
                <div class="mt-1 grid gap-1 px-3 pb-1">
                  <?php foreach ($menuSubItems[$item['label']] as $subItem): ?>
                    <a class="block w-full rounded-lg px-3 py-2 text-[12px] tracking-[0.08em] text-slate-200 transition hover:bg-white/10 hover:text-white" href="<?= htmlspecialchars($baseUrl . $subItem['href'], ENT_QUOTES, 'UTF-8') ?>">
                      <?= htmlspecialchars($subItem['label'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                  <?php endforeach; ?>
                </div>
              </details>
            <?php else: ?>
              <a class="block rounded-xl px-3 py-2.5 text-[12px] uppercase tracking-[0.08em] text-white transition hover:bg-white/10" href="<?= htmlspecialchars($baseUrl . $item['href'], ENT_QUOTES, 'UTF-8') ?>">
                <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
              </a>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <div class="mt-auto mb-3 flex flex-col gap-2">
      <button class="menu-quick-btn menu-quick-btn-tienda" type="button">
        <i data-lucide="shopping-bag" class="h-3.5 w-3.5"></i>
        <span>Tienda oficial CDV</span>
      </button>
      <button class="menu-quick-btn menu-quick-btn-quejas" type="button">
        <i data-lucide="message-square" class="h-3.5 w-3.5"></i>
        <span>Quejas y sugerencias</span>
      </button>
    </div>
    <div class="border-t border-white/15 pt-4 text-[11px] uppercase tracking-[0.08em] text-slate-200">
      <div class="space-y-2.5">
        <p class="flex items-center gap-2">
          <i data-lucide="phone" class="h-3.5 w-3.5 text-white/90"></i>
          <span>Admisiones: <a class="text-white transition hover:text-cyan-200" href="tel:+525550631500">55 5063 1500</a> - Opcion 1</span>
        </p>
        <div class="flex items-start gap-2">
          <i data-lucide="credit-card" class="mt-0.5 h-3.5 w-3.5 text-white/90"></i>
          <div>
            <p>Credito y cobranza WhatsApp:</p>
            <p class="mt-0.5">
              <a class="text-white transition hover:text-cyan-200" href="https://wa.me/525517009348" target="_blank" rel="noopener">55 1700 9348</a>
              -
              <a class="text-white transition hover:text-cyan-200" href="https://wa.me/525667477007" target="_blank" rel="noopener">56 6747 7007</a>
            </p>
          </div>
        </div>
      </div>
      <div class="mt-3 flex items-center gap-2 border-t border-white/10 pt-3">
        <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/30 text-white transition hover:bg-white/10" href="https://www.facebook.com/ColegioDelValleCDMX/" target="_blank" rel="noopener" aria-label="Facebook">
          <i data-lucide="facebook" class="h-3.5 w-3.5"></i>
        </a>
        <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/30 text-white transition hover:bg-white/10" href="https://www.instagram.com/coledelvalleoficial/" target="_blank" rel="noopener" aria-label="Instagram">
          <i data-lucide="instagram" class="h-3.5 w-3.5"></i>
        </a>
        <a class="inline-flex h-7 w-7 items-center justify-center rounded-full border border-white/30 text-white transition hover:bg-white/10" href="https://www.youtube.com/channel/UC9BpoT0OCFs254I9TvwTQ8g" target="_blank" rel="noopener" aria-label="YouTube">
          <i data-lucide="youtube" class="h-3.5 w-3.5"></i>
        </a>
      </div>
    </div>
  </aside>
</div>

<script>
  (() => {
    const menuLayer = document.getElementById('desktopMenuSidebar');
    const menuPanel = document.getElementById('menuPanel');
    const openBtn = document.getElementById('menuOpenBtn');
    const closeBtn = document.getElementById('menuCloseBtn');
    const backdrop = document.getElementById('menuBackdrop');
    const sidebarDetails = menuPanel ? menuPanel.querySelectorAll('nav details') : [];
    if (!menuLayer || !menuPanel || !openBtn || !closeBtn || !backdrop) return;

    const openMenu = () => {
      menuLayer.classList.remove('invisible', 'pointer-events-none');
      menuLayer.classList.add('visible', 'pointer-events-auto');
      menuLayer.setAttribute('aria-hidden', 'false');
      openBtn.setAttribute('aria-expanded', 'true');
      backdrop.classList.remove('opacity-0');
      backdrop.classList.add('opacity-100');
      menuPanel.classList.remove('translate-x-full');
      menuPanel.classList.add('translate-x-0');
      document.body.classList.add('overflow-hidden');
    };

    const closeMenu = () => {
      menuLayer.classList.remove('visible', 'pointer-events-auto');
      menuLayer.classList.add('invisible', 'pointer-events-none');
      menuLayer.setAttribute('aria-hidden', 'true');
      openBtn.setAttribute('aria-expanded', 'false');
      backdrop.classList.add('opacity-0');
      backdrop.classList.remove('opacity-100');
      menuPanel.classList.add('translate-x-full');
      menuPanel.classList.remove('translate-x-0');
      document.body.classList.remove('overflow-hidden');
    };

    openBtn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);
    backdrop.addEventListener('click', closeMenu);
    sidebarDetails.forEach((detail) => {
      detail.addEventListener('toggle', () => {
        if (!detail.open) return;
        sidebarDetails.forEach((other) => {
          if (other !== detail) {
            other.open = false;
          }
        });
      });
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape' && menuLayer.getAttribute('aria-hidden') === 'false') {
        closeMenu();
      }
    });
  })();
</script>
