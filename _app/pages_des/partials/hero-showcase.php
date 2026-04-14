<?php
$heroEyebrow = isset($heroEyebrow) && $heroEyebrow !== '' ? (string) $heroEyebrow : 'Colegio del Valle';
$heroTitle = isset($heroTitle) && $heroTitle !== '' ? (string) $heroTitle : 'PAGINA';
$heroDescription = isset($heroDescription) && $heroDescription !== ''
    ? (string) $heroDescription
    : 'Conoce nuestra propuesta educativa y los programas del Colegio del Valle.';
$heroIcon = isset($heroIcon) && $heroIcon !== '' ? (string) $heroIcon : 'graduation-cap';
?>
<style>
  .des-hero-title {
    font-family: "Lilita One", cursive;
    font-size: clamp(2.4rem, 8vw, 6rem);
    line-height: 0.9;
    letter-spacing: 0.03em;
    text-transform: uppercase;
  }
</style>
<section class="relative flex-1 overflow-hidden bg-gradient-to-br from-[#0B4F6C] via-[#345995] to-[#03CEA4]">
  <div class="pointer-events-none absolute -left-20 top-10 h-52 w-52 rounded-full bg-[#EAC435]/25 blur-3xl"></div>
  <div class="pointer-events-none absolute -right-16 bottom-8 h-64 w-64 rounded-full bg-[#FB4D3D]/20 blur-3xl"></div>
  <div class="mx-auto flex h-full w-full max-w-[1300px] items-center justify-center px-6">
    <div class="max-w-3xl text-center">
      <div class="mb-4 flex items-center justify-center text-white/90">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/35 bg-white/10">
          <i data-lucide="<?= htmlspecialchars($heroIcon, ENT_QUOTES, 'UTF-8') ?>" class="h-5 w-5"></i>
        </span>
      </div>
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-white/80"><?= htmlspecialchars($heroEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
      <h1 class="des-hero-title mt-4 text-white drop-shadow-[0_8px_24px_rgba(2,8,23,0.28)]"><?= htmlspecialchars($heroTitle, ENT_QUOTES, 'UTF-8') ?></h1>
      <p class="mt-6 text-base leading-relaxed text-white/95 md:text-lg"><?= htmlspecialchars($heroDescription, ENT_QUOTES, 'UTF-8') ?></p>
    </div>
  </div>
</section>
