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

```text
src/js/editor.js      → Editor (Backend)
src/js/frontend.js    → Frontend
src/js/development.js → Entwicklungs-/Hilfsskripte

↓ build

build/editor.js
build/frontend.js
build/development.js
```

### CSS / SCSS

```text
src/scss/editor.scss  → Editor Styles
src/scss/style.scss   → Frontend Styles
src/scss/blocks.scss  → Block Styles

↓ build

build/editor.css
build/style.css
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
- Konfiguration über `theme.json`

---

## Autor

[ulrich.digital gmbh](https://ulrich.digital)

## Lizenz

GPL v2 or later  
https://www.gnu.org/licenses/gpl-2.0.html