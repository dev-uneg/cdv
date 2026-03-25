  </main>
  <footer class="bg-slate-900 text-slate-200">
    <div class="max-w-[1300px] mx-auto px-6 py-8 text-center text-sm text-slate-400">
      <p>© <?= date('Y') ?> Colegio del Valle. Todos los derechos reservados.</p>
      <p class="mt-2"><a class="hover:text-white underline" href="<?= $baseUrl ?>/aviso-de-privacidad/">Aviso de privacidad</a></p>
    </div>
  </footer>
  <?php require __DIR__ . '/cookie-consent.php'; ?>
  <script>
    (function () {
      const forms = document.querySelectorAll('form[action*="/api/"]:not([action*="/admin/"])');
      const currentPath = window.location.pathname || '/';

      forms.forEach((form) => {
        let field = form.querySelector('input[name="page_path"]');
        if (!field) {
          field = document.createElement('input');
          field.type = 'hidden';
          field.name = 'page_path';
          form.appendChild(field);
        }
        field.value = currentPath;
      });
    })();
  </script>
</body>
</html>
