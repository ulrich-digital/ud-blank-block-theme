# UD Theme: Blank Block Theme

Full Site Editing (FSE) Block Theme mit src-Struktur für SCSS und JavaScript.

## Struktur

```text
src/    → Entwicklung (SCSS, JS)
build/  → kompilierte Assets
```

## Architektur

```text
Entry Points:
frontend → Frontend
editor   → Editor
shared   → Frontend + Editor
```

Diese Struktur gilt für:
- JavaScript (`src/js/`)
- SCSS (`src/scss/`)

## Hinweise

- Änderungen erfolgen in Modulen, nicht in Entry Points
- Entry Points bündeln die Struktur
- Das Theme verwendet kompilierte Assets

## Autor

[ulrich.digital gmbh](https://ulrich.digital)

## Lizenz

GPL v2 or later  
https://www.gnu.org/licenses/gpl-2.0.html