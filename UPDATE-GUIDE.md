# WordPress Plugin Update Guide - Shisha Menu

## 🔄 Methode 1: Manuelles Update (Empfohlen für Entwicklung)

### Via FTP/SFTP:
1. Verbinden Sie sich per FTP mit Ihrem Server
2. Navigieren Sie zu `/wp-content/plugins/shisha-menu/`
3. Laden Sie die aktualisierten Dateien hoch
4. Überschreiben Sie die alten Dateien

### Via WordPress Admin (ZIP-Upload):
1. Erstellen Sie eine ZIP-Datei des `shisha-menu` Ordners
2. Deaktivieren Sie das alte Plugin in WordPress
3. Löschen Sie das alte Plugin
4. Gehen Sie zu Plugins → Installieren → Plugin hochladen
5. Laden Sie die neue ZIP-Datei hoch
6. Aktivieren Sie das Plugin

### Via Hosting Control Panel:
1. Öffnen Sie den Dateimanager Ihres Hostings
2. Navigieren Sie zu `/wp-content/plugins/shisha-menu/`
3. Laden Sie die neuen Dateien hoch oder bearbeiten Sie sie direkt

## 🔄 Methode 2: Versionsnummer erhöhen (Wichtig!)

Ändern Sie die Versionsnummer in der Haupt-Plugin-Datei:

```php
/**
 * Plugin Name: Shisha Menu
 * Version: 1.0.1  // Erhöhen Sie diese Nummer
 */
```

Auch in den Konstanten:
```php
define( 'SHISHA_MENU_VERSION', '1.0.1' );
```

## 🔄 Methode 3: Auto-Update System implementieren

### Option A: GitHub Updater
1. Hosten Sie Ihr Plugin auf GitHub
2. Installieren Sie "GitHub Updater" Plugin
3. Fügen Sie Header zu Ihrer Plugin-Datei hinzu:

```php
/**
 * Plugin Name: Shisha Menu
 * Plugin URI: https://github.com/username/shisha-menu
 * GitHub Plugin URI: https://github.com/username/shisha-menu
 * Primary Branch: main
 */
```

### Option B: Eigenes Update-System

Fügen Sie diese Datei hinzu: