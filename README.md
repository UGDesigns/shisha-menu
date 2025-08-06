# Shisha Menu - Elementor Widget Plugin

Ein vollständiges WordPress-Plugin für Shisha-Bars, das ein anpassbares Elementor-Widget zur Darstellung von Menükarten bereitstellt.

## Features

- ✅ Vollständig kompatibel mit Elementor Pro 3.30+
- ✅ Kategorien und Unterkategorien für Tabak-Sorten, Getränke und Snacks
- ✅ Vollständige Design-Kontrolle über den Elementor-Editor
- ✅ Responsive und barrierefreie Gestaltung
- ✅ Mehrsprachigkeit (i18n) unterstützt
- ✅ Custom CSS Support
- ✅ WordPress Coding Standards konform
- ✅ Sicherheit durch Sanitization und Escaping

## Anforderungen

- WordPress 6.0 oder höher
- PHP 7.4 oder höher
- Elementor 3.30 oder höher

## Installation

1. Laden Sie das Plugin-Verzeichnis `shisha-menu` in Ihr `/wp-content/plugins/` Verzeichnis hoch
2. Aktivieren Sie das Plugin über das WordPress Admin-Panel unter "Plugins"
3. Stellen Sie sicher, dass Elementor installiert und aktiviert ist

## Verwendung

1. Erstellen oder bearbeiten Sie eine Seite mit Elementor
2. Suchen Sie nach dem "Shisha Menu" Widget in der Elementor-Widget-Liste
3. Ziehen Sie das Widget auf Ihre Seite
4. Konfigurieren Sie Ihre Menüeinträge:
   - Fügen Sie Kategorien hinzu (z.B. "Tabak Sorten", "Getränke", "Snacks")
   - Fügen Sie Unterkategorien hinzu (z.B. "Premium Tabak", "Softdrinks")
   - Fügen Sie Menüeinträge mit Name, Beschreibung, Preis und optionalem Bild hinzu

## Widget-Einstellungen

### Inhalt
- **Menü Einträge**: Verwalten Sie Kategorien, Unterkategorien und einzelne Einträge
- **Layout**: Wählen Sie zwischen Liste, Raster oder Karten-Ansicht
- **Spalten**: Bestimmen Sie die Anzahl der Spalten (für Raster/Karten-Layout)
- **Bilder anzeigen**: Ein-/Ausschalten der Produktbilder
- **Währung**: Anpassung von Symbol und Position

### Stil
- **Container**: Hintergrund, Abstände, Rahmen und Schatten
- **Kategorien**: Farbe, Typografie und Abstände
- **Unterkategorien**: Farbe und Typografie
- **Menü Einträge**: Individuelle Gestaltung für Name, Beschreibung und Preis

## Barrierefreiheit

Das Plugin folgt den WCAG 2.1 Richtlinien:
- Semantisches HTML für bessere Screen-Reader-Unterstützung
- ARIA-Labels für wichtige Elemente
- Unterstützung für Hochkontrast-Modus
- Reduzierte Animationen bei Bedarf
- Keyboard-Navigation

## Sicherheit

- Alle Benutzereingaben werden sanitized
- Ausgaben werden escaped
- Nonce-Überprüfung für Admin-Aktionen
- Capability-Checks für Berechtigungen

## Übersetzung

Das Plugin ist vollständig übersetzbar. Die `.pot` Datei befindet sich im `languages` Verzeichnis.

## Entwicklung

### Dateistruktur
```
shisha-menu/
├── assets/
│   ├── css/
│   │   └── frontend.css
│   └── js/
│       └── frontend.js
├── includes/
│   └── widgets/
│       └── shisha-menu-widget.php
├── languages/
│   └── shisha-menu.pot
├── shisha-menu.php
└── README.md
```

### Hooks

Das Plugin nutzt folgende Elementor-Hooks:
- `elementor/widgets/register` - Widget-Registrierung
- `elementor/frontend/after_enqueue_styles` - Styles laden
- `elementor/frontend/after_register_scripts` - Scripts registrieren

## Support

Bei Fragen oder Problemen erstellen Sie bitte ein Issue im GitHub Repository.

## Lizenz

GPL v2 oder später