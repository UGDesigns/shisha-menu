# 🚀 GitHub Update System für Shisha Menu Plugin

## Schritt 1: GitHub Repository erstellen

1. Gehen Sie zu [github.com](https://github.com)
2. Klicken Sie auf "New Repository"
3. Repository Name: `shisha-menu`
4. Beschreibung: "WordPress Elementor Widget für Shisha-Bar Menükarten"
5. Public (kostenlos) oder Private (wenn Sie GitHub Pro haben)
6. NICHT "Initialize with README" anklicken
7. "Create Repository" klicken

## Schritt 2: Plugin zu GitHub hochladen

### Option A: Via Terminal/Git Bash
```bash
cd /pfad/zu/shisha-menu
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin https://github.com/UGDesigns/shisha-menu.git
git push -u origin main
```

### Option B: Via GitHub Desktop
1. GitHub Desktop installieren
2. "Add existing repository"
3. Shisha-menu Ordner auswählen
4. Commit erstellen
5. "Publish repository" klicken

### Option C: Direkt auf GitHub hochladen
1. Auf GitHub.com im Repository
2. "Upload files" klicken
3. Alle Plugin-Dateien hochladen
4. Commit erstellen

## Schritt 3: Plugin-Header anpassen ✅

Die Plugin-Datei wurde bereits mit den nötigen GitHub Headers versehen:
- `GitHub Plugin URI: https://github.com/UGDesigns/shisha-menu`
- `Primary Branch: main`

**✅ ERLEDIGT:** URLs wurden bereits auf Ihren Username `UGDesigns` angepasst!

## Schritt 4: GitHub Updater Plugin installieren

### Im WordPress Admin:
1. Plugins → Installieren → Neues Plugin hinzufügen
2. Suchen nach "Git Updater" (von Andy Fragen)
3. Installieren und Aktivieren

### Alternative: Manuell installieren
1. Download von: https://github.com/afragen/git-updater/releases
2. ZIP-Datei in WordPress hochladen
3. Aktivieren

## Schritt 5: Erstes Release auf GitHub erstellen

1. Gehen Sie zu Ihrem GitHub Repository
2. Klicken Sie auf "Releases" (rechte Seite)
3. "Create a new release"
4. Tag version: `1.0.0` (muss mit Plugin-Version übereinstimmen)
5. Release title: `Version 1.0.0`
6. Beschreibung hinzufügen (Changelog)
7. "Publish release" klicken

## Schritt 6: Updates veröffentlichen

Für zukünftige Updates:

1. **Version erhöhen** in `shisha-menu.php`:
   ```php
   * Version: 1.0.1
   ```

2. **Änderungen committen**:
   ```bash
   git add .
   git commit -m "Version 1.0.1: Beschreibung der Änderungen"
   git push origin main
   ```

3. **Neues Release erstellen**:
   - Tag: `1.0.1`
   - Changelog beschreiben
   - Release veröffentlichen

4. **WordPress prüft automatisch**:
   - Der "Aktualisieren" Button erscheint bei allen Nutzern!

## 🎯 Zusammenfassung der Schritte:

1. ✅ Plugin-Header wurden angepasst
2. ⏳ GitHub Repository erstellen
3. ⏳ Plugin hochladen
4. ⏳ Git Updater Plugin installieren
5. ⏳ Release erstellen
6. ✅ Updates sind dann automatisch!

## 💡 Pro-Tipps:

- **Semantic Versioning**: Major.Minor.Patch (1.2.3)
- **Changelog**: Immer dokumentieren was sich geändert hat
- **Testing**: Erst auf Staging-System testen
- **Branches**: `main` für stabile Releases, `develop` für Entwicklung

## 🆘 Troubleshooting:

**Update-Button erscheint nicht?**
- Git Updater Cache leeren: Settings → Git Updater → "Flush Cache"
- Prüfen ob Repository public ist
- Version im Release-Tag muss mit Plugin-Version übereinstimmen

**Private Repository?**
- Personal Access Token in Git Updater Settings eintragen
- Token erstellen: GitHub → Settings → Developer settings → Personal access tokens

## 📝 Beispiel Changelog für Release:

```markdown
## Version 1.0.1
- 🐛 Fix: Widget erscheint jetzt korrekt in Elementor
- ✨ Neu: Debug-Modus für Entwickler
- 🔧 Verbesserung: Namespace-Struktur optimiert
- 📝 Dokumentation aktualisiert
```

Fertig! Nach diesen Schritten haben Sie ein professionelles Update-System über GitHub!