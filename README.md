# UD Theme: Blank Block Theme

Ein modulares Full-Site-Editing-Theme für WordPress, optimiert für die Blockentwicklung mit Build-Prozess für CSS und JavaScript sowie einer klaren src/build-Struktur.

## Funktionen
- Vollständig kompatibel mit WordPress Full Site Editing (FSE)
- Eigene Farbpalette und Verlaufsdefinitionen
- Integration von Webfonts über `theme.json`
- Unterstützt benutzerdefinierte Templates (z. B. Single ohne Titel)
- Strukturierter Build-Prozess für SCSS und JavaScript

## Projektstruktur
```text
/src        → Entwicklungsdateien (SCSS, JS)
/build      → kompilierte Assets (CSS, JS)
/assets     → statische Dateien (Fonts, Bilder etc.)
/templates  → Block-Templates
/parts      → Template Parts
```


## Build-Prozess

```bash
# Assets einmalig bauen
npm run build

# Watch-Modus für Entwicklung
npm run watch
```

- SCSS wird zu CSS kompiliert
- JavaScript wird gebündelt und optimiert
- Ausgabe erfolgt ausschliesslich im `/build`-Verzeichnis

## Technische Hinweise

- Styling basiert auf SCSS (`src/scss/`)
- JavaScript liegt in `src/js/`
- Kompilierte Assets werden aus `/build` geladen
- Konfiguration von Farben, Typografie und Layout erfolgt über `theme.json`
- Layout-Breiten: `contentSize: 100%`, `wideSize: 1000px`


## Anforderungen
- WordPress ≥ 6.5
- PHP ≥ 8.0
- Node ≥ 18 (npm ≥ 8)


## Autor
[ulrich.digital gmbh](https://ulrich.digital)

## Lizenz
GPL v2 or later
[https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)
