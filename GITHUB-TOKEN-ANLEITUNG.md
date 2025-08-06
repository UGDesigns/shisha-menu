# 🔑 GitHub Access Token - Schritt-für-Schritt Anleitung

## 🤔 Wann brauchen Sie ein Access Token?

**Nur bei PRIVATEN Repositories!**
- ✅ **Public Repository**: KEIN Token nötig
- 🔒 **Private Repository**: Token erforderlich

## 🚀 Schritt 1: GitHub Personal Access Token erstellen

### Neue Methode (Fine-grained tokens - Empfohlen):

1. **Gehen Sie zu GitHub.com** und loggen Sie sich ein
2. **Klicken Sie oben rechts auf Ihr Profilbild** 
3. **Settings** → **Developer settings** (ganz unten links)
4. **Personal access tokens** → **Fine-grained tokens**
5. **"Generate new token"** klicken

### Konfiguration des Tokens:
- **Token name**: `WordPress Git Updater`
- **Expiration**: `90 days` oder `No expiration` 
- **Resource owner**: Ihr Username
- **Repository access**: 
  - `Selected repositories` → Ihr `shisha-menu` Repository wählen
- **Repository permissions**:
  - **Contents**: `Read` ✅
  - **Metadata**: `Read` ✅
  - **Pull requests**: `Read` (optional)

6. **"Generate token"** klicken
7. **Token SOFORT kopieren!** (Wird nur einmal angezeigt)

### Alternative: Classic tokens (Legacy):

1. **Settings** → **Developer settings** → **Personal access tokens** → **Tokens (classic)**
2. **"Generate new token (classic)"**
3. **Note**: `WordPress Git Updater`
4. **Expiration**: `90 days` oder `No expiration`
5. **Scopes** auswählen:
   - ✅ `repo` (Full control of private repositories)
6. **"Generate token"** klicken
7. **Token kopieren!**

## 🔧 Schritt 2: Token in WordPress eintragen

### Git Updater Settings:

1. **WordPress Admin** → **Settings** → **Git Updater**
2. **"GitHub" Tab** klicken
3. **GitHub Access Token** Feld: Token einfügen
4. **"Save Changes"** klicken

### Alternative: Per wp-config.php (Sicherer):

Fügen Sie in `wp-config.php` hinzu:
```php
// GitHub Token für Git Updater
define( 'GITHUB_ACCESS_TOKEN', 'ghp_xxxxxxxxxxxxxxxxxxxx' );
```

## 📱 Screenshot-Anleitung:

```
GitHub.com → Ihr Profil (oben rechts) → Settings
↓
Developer settings (unten links)
↓
Personal access tokens → Fine-grained tokens
↓
Generate new token
↓
Repository: shisha-menu auswählen
Permissions: Contents (Read), Metadata (Read)
↓
Generate token → KOPIEREN!
```

## 🔍 Token finden/verwalten:

**Bereits erstellte Tokens anzeigen:**
1. GitHub → Settings → Developer settings
2. Personal access tokens → Fine-grained tokens
3. Alle Ihre Tokens werden aufgelistet

**Token bearbeiten/verlängern:**
- Klicken Sie auf den Token-Namen
- Expiration Date ändern
- Permissions anpassen

## 🚨 Token-Sicherheit:

### ✅ Dos:
- Token sicher aufbewahren (Passwort-Manager)
- Minimale Berechtigungen vergeben
- Regelmäßig erneuern (90 Tage)
- Bei Verdacht sofort löschen

### ❌ Don'ts:
- Token NIEMALS in Code/Git committen
- Nicht in öffentlichen Bereichen teilen
- Nicht zu viele Berechtigungen vergeben

## 🎯 Beispiel Token-Format:

```
Fine-grained: github_pat_11XXXXXXXXX_XXXXXXXXXXXXXXXXXXXXXXXX
Classic: ghp_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

## 🆘 Troubleshooting:

### "Authentication failed":
- Token korrekt eingegeben?
- Repository-Zugriff gewährt?
- Token noch gültig?

### "Rate limit exceeded":
- Token verwenden statt ohne Token
- Warten und später versuchen

### Token vergessen:
- Neuen Token erstellen
- Alten Token löschen

## 💡 Pro-Tipp:

**Für Public Repository:** Erstellen Sie KEINEN Token! Git Updater funktioniert auch ohne Token bei öffentlichen Repositories.

**Für Private Repository:** Token ist zwingend erforderlich.

## 📝 Checkliste:

- [ ] GitHub Account vorhanden
- [ ] Repository erstellt (public/private?)
- [ ] Bei private: Token erstellt
- [ ] Token in Git Updater Settings eingetragen
- [ ] Test: Plugin-Update prüfen

**Fertig!** Ihr GitHub Update-System ist jetzt vollständig konfiguriert.