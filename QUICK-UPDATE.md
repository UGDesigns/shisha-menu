# 🚀 Schnellanleitung: Plugin Update

## Sofort-Update (3 Schritte):

### 1️⃣ **Plugin deaktivieren**
```
WordPress Admin → Plugins → "Shisha Menu" → Deaktivieren
```

### 2️⃣ **Dateien ersetzen**
Wählen Sie eine Methode:

**A) FTP/FileZilla:**
- Verbinden Sie sich mit Ihrem Server
- Gehen Sie zu: `/wp-content/plugins/shisha-menu/`
- Löschen Sie alle alten Dateien
- Laden Sie die neuen Dateien hoch

**B) Hosting Control Panel (cPanel/Plesk):**
- Öffnen Sie den Dateimanager
- Navigieren Sie zu: `/wp-content/plugins/shisha-menu/`
- Löschen Sie den Ordner
- Laden Sie den neuen Ordner hoch

**C) WordPress Admin:**
- Löschen Sie das alte Plugin
- Plugins → Installieren → Plugin hochladen
- ZIP-Datei des Plugins hochladen

### 3️⃣ **Plugin aktivieren**
```
WordPress Admin → Plugins → "Shisha Menu" → Aktivieren
```

## 📦 ZIP-Datei erstellen:

### Windows:
1. Rechtsklick auf `shisha-menu` Ordner
2. "Senden an" → "ZIP-komprimierter Ordner"

### Mac:
1. Rechtsklick auf `shisha-menu` Ordner
2. "Komprimieren"

### Linux/Terminal:
```bash
zip -r shisha-menu.zip shisha-menu/
```

## ⚡ Noch schneller: Direct File Edit

Für kleine Änderungen:
1. **Plugin-Editor** (nicht empfohlen für Produktiv-Systeme):
   - WordPress Admin → Plugins → Plugin-Editor
   - Wählen Sie "Shisha Menu"
   - Bearbeiten Sie die Dateien direkt

2. **Hosting File Manager:**
   - Öffnen Sie den Dateimanager Ihres Hostings
   - Navigieren Sie zum Plugin-Ordner
   - Bearbeiten Sie Dateien direkt online

## 🔧 Problembehebung:

### Widget erscheint nicht?
1. Cache leeren:
   - Browser: Strg+F5 (Windows) / Cmd+R (Mac)
   - WordPress: Caching-Plugin Cache leeren
   - Elementor: Tools → Regenerate Files & Data

2. Elementor neu laden:
   - Seite bearbeiten mit Elementor
   - Klicken Sie auf das Hamburger-Menü (≡)
   - "Reload Editor" oder Seite neu laden

### Fehler nach Update?
1. **Debug aktivieren** in `wp-config.php`:
   ```php
   define( 'WP_DEBUG', true );
   define( 'WP_DEBUG_LOG', true );
   define( 'WP_DEBUG_DISPLAY', false );
   ```

2. **Logs prüfen** unter:
   `/wp-content/debug.log`

3. **Plugin zurücksetzen:**
   - Alten Ordner aus Backup wiederherstellen
   - Oder Plugin neu installieren

## 💡 Pro-Tipps:

1. **Immer Backup machen** vor Updates
2. **Erst auf Staging/Test-System** updaten
3. **Versionsnummer erhöhen** in der Haupt-Plugin-Datei
4. **Changelog führen** für Änderungen

## 🆘 Notfall-Rollback:

Falls etwas schief geht:
1. Per FTP zum Plugin-Ordner
2. Plugin-Ordner umbenennen (z.B. `shisha-menu-broken`)
3. WordPress lädt ohne das Plugin
4. Alten Ordner aus Backup wiederherstellen