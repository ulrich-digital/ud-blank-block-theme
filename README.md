# UD Theme: Blank Block Theme

Full Site Editing (FSE) Block Theme mit klarer src/build-Struktur für SCSS und JavaScript.

## Struktur

src/    → Entwicklung (SCSS, JS)  
build/  → kompilierte Assets (werden geladen)

## Architektur

### JavaScript

src/js/frontend.js → Frontend  
src/js/editor.js   → Editor  

Module:

src/js/frontend/  
src/js/editor/  
src/js/shared/  

↓

build/frontend.js  
build/editor.js  

### CSS / SCSS

src/scss/style.scss  → Frontend  
src/scss/editor.scss → Editor  
src/scss/blocks.scss → zusätzliche Block-Styles  

↓

build/style.css  
build/editor.css  
build/blocks.css  

## Hinweise

- Das Theme lädt ausschliesslich Dateien aus /build  
- src/ dient nur der Entwicklung  

## Autor

[ulrich.digital gmbh](https://ulrich.digital)

## Lizenz

GPL v2 or later  
https://www.gnu.org/licenses/gpl-2.0.html