# 🚨 GitHub Download Fehler - Lösungen

## Fehler: "Not Found" beim Download von GitHub

**Fehlermeldung:**
```
Herunterladen des Installationspakets von https://api.github.com/repos/UGDesigns/shisha-menu/zipball/master …
Der Download ist fehlgeschlagen. Not Found
```

## 🔍 Mögliche Ursachen:

### 1. **Repository existiert noch nicht** ❌
Das Repository `https://github.com/UGDesigns/shisha-menu` wurde noch nicht erstellt.

### 2. **Falscher Branch-Name** ❌
GitHub verwendet jetzt `main` statt `master` als Standard-Branch.

### 3. **Repository ist leer** ❌
Noch keine Dateien hochgeladen.

### 4. **Private Repository ohne Token** ❌
Repository ist privat, aber kein Access Token konfiguriert.

## 🛠️ Lösungen:

### ✅ Lösung 1: Repository erstellen

1. **Gehen Sie zu [github.com](https://github.com)**
2. **"New Repository" klicken**
3. **Repository Name:** `shisha-menu`
4. **Public** wählen (wichtig!)
5. **"Create Repository"**

### ✅ Lösung 2: Plugin-Dateien hochladen

Nach Repository-Erstellung:

**Option A - Direkt auf GitHub:**
1. Im leeren Repository: **"uploading an existing file"** klicken
2. Alle Plugin-Dateien hochziehen
3. Commit Message: "Initial plugin upload"
4. **"Commit new files"**

**Option B - Git Bash/Terminal:**
```bash
cd /pfad/zu/shisha-menu
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin https://github.com/UGDesigns/shisha-menu.git
git push -u origin main
```

### ✅ Lösung 3: Branch-Namen korrigieren

Das Plugin sucht nach `master`, GitHub verwendet aber `main`:

**In shisha-menu.php ändern:**
```php
* Primary Branch: main
```

**Oder Repository auf master umstellen:**
```bash
git branch -M master
git push -u origin master
```

### ✅ Lösung 4: Release erstellen

Nach Upload der Dateien:

1. **Im GitHub Repository:** "Releases" klicken
2. **"Create a new release"**
3. **Tag version:** `1.0.0` (exakt wie in Plugin!)
4. **Release title:** `Version 1.0.0`
5. **"Publish release"**

## 🎯 Schritt-für-Schritt Fix:

### Phase 1: Repository einrichten
1. Repository auf GitHub erstellen
2. Plugin-Dateien hochladen
3. Ersten Commit machen

### Phase 2: Release erstellen
1. Tag `1.0.0` erstellen
2. Release veröffentlichen

### Phase 3: WordPress testen
1. Git Updater Cache leeren: **Settings → Git Updater → "Flush Cache"**
2. Plugin-Update prüfen: **Plugins → Updates**

## 🔍 Repository-Status prüfen:

**Besuchen Sie diese URLs:**
- Repository: `https://github.com/UGDesigns/shisha-menu`
- API Check: `https://api.github.com/repos/UGDesigns/shisha-menu`
- Releases: `https://api.github.com/repos/UGDesigns/shisha-menu/releases`

**Wenn 404 Error** → Repository existiert nicht
**Wenn leer** → Dateien hochladen erforderlich

## 💡 Sofort-Test:

**Prüfen Sie ob das Repository existiert:**
1. Gehen Sie zu: `https://github.com/UGDesigns/shisha-menu`
2. **Existiert?** ✅ Weiter zu Schritt 2
3. **404 Error?** ❌ Repository erst erstellen

## 🆘 Notfall-Lösung:

**Falls nichts funktioniert:**

1. **Repository löschen** (falls vorhanden)
2. **Neu erstellen** mit exakt dem Namen: `shisha-menu`
3. **Als PUBLIC** erstellen
4. **Plugin-Dateien hochladen**
5. **Release 1.0.0** erstellen
6. **Git Updater Cache** leeren

**Das Repository muss online sein, bevor Git Updater funktioniert!**