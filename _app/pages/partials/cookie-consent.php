<?php
$cookieConsentKey = 'cdv_cookie_consent_v1';
?>
<div
  id="cookie-consent-bar"
  class="fixed inset-0 z-[60] hidden px-4"
  role="dialog"
  aria-live="polite"
  aria-label="Aviso de cookies"
>
  <div class="absolute inset-0 bg-slate-950/45 backdrop-blur-[2px]" aria-hidden="true"></div>
  <div class="relative left-1/2 top-1/2 w-[min(94vw,700px)] -translate-x-1/2 -translate-y-1/2 rounded-3xl border border-slate-200/80 bg-white p-5 shadow-2xl sm:p-6">
    <div class="flex items-start gap-3">
      <span class="mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl bg-orange-100 text-orange-600">
        <i class="h-5 w-5" data-lucide="cookie"></i>
      </span>
      <div class="min-w-0">
        <p class="text-base font-semibold text-slate-900">Usamos cookies para mejorar tu experiencia.</p>
        <p class="mt-1 text-sm leading-relaxed text-slate-700">
          Nos ayudan a entender el uso del sitio y medir resultados publicitarios.
          <a class="font-semibold underline decoration-slate-400 underline-offset-2 hover:text-slate-900" href="<?= $baseUrl ?>/aviso-de-privacidad/">Más información</a>
        </p>
      </div>
    </div>
    <div class="mt-4 flex flex-wrap gap-2 text-xs font-semibold uppercase tracking-[0.08em] text-slate-700">
      <span class="inline-flex items-center gap-1 rounded-full bg-slate-100 px-3 py-1.5">
        <i class="h-3.5 w-3.5" data-lucide="chart-column"></i>
        Analítica
      </span>
      <span class="inline-flex items-center gap-1 rounded-full bg-slate-100 px-3 py-1.5">
        <i class="h-3.5 w-3.5" data-lucide="megaphone"></i>
        Publicidad
      </span>
    </div>
    <div class="mt-5 flex justify-end">
      <button id="cookie-accept-btn" type="button" class="inline-flex items-center gap-2 rounded-full bg-slate-900 px-5 py-2.5 text-xs font-semibold uppercase tracking-[0.12em] text-white hover:bg-slate-800">
        <i class="h-3.5 w-3.5" data-lucide="check"></i>
        Estoy de acuerdo
      </button>
    </div>
  </div>
</div>
<script>
  (function () {
    var key = '<?= $cookieConsentKey ?>';
    var bar = document.getElementById('cookie-consent-bar');
    var acceptBtn = document.getElementById('cookie-accept-btn');
    var waBtn = document.getElementById('whatsapp-float-btn');
    if (!bar || !acceptBtn) return;

    function hideBar() {
      bar.classList.add('hidden');
      if (waBtn) waBtn.style.bottom = '1.5rem';
    }

    function showBar() {
      bar.classList.remove('hidden');
      if (waBtn) waBtn.style.bottom = '1.5rem';
    }

    var status = null;
    try {
      status = window.localStorage ? window.localStorage.getItem(key) : null;
    } catch (e) {
      status = null;
    }

    if (status !== 'accepted') {
      showBar();
    } else {
      hideBar();
    }

    acceptBtn.addEventListener('click', function () {
      try {
        if (window.localStorage) window.localStorage.setItem(key, 'accepted');
      } catch (e) {}
      if (typeof window.__cdvLoadMetaPixel === 'function') {
        window.__cdvLoadMetaPixel();
      }
      hideBar();
    });

  })();
</script>
