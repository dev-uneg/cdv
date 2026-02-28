(function () {
  const script = document.currentScript;
  const spriteHref = script?.dataset?.lucideSprite || '/_assets/lucide-sprite.svg';
  const placeholders = document.querySelectorAll('i[data-lucide]');
  const ns = 'http://www.w3.org/2000/svg';
  const xlinkNs = 'http://www.w3.org/1999/xlink';

  placeholders.forEach((placeholder) => {
    const iconName = placeholder.getAttribute('data-lucide');
    if (!iconName) {
      return;
    }

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
    placeholder.replaceWith(svg);
  });
})();
