(function () {
  const script = document.currentScript;
  const spriteHref = script?.dataset?.lucideSprite || '/_assets/lucide-sprite.svg';
  const ns = 'http://www.w3.org/2000/svg';
  const xlinkNs = 'http://www.w3.org/1999/xlink';
  const iconAliases = {
    'circle-user-round': 'user',
    'user-round': 'user',
    'calendar': 'calendar-days',
    'calendar-check': 'calendar-check-2'
  };

  const toIconName = (name) => iconAliases[name] || name;

  const renderLucideIcons = (scope = document) => {
    const placeholders = scope.querySelectorAll('i[data-lucide]');
    placeholders.forEach((placeholder) => {
      if (placeholder.dataset.lucideProcessed === '1') {
        return;
      }

      const originalIconName = placeholder.getAttribute('data-lucide');
      if (!originalIconName) {
        return;
      }

      const iconName = toIconName(originalIconName);
      const svg = document.createElementNS(ns, 'svg');
      const use = document.createElementNS(ns, 'use');
      const iconHref = `${spriteHref}#lucide-${iconName}`;
      svg.classList.add('lucide-icon');

      use.setAttribute('href', iconHref);
      use.setAttributeNS(xlinkNs, 'xlink:href', iconHref);

      for (const { name, value } of Array.from(placeholder.attributes)) {
        if (name === 'data-lucide' || name === 'aria-label') {
          continue;
        }
        svg.setAttribute(name, value);
      }

      const ariaLabel = placeholder.getAttribute('aria-label');
      if (ariaLabel && ariaLabel.trim() !== '') {
        svg.setAttribute('aria-label', ariaLabel.trim());
        svg.setAttribute('role', 'img');
      } else {
        svg.setAttribute('aria-hidden', 'true');
      }

      if (!svg.hasAttribute('fill')) svg.setAttribute('fill', 'none');
      if (!svg.hasAttribute('stroke')) svg.setAttribute('stroke', 'currentColor');
      if (!svg.hasAttribute('stroke-width')) svg.setAttribute('stroke-width', '2');
      if (!svg.hasAttribute('stroke-linecap')) svg.setAttribute('stroke-linecap', 'round');
      if (!svg.hasAttribute('stroke-linejoin')) svg.setAttribute('stroke-linejoin', 'round');
      if (!svg.hasAttribute('width')) svg.setAttribute('width', '1em');
      if (!svg.hasAttribute('height')) svg.setAttribute('height', '1em');

      svg.appendChild(use);
      placeholder.dataset.lucideProcessed = '1';
      placeholder.replaceWith(svg);
    });
  };

  renderLucideIcons();
  window.renderLucideIcons = renderLucideIcons;

  const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
      mutation.addedNodes.forEach((node) => {
        if (!(node instanceof Element)) return;
        if (node.matches('i[data-lucide]')) {
          renderLucideIcons(node.parentElement || document);
          return;
        }
        if (node.querySelector && node.querySelector('i[data-lucide]')) {
          renderLucideIcons(node);
        }
      });
    });
  });

  observer.observe(document.body, {
    childList: true,
    subtree: true
  });
})();
