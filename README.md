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
Entry Points:
src/js/frontend.js    → Frontend
src/js/editor.js      → Editor
src/js/development.js → Entwicklung / Hilfsskripte
```

```text
Module:
src/js/frontend/
src/js/editor/
src/js/shared/
```

### CSS / SCSS

```text
Entry Points:
src/scss/style.scss  → Frontend
src/scss/editor.scss → Editor
src/scss/blocks.scss → Block-Styles (Frontend + Editor)
```

```text
Struktur:
src/scss/blocks/
src/scss/editor/
```

## Hinweise

- Änderungen erfolgen in Modulen, nicht in Entry Points
- Entry Points bündeln und importieren die Struktur
- Das Theme verwendet kompilierte Assets

## Autor

[ulrich.digital gmbh](https://ulrich.digital)

## Lizenz

GPL v2 or later  
https://www.gnu.org/licenses/gpl-2.0.html