<?php
$cookieConsentKey = 'cdv_cookie_consent_v1';
?>
<div
  id="cookie-consent-bar"
  class="fixed bottom-4 left-1/2 z-[60] hidden w-[min(92vw,780px)] -translate-x-1/2"
  role="dialog"
  aria-live="polite"
  aria-label="Aviso de cookies"
>
  <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white/95 p-4 shadow-xl backdrop-blur sm:flex-row sm:items-center sm:justify-between sm:p-5">
    <p class="text-sm leading-relaxed text-slate-700">
      Usamos cookies para analítica y medición publicitaria.
      <a class="font-semibold underline hover:text-slate-900" href="<?= $baseUrl ?>/aviso-de-privacidad/">Más información</a>
    </p>
    <div class="flex shrink-0 gap-2">
      <button id="cookie-accept-btn" type="button" class="rounded-full bg-slate-900 px-4 py-2 text-xs font-semibold uppercase tracking-[0.12em] text-white hover:bg-slate-800">
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

    function setWhatsAppOffset(showBar) {
      if (!waBtn) return;
      waBtn.style.bottom = showBar ? '6.25rem' : '1.5rem';
    }

    function hideBar() {
      bar.classList.add('hidden');
      setWhatsAppOffset(false);
    }

    function showBar() {
      bar.classList.remove('hidden');
      setWhatsAppOffset(true);
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
