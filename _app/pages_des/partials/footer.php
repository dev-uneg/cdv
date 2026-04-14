  </main>
  <footer class="bg-[#345995] text-white">
    <div class="max-w-[1400px] mx-auto px-6 py-12 grid gap-10 md:grid-cols-[1.3fr,1fr,1fr]">
      <div>
        <p class="text-lg font-semibold">Colegio del Valle</p>
        <p class="mt-3 text-[15px] text-white">Formamos estudiantes con pensamiento critico, vocacion de servicio y alegria por aprender.</p>
        <div class="mt-5 flex gap-3 text-lg text-white">
          <a class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-white" href="https://www.facebook.com/ColegioDelValleCDMX/" target="_blank" rel="noopener" aria-label="Facebook">
            <i data-lucide="facebook"></i>
          </a>
          <a class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-white" href="https://www.instagram.com/coledelvalleoficial/" target="_blank" rel="noopener" aria-label="Instagram">
            <i data-lucide="instagram"></i>
          </a>
          <a class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-white" href="https://www.youtube.com/channel/UC9BpoT0OCFs254I9TvwTQ8g" target="_blank" rel="noopener" aria-label="YouTube">
            <i data-lucide="youtube"></i>
          </a>
        </div>
      </div>
      <div>
        <p class="text-[15px] font-semibold uppercase tracking-[0.2em]">Contacto</p>
        <div class="mt-4 space-y-2 text-[15px] text-white">
          <p>Mier y Pesado 227, Col. del Valle Centro, 03100 Ciudad de Mexico, CDMX</p>
          <p><a class="hover:text-white" href="tel:+525550631500">55 5063 1500</a></p>
          <p><a class="hover:text-white" href="mailto:contacto@coldelvalle.edu.mx">contacto@coldelvalle.edu.mx</a></p>
        </div>
      </div>
      <div>
        <p class="text-[15px] font-semibold uppercase tracking-[0.2em]">Horarios</p>
        <div class="mt-4 space-y-2 text-[15px] text-white">
          <p>Lunes a Viernes: 7:30 a 17:00</p>
          <p>Sabados: 9:00 a 13:00</p>
        </div>
      </div>
    </div>
    <div class="max-w-[1400px] mx-auto px-6">
      <div class="border-t border-white/30 py-5 flex flex-col gap-2 text-[15px] text-white sm:flex-row sm:items-center sm:justify-between">
        <p>© <?= date('Y') ?> Colegio del Valle. Todos los derechos reservados.</p>
        <div class="flex flex-wrap items-center gap-3">
          <a class="hover:text-white" href="<?= $baseUrl ?>/aviso-de-privacidad/">Aviso de privacidad</a>
          <span class="text-white">|</span>
          <p>Agencia Digital · Marketing y Tecnologia Educativa</p>
        </div>
      </div>
    </div>
  </footer>
  <?php require dirname(__DIR__, 2) . '/pages/partials/cookie-consent.php'; ?>
  <script>
    (function () {
      const isPublicApiForm = (form) => {
        if (!(form instanceof HTMLFormElement)) return false;
        const action = form.getAttribute('action') || '';
        return action.includes('/api/') && !action.includes('/admin/');
      };

      const setOrCreateHidden = (form, name, value) => {
        const selector = '[name="' + name + '"]';
        let field = form.querySelector(selector);
        if (field) {
          field.value = value;
          return;
        }

        field = document.createElement('input');
        field.type = 'hidden';
        field.name = name;
        field.value = value;
        form.appendChild(field);
      };

      const addPagePathField = (form) => {
        if (!isPublicApiForm(form)) return;
        const currentPath = window.location.pathname || '/';
        setOrCreateHidden(form, 'page_path', currentPath);
      };

      document.querySelectorAll('form').forEach((form) => {
        addPagePathField(form);
      });

      const trackWhatsappClick = (anchor) => {
        if (!(anchor instanceof HTMLAnchorElement)) return;

        const endpoint = <?= json_encode($baseUrl . '/api/events/whatsapp-click', JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
        const payload = {
          page_path: window.location.pathname || '/',
          target_url: anchor.getAttribute('href') || '',
          referrer_url: document.referrer || ''
        };

        const body = JSON.stringify(payload);
        if (navigator.sendBeacon) {
          const blob = new Blob([body], { type: 'application/json' });
          navigator.sendBeacon(endpoint, blob);
          return;
        }

        fetch(endpoint, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body,
          keepalive: true
        }).catch(() => {});
      };

      // Delegated listener: captures WhatsApp links even if they are rendered after this script.
      document.addEventListener('click', (event) => {
        const target = event.target;
        if (!(target instanceof Element)) return;

        const anchor = target.closest('a[href]');
        if (!(anchor instanceof HTMLAnchorElement)) return;

        const href = (anchor.getAttribute('href') || '').toLowerCase();
        const isWhatsappLink = href.includes('wa.me/') || href.includes('api.whatsapp.com/send');
        if (!isWhatsappLink) return;

        trackWhatsappClick(anchor);
      }, { passive: true });

      const engagementEndpoint = <?= json_encode($baseUrl . '/api/events/engagement', JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
      const pagePath = window.location.pathname || '/';
      const pageStartMs = Date.now();
      const sentEvents = new Set();
      let pageHiddenAtLeastOnce = false;

      const getOrCreateSessionToken = () => {
        const storageKey = 'cdv_engagement_session_v1';
        try {
          const existing = window.localStorage.getItem(storageKey);
          if (existing && /^[A-Za-z0-9_-]{12,80}$/.test(existing)) {
            return existing;
          }
          const seed = Math.random().toString(36).slice(2) + Date.now().toString(36);
          const token = seed.replace(/[^A-Za-z0-9_-]/g, '').slice(0, 48);
          window.localStorage.setItem(storageKey, token);
          return token;
        } catch (error) {
          return '';
        }
      };

      const sessionToken = getOrCreateSessionToken();

      const sendEngagement = (eventName, extra = {}) => {
        if (sentEvents.has(eventName)) return;
        const payload = {
          event_name: eventName,
          page_path: pagePath,
          session_token: sessionToken,
          ...extra,
        };
        const body = JSON.stringify(payload);

        if (navigator.sendBeacon) {
          const blob = new Blob([body], { type: 'application/json' });
          navigator.sendBeacon(engagementEndpoint, blob);
          sentEvents.add(eventName);
          return;
        }

        fetch(engagementEndpoint, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body,
          keepalive: true
        }).catch(() => {});
        sentEvents.add(eventName);
      };

      sendEngagement('page_view');

      window.setTimeout(() => {
        if (document.visibilityState === 'visible') {
          sendEngagement('engaged_10s');
        }
      }, 10000);

      const onScrollTrack = () => {
        const doc = document.documentElement;
        if (!doc) return;
        const maxScroll = doc.scrollHeight - window.innerHeight;
        if (maxScroll <= 0) return;
        const ratio = Math.min(100, Math.max(0, Math.round((window.scrollY / maxScroll) * 100)));
        if (ratio >= 50) {
          sendEngagement('scroll_50', { scroll_pct: 50 });
        }
        if (ratio >= 90) {
          sendEngagement('scroll_90', { scroll_pct: 90 });
          window.removeEventListener('scroll', onScrollTrack);
        }
      };
      window.addEventListener('scroll', onScrollTrack, { passive: true });

      document.addEventListener('visibilitychange', () => {
        if (document.visibilityState === 'hidden') {
          pageHiddenAtLeastOnce = true;
        }
      });

      const flushTimeOnPage = () => {
        const elapsed = Date.now() - pageStartMs;
        const duration = Math.min(1800000, Math.max(0, elapsed));
        if (duration < 1000 && !pageHiddenAtLeastOnce) return;
        sendEngagement('time_on_page', { duration_ms: duration });
      };

      window.addEventListener('pagehide', flushTimeOnPage, { passive: true });
    })();
  </script>
  <?php
    $requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    if (!is_string($requestPath) || $requestPath === '') {
        $requestPath = '/';
    }
    if ($baseUrl !== '' && strncmp($requestPath, $baseUrl, strlen($baseUrl)) === 0) {
        $requestPath = substr($requestPath, strlen($baseUrl));
        if ($requestPath === '') {
            $requestPath = '/';
        }
    }
    $normalizedPath = rtrim($requestPath, '/');
    if ($normalizedPath === '') {
        $normalizedPath = '/';
    }
    $offerPagesWithoutFloatWhatsapp = [
        '/oferta-educativa/kinder',
        '/oferta-educativa/pre-first',
        '/oferta-educativa/primaria',
        '/oferta-educativa/secundaria',
        '/oferta-educativa/preparatoria',
        '/oferta-academica/kinder',
        '/oferta-academica/primaria',
        '/kinder',
        '/pre-first',
        '/primaria',
        '/secundaria',
        '/preparatoria',
    ];
    $showFloatWhatsappBtn = !in_array($normalizedPath, $offerPagesWithoutFloatWhatsapp, true);
  ?>
  <?php if ($showFloatWhatsappBtn): ?>
    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-3">
      <div class="relative flex items-center">
        <span class="mr-3 inline-flex items-center gap-1 rounded-full bg-white px-3 py-1 text-[12px] font-semibold uppercase tracking-[0.16em] text-slate-800 shadow-md">
          <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
          Admisiones
        </span>
        <a
          class="flex h-14 w-14 items-center justify-center rounded-full bg-[#0F2A5F] text-white shadow-lg transition hover:bg-[#173b84]"
          href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>/contacto/"
          aria-label="Ir a contacto"
        >
          <i class="text-2xl" data-lucide="send"></i>
        </a>
      </div>
      <a
        id="whatsapp-float-btn"
        class="flex h-14 w-14 items-center justify-center rounded-full bg-green-500 text-white shadow-lg transition hover:bg-green-600"
        href="https://wa.me/525571137882?text=Hola%2C%20acabo%20de%20visitar%20su%20sitio%20web%20Colegio%20del%20Valle%20y%20quiero%20informes%20de%20inscripciones%20y%20costos."
        target="_blank"
        rel="noopener noreferrer"
        aria-label="WhatsApp"
      >
        <i class="text-2xl" data-lucide="message-circle"></i>
      </a>
    </div>
  <?php endif; ?>
</body>
</html>
