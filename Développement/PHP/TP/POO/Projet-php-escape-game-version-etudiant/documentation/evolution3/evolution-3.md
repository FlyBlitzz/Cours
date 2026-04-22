# **Évolution n°3 — Amélioration de l'interface utilisateur avec CLImate**

## 🟦 Contexte

Dans ce module d'amélioration, vous allez enrichir l'expérience utilisateur de l'Escape Game en remplaçant les simples `echo` et `print` par une bibliothèque dédiée à l'affichage en ligne de commande : **CLImate**.

Votre objectif : **rendre l'interface plus attrayante, colorée et professionnelle grâce à CLImate**.

---

## 🟨 Pourquoi utiliser CLImate ?

CLImate permet :

* d'améliorer l'expérience utilisateur avec des couleurs et du style,
* de structurer l'affichage avec des bordures et des tableaux,
* de rendre l'interface plus professionnelle et moderne,
* de faciliter la maintenance du code d'affichage,
* de séparer la logique d'affichage du reste du code (bonne pratique).

L'interface devient un véritable **tableau de bord interactif** en ligne de commande.

---

## 🟥 Travail demandé

Vous devez :

1. **Installer le package CLImate** via Composer.
2. **Modifier `escape.php`** pour intégrer CLImate :
   * remplacer tous les `echo` par des méthodes CLImate,
   * ajouter des couleurs et du style aux messages,
   * créer des bordures pour structurer l'affichage,
   * utiliser des tableaux pour afficher les informations,
   * styliser les messages de succès, d'erreur et d'information.
3. Respecter l'architecture suivante :

   ```
   /src
       Enigme.php
       Salle.php
       BanqueEnigmes.php
       SessionJeu.php
       Timer.php
       Score.php
   escape.php   ← MODIFIÉ
   composer.json   ← MODIFIÉ (ajout de league/climate)
   ```

---

## 🟦 Détails de l'intégration CLImate

📚 **Documentation officielle** : [https://climate.thephpleague.com/](https://climate.thephpleague.com/)

### ✔ Fonctionnalités CLImate à utiliser

CLImate offre de nombreuses possibilités :

* **Couleurs** : `cyan()`, `green()`, `red()`, `yellow()`, `magenta()`, `blue()`
* **Style** : `bold()` pour le texte en gras
* **Bordures** : `border()` pour créer des séparateurs visuels
* **Tableaux** : `table()` pour afficher des données structurées
* **Input** : `input()->prompt()` pour les saisies utilisateur
* **Sauts de ligne** : `br()` pour gérer l'espacement

### ✔ Exemple d'utilisation

```php
<?php

use League\CLImate\CLImate;

$climate = new CLImate();

// Bordures stylisées
$climate->border('═', 120);

// Texte coloré et en gras
$climate->bold()->cyan()->inline('Titre stylisé');

// Tableau
$climate->table([
    ['Clé', 'Valeur'],
    ['Équipe', 'Les Phoenix'],
]);

// Input utilisateur
$nom = $climate->input('Nom de votre équipe :')->prompt();

// Messages colorés
$climate->green()->bold()->inline('✓ Succès !');
$climate->red()->bold()->inline('✗ Erreur !');
```

---

## 🟨 Fonctionnement attendu

1. Le jeu démarre avec un en-tête stylisé avec bordures.
2. Les messages utilisent des couleurs cohérentes :
   * **Cyan/Bleu** : titres et informations principales
   * **Vert** : messages de succès
   * **Rouge** : messages d'erreur
   * **Jaune** : indices et avertissements
   * **Magenta** : sections importantes
3. Les informations sont structurées dans des tableaux.
4. Les bordures séparent visuellement les sections.
5. L'écran final est entièrement stylisé avec CLImate.

---

## 🟦 Exemple de sortie complète

```
════════════════════════════════════════════════════════════════════════════════════════════════════════════
      ESCAPETECH - ESCAPE GAME NUMÉRIQUE
════════════════════════════════════════════════════════════════════════════════════════════════════════════

Nom de votre équipe : Les Phoenix

Création de la salle...
✓ Salle prête avec 3 énigmes sélectionnées aléatoirement parmi 50 !

────────────────────────────────────────────────────────────
       Lancement de la session de jeu
────────────────────────────────────────────────────────────

┌─────────┬──────────────────────────────┐
│ Équipe  │ Les Phoenix                  │
│ Salle   │ La Chambre du Codex          │
└─────────┴──────────────────────────────┘

────────────────────────────────────────────────────────────
📊 Progression : Énigme 1 / 3
────────────────────────────────────────────────────────────

🔍 ÉNIGME :
Je commence la nuit et finis le matin. Je suis indispensable mais invisible. Qui suis-je ?

Votre réponse : le sommeil

✓ Bonne réponse !
→ Passage à l'énigme suivante…

────────────────────────────────────────────────────────────
📊 Progression : Énigme 2 / 3
────────────────────────────────────────────────────────────

🔍 ÉNIGME :
Quel est le résultat de : 3 + 5 ?

Votre réponse : 7

✗ Mauvaise réponse…
💡 Indice : Pense à l'addition basique !

────────────────────────────────────────────────────────────
📊 Progression : Énigme 2 / 3
────────────────────────────────────────────────────────────

🔍 ÉNIGME :
Quel est le résultat de : 3 + 5 ?

Votre réponse : 8

✓ Bonne réponse !
→ Passage à l'énigme suivante…

────────────────────────────────────────────────────────────
📊 Progression : Énigme 3 / 3
────────────────────────────────────────────────────────────

🔍 ÉNIGME :
Mot caché : Il contient les lettres P, H, P, et c'est ton langage préféré 😉

Votre réponse : php

✓ Bonne réponse !
→ Passage à l'énigme suivante…

════════════════════════════════════════════════════════════
        F I N   D E   L A   S E S S I O N
════════════════════════════════════════════════════════════

Résultat pour l'équipe : Les Phoenix

┌──────────────────────────────┬──────────┐
│ Énigmes résolues             │ 3 / 3    │
│ Nombre total de tentatives   │ 4        │
│ Temps total                  │ 01:42    │
│ Score final                  │ 72/100   │
└──────────────────────────────┴──────────┘

✓ Bravo, vous avez terminé la salle !
🔥 Très bon score ! Continue comme ça !

════════════════════════════════════════════════════════════
        MERCI D'AVOIR JOUÉ AVEC NOUS !
════════════════════════════════════════════════════════════
```

---

## 🟩 Critères de réussite

* [ ] Le package CLImate est installé via Composer.
* [ ] Tous les `echo` sont remplacés par des méthodes CLImate.
* [ ] Les couleurs sont utilisées de manière cohérente.
* [ ] Les bordures structurent visuellement l'affichage.
* [ ] Les tableaux sont utilisés pour les données structurées.
* [ ] Les messages de succès/erreur sont différenciés visuellement.
* [ ] L'interface est plus attrayante qu'avant.
* [ ] Le code reste lisible et maintenable.

À vous de jouer ! 🚀

