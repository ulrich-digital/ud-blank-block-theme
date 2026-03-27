# UD Theme: Blank Block Theme

Full Site Editing (FSE) Block Theme mit src-Struktur für SCSS und JavaScript.

## Struktur

```text
src/    → Entwicklung (SCSS, JS)
build/  → kompilierte Assets
```

## Architektur

### JavaScript

```text
src/js/frontend.js    → Frontend
src/js/editor.js      → Editor
src/js/development.js → Entwicklung / Hilfsskripte
```

```text
src/js/frontend/  → Frontend-Module
src/js/editor/    → Editor-Module
src/js/shared/    → gemeinsam genutzte Funktionen
```

### CSS / SCSS

```text
src/scss/style.scss  → Frontend
src/scss/editor.scss → Editor
src/scss/blocks.scss → Block-Styles (Frontend + Editor)
```

## Hinweise

- Entwickelt wird in `src/`
- Das Theme verwendet kompilierte Assets
- `style.css` im Root bleibt für die WordPress-Theme-Informationen bestehen

## Autor

[ulrich.digital gmbh](https://ulrich.digital)

## Lizenz

GPL v2 or later  
https://www.gnu.org/licenses/gpl-2.0.html