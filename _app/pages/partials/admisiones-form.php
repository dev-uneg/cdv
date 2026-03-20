<?php
$defaultInterest = $defaultInterest ?? '';
$sourcePage = $sourcePage ?? 'Sitio web CDV';
?>
<h3 class="text-2xl font-semibold text-slate-800">Solicita informes</h3>
<p class="mt-2 text-sm text-slate-600">
  Completa tus datos y un asesor de admisiones te contactará.
</p>
<form class="mt-6 grid gap-4" method="post" action="<?= $baseUrl ?>/api/contacto">
  <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Nombre completo*" type="text" name="full_name" required />
  <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Correo Electronico*" type="email" name="email" required />
  <input class="rounded-xl border border-slate-200 px-4 py-3 text-sm" placeholder="Telefono*" type="tel" name="phone" required />
  <div class="relative">
    <input type="hidden" name="interest" value="<?= htmlspecialchars($defaultInterest, ENT_QUOTES, 'UTF-8') ?>" />
    <select class="w-full appearance-none rounded-xl border border-slate-200 bg-slate-100 px-4 py-3 pr-10 text-sm text-slate-600" name="interest_display" disabled aria-disabled="true">
      <option value="">Estoy interesado en...</option>
      <option value="Kinder" <?= $defaultInterest === 'Kinder' ? 'selected' : '' ?>>Kinder</option>
      <option value="Pre First" <?= $defaultInterest === 'Pre First' ? 'selected' : '' ?>>Pre First</option>
      <option value="Primaria" <?= $defaultInterest === 'Primaria' ? 'selected' : '' ?>>Primaria</option>
      <option value="Secundaria" <?= $defaultInterest === 'Secundaria' ? 'selected' : '' ?>>Secundaria</option>
      <option value="Prepa" <?= $defaultInterest === 'Prepa' ? 'selected' : '' ?>>Prepa</option>
    </select>
    <i class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-lg text-slate-500" data-lucide="chevron-down"></i>
  </div>
  <p class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm leading-relaxed text-slate-600">
    Tu información esta segura con nosotros. Solo la usaremos para que un asesor de admisiones del Colegio del Valle
    te contacte, te guie durante el proceso de inscripción y te comparta detalles claros sobre colegiaturas, costos y
    opciones disponibles segun el nivel educativo que te interesa.
  </p>
  <input type="hidden" name="source" value="<?= htmlspecialchars($sourcePage, ENT_QUOTES, 'UTF-8') ?>" />
  <input type="hidden" name="channel" value="Web" />
  <input type="hidden" name="medium" value="Sitio web" />
  <?php if ($turnstileEnabled): ?>
    <div class="cf-turnstile" data-sitekey="<?= htmlspecialchars($turnstileSiteKey, ENT_QUOTES, 'UTF-8') ?>"></div>
  <?php endif; ?>
  <label class="inline-flex items-center gap-3 text-sm text-slate-600">
    <input type="checkbox" name="privacy" value="1" required class="h-5 w-5 accent-emerald-600" />
    <span>
      Acepto el
      <a class="font-semibold text-emerald-700 underline hover:text-emerald-800" href="<?= $baseUrl ?>/aviso-de-privacidad/" target="_blank" rel="noopener">aviso de privacidad</a>
      y el uso de mis datos para contacto.
    </span>
  </label>
  <button type="submit" class="w-fit rounded-full bg-emerald-500 px-6 py-3 text-xs font-semibold uppercase tracking-[0.2em] text-white">Enviar</button>
</form>
