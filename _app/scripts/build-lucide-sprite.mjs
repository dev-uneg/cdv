import fs from 'node:fs';
import path from 'node:path';

const projectRoot = process.cwd();
const iconsDir = path.join(projectRoot, 'node_modules', 'lucide-static', 'icons');
const outputPath = path.join(projectRoot, '_assets', 'lucide-sprite.svg');
const searchRoots = [path.join(projectRoot, '_app', 'pages')];
const iconPattern = /data-lucide="([a-z0-9-]+)"/g;

if (!fs.existsSync(iconsDir)) {
  console.error('No se encontro node_modules/lucide-static/icons. Ejecuta: npm install');
  process.exit(1);
}

const iconNames = new Set();

const walk = (dir) => {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const fullPath = path.join(dir, entry.name);
    if (entry.isDirectory()) {
      walk(fullPath);
      continue;
    }

    if (!entry.isFile() || !fullPath.endsWith('.php')) {
      continue;
    }

    const content = fs.readFileSync(fullPath, 'utf8');
    for (const match of content.matchAll(iconPattern)) {
      iconNames.add(match[1]);
    }
  }
};

for (const root of searchRoots) {
  if (fs.existsSync(root)) {
    walk(root);
  }
}

const sortedIcons = [...iconNames].sort();
if (sortedIcons.length === 0) {
  console.error('No se encontraron placeholders data-lucide en vistas.');
  process.exit(1);
}

const symbols = sortedIcons.map((iconName) => {
  const iconPath = path.join(iconsDir, `${iconName}.svg`);
  if (!fs.existsSync(iconPath)) {
    throw new Error(`Icono no encontrado en lucide-static: ${iconName}`);
  }

  const iconSvg = fs.readFileSync(iconPath, 'utf8');
  const viewBoxMatch = iconSvg.match(/viewBox="([^"]+)"/);
  const viewBox = viewBoxMatch ? viewBoxMatch[1] : '0 0 24 24';
  const inner = iconSvg
    .replace(/^[\s\S]*?<svg[^>]*>/, '')
    .replace(/<\/svg>\s*$/, '')
    .trim();

  return `  <symbol id="lucide-${iconName}" viewBox="${viewBox}">${inner}</symbol>`;
});

const sprite = [
  '<?xml version="1.0" encoding="UTF-8"?>',
  '<svg xmlns="http://www.w3.org/2000/svg" style="display:none">',
  ...symbols,
  '</svg>',
  '',
].join('\n');

fs.writeFileSync(outputPath, sprite, 'utf8');
console.log(`Sprite generado: _assets/lucide-sprite.svg (${sortedIcons.length} iconos)`);
