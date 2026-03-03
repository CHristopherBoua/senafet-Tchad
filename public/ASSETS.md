# Assets requis (images, vidéos, build)

## Déploiement sur le serveur

Après chaque déploiement (git pull, FTP, etc.), **vérifiez que les fichiers listés ci‑dessous sont bien présents** dans `public/images/` sur le serveur. S’ils ne sont pas dans le dépôt Git, copiez-les manuellement ou ajoutez‑les au déploiement. Sans ces fichiers, les vidéos et images renverront des 404 (ex. `video_institution.mp4`, `medium.mp4`, logos, etc.). Le site affichera un fallback (texte ou fond) lorsque le fichier est absent.

---

## ⚠️ Erreurs 404 : vérifications serveur

Si les **fichiers JS/CSS** (`build/assets/app-*.js`, `app-*.css`) ou les **images** renvoient 404 :

1. **Racine document (Document Root)**  
   Le serveur web (Apache, Nginx, Laragon) doit avoir la **racine document** pointant vers le dossier **`public`** du projet, et non vers la racine du projet.  
   - ✅ Correct : `c:\laragon\www\senafet\public`  
   - ❌ Incorrect : `c:\laragon\www\senafet`

2. **Variables d’environnement**  
   Dans `.env`, vérifiez :
   - `APP_URL=http://senafet.td` (sans slash final)
   - `ASSET_URL` : laissez vide sauf si vous utilisez un domaine ou sous-dossier dédié aux assets.

3. **Rebuild des assets**  
   Après un `git pull` ou changement du front, exécutez :  
   `npm run build`  
   Les fichiers générés se trouvent dans `public/build/assets/`.

---

## Fichiers à placer dans `public/images/`

| Fichier | Utilisation |
|---------|-------------|
| `logo.png` | Logo SENAFET, favicon, articles |
| `filigrame.png` | Filigrane des sections |
| `filigrame-2.jpg` | Motif de fond (section JIF) |
| `popup.jpg` | Image du popup / overlay |
| `logo-ministere-femme-enfance.png` | Logo ministère (header) |
| `president.png` | Photo président (section mot du Chef de l’État) |
| `femme1.jpeg` | Section « SENAFET en chiffres » |
| `femme2.jpeg` | Section thème / partage |
| `video-poster.jpg` | Poster vidéo section principale |
| `video-launch-poster.jpg` | Poster vidéo section lancement |
| `medium.mp4` | Vidéo de fond (section vidéo) |
| `Final_1.webm` | Vidéo hero (format WebM) |
| `video_institution.mp4` | Vidéo institutionnelle (section lancement) |

---

## Dossier `public/images/speakers/`

| Fichier | Utilisation |
|---------|-------------|
| `speaker1.jpg` | Intervenant 1 |
| `speaker2.jpg` | Intervenant 2 |
| `speaker3.jpg` | Intervenant 3 |

---

## Dossier `public/images/participation/`

| Fichier | Utilisation |
|---------|-------------|
| `delegue.jpg` | Carte « Devenir délégué » |
| `exposant.jpg` | Carte « Devenir exposant » |
| `sponsor.jpg` | Carte « Devenir sponsor » |

---

Une fois ces fichiers ajoutés aux bons emplacements, les 404 sur les images et vidéos disparaîtront. Les chemins utilisés dans les vues (Blade) correspondent à ces emplacements.
