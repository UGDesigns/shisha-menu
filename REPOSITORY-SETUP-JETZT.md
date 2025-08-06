# 🚀 Repository Setup - Ihr Repository existiert bereits!

## ✅ Status: Repository https://github.com/UGDesigns/shisha-menu existiert

## 🎯 Nächste Schritte (5 Minuten):

### Schritt 1: Plugin-Dateien hochladen

**Da das Repository leer ist:**

1. **Gehen Sie zu:** https://github.com/UGDesigns/shisha-menu
2. **"uploading an existing file"** klicken (mittiger Link)
3. **Alle Plugin-Dateien** aus dem `shisha-menu` Ordner hochziehen:
   - `shisha-menu.php`
   - `includes/` Ordner
   - `assets/` Ordner  
   - `languages/` Ordner
   - Alle anderen Dateien

4. **Commit Message:** "Initial plugin upload v1.0.0"
5. **"Commit new files"** klicken

### Schritt 2: Erstes Release erstellen

**Direkt nach dem Upload:**

1. **"Releases"** klicken (rechte Seite im Repository)
2. **"Create a new release"**
3. **Tag version:** `1.0.0` (exakt wie im Plugin!)
4. **Release title:** `Version 1.0.0 - Initial Release`
5. **Beschreibung:**
   ```
   🎉 Erste Veröffentlichung des Shisha Menu Plugins
   
   ✨ Features:
   - Elementor Widget für Shisha-Menükarten
   - Kategorien und Unterkategorien
   - Vollständige Design-Kontrolle
   - Responsive Layouts
   - WordPress 6.6 & Elementor 3.30+ kompatibel
   ```
6. **"Publish release"** klicken

### Schritt 3: WordPress Update testen

1. **WordPress Admin** → **Settings** → **Git Updater**
2. **"Flush Cache"** klicken (wichtig!)
3. **Plugins** → Nach Updates suchen

## 🔍 Alternative: Git Bash Upload

Wenn Sie Git installiert haben:

```bash
# In den Plugin-Ordner wechseln
cd /pfad/zu/shisha-menu

# Git initialisieren
git init
git add .
git commit -m "Initial plugin upload v1.0.0"

# Mit GitHub verbinden
git remote add origin https://github.com/UGDesigns/shisha-menu.git
git branch -M main
git push -u origin main

# Tag für Release erstellen
git tag 1.0.0
git push origin 1.0.0
```

## 📋 Dateien die hochgeladen werden müssen:

```
shisha-menu/
├── shisha-menu.php ⭐ (Haupt-Plugin-Datei)
├── includes/
│   ├── widgets/
│   │   └── shisha-menu-widget.php
│   ├── class-auto-updater.php
│   └── class-updater.php
├── assets/
│   ├── css/
│   │   └── frontend.css
│   └── js/
│       ├── frontend.js
│       └── editor.js
├── languages/
│   └── shisha-menu.pot
├── docs/ (optional)
├── README.md
├── readme.txt
├── CHANGELOG.md
└── .gitignore
```

## ⚡ Nach dem Upload sollten Sie sehen:

- **Repository** mit allen Plugin-Dateien
- **"Releases"** mit Version 1.0.0
- **WordPress** zeigt Update-Optionen

## 🆘 Falls Probleme:

1. **Repository private?** → Public machen
2. **Falsche Dateien?** → shisha-menu.php muss im Root sein
3. **Keine Releases?** → Tag 1.0.0 erstellen
4. **Git Updater Fehler?** → Cache leeren + Token prüfen (falls private)

**Los geht's! Nach diesen Schritten funktioniert das Update-System perfekt! 🎉**