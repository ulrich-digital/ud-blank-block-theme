# UD Theme: Blank Block Theme

Full Site Editing (FSE) Block Theme mit klarer src/build-Struktur für SCSS und JavaScript.

---

## Projektstruktur

```text
/src        → SCSS und JS (Quellcode)
/build      → kompilierte CSS- und JS-Dateien (werden geladen)
/assets     → statische Dateien (Fonts, Bilder etc.)
/templates  → Block-Templates
/parts      → Template Parts
```

---


## Architektur

### JavaScript

Entry Points:

```text
src/js/frontend.js    → Frontend
src/js/editor.js      → Editor (Backend)
src/js/development.js → Entwicklungs-/Hilfsskripte
```

Diese Dateien bündeln die Logik aus den Unterordnern:

```text
src/js/frontend/      → Frontend-spezifische Module
src/js/editor/        → Editor-spezifische Module
src/js/development/   → Dev-/Debug-Logik
src/js/shared/        → gemeinsam genutzte Funktionen
```

↓ build

```text
build/frontend.js
build/editor.js
build/development.js
```

---

### CSS / SCSS

Entry Points:

```text
src/scss/style.scss   → Frontend Styles
src/scss/editor.scss  → Editor Styles
src/scss/blocks.scss  → Block Styles (Frontend + Editor)
```

Diese Dateien bündeln die Struktur aus:

```text
src/scss/
  _base.scss
  _layout.scss
  _header.scss
  _footer.scss
  _page.scss
  _reset.scss
  _variables.scss
  _plugins.scss

src/scss/blocks/      → Block-spezifische Styles
src/scss/editor/      → Editor-spezifische Styles
```

↓ build

```text
build/style.css
build/editor.css
build/blocks.css
```

---

## Build

Build erfolgt über npm-Scripts in der `package.json`.

- SCSS → CSS
- JS → gebündelte Dateien
- Ausgabe in `/build`

---

## Hinweise

- Das Theme lädt ausschliesslich Dateien aus `/build`
- `src/` dient nur der Entwicklung


---

## Autor

[ulrich.digital gmbh](https://ulrich.digital)

## Lizenz

GPL v2 or later  
https://www.gnu.org/licenses/gpl-2.0.html