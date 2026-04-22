# **Évolution n°4 — Intégration d'un menu interactif avec CLI-Menu**

## 🟦 Contexte

Dans ce module d'amélioration, vous allez enrichir l'expérience utilisateur de l'Escape Game en ajoutant un **menu interactif** permettant de naviguer dans l'application avant de lancer une partie.

Votre objectif : **créer une interface de menu professionnelle et intuitive grâce à la bibliothèque CLI-Menu**.

---

## 🟨 Pourquoi ajouter un menu interactif ?

Un menu interactif permet :

* d'améliorer l'expérience utilisateur avec une navigation claire,
* de séparer les différentes fonctionnalités (règles, jeu, quitter),
* de rendre l'application plus professionnelle et structurée,
* de faciliter l'accès aux informations (règles du jeu) avant de jouer,
* d'introduire des notions importantes : navigation, callbacks, gestion d'état.

L'application devient un véritable **programme interactif** avec une interface de menu moderne.

---

## 🟥 Travail demandé

Vous devez :

1. **Installer le package CLI-Menu** via Composer.
2. **Modifier `escape.php`** pour intégrer le menu :
   * créer une fonction pour afficher les règles du jeu,
   * créer une fonction pour construire et afficher le menu principal,
   * intégrer le menu au démarrage de l'application,
   * permettre la navigation entre les différentes options.
3. Respecter l'architecture suivante :

   ```
   /src
       Enigme.php
       Salle.php
       BanqueEnigmes.php
       SessionJeu.php
       Timer.php
       Score.php
   escape.php   ← MODIFIÉ (ajout du menu)
   composer.json   ← MODIFIÉ (ajout de php-school/cli-menu)
   ```

---

## 🟦 Détails de l'intégration CLI-Menu

📚 **Documentation officielle** : [https://github.com/php-school/cli-menu](https://github.com/php-school/cli-menu)

### ✔ Fonctionnalités CLI-Menu à utiliser

CLI-Menu offre de nombreuses possibilités :

* **Menu interactif** : navigation avec les flèches du clavier
* **Personnalisation** : couleurs, bordures, largeur, padding
* **Callbacks** : actions à exécuter lors de la sélection d'un item
* **Gestion de la fermeture** : possibilité de revenir au menu après une action
* **Intégration avec CLImate** : combinaison des deux bibliothèques pour une expérience optimale

### ✔ Structure attendue

Le menu principal doit contenir :

1. **📜 Règles du jeu** : affiche les règles avec CLImate, puis retourne au menu
2. **▶ Jouer** : lance une partie complète du jeu
3. **❌ Quitter** : ferme l'application

### ✔ Exemple d'utilisation

```php
<?php

use League\CLImate\CLImate;
use PhpSchool\CliMenu\CliMenu;
use PhpSchool\CliMenu\Builder\CliMenuBuilder;

// Initialisation de CLImate
$climate = new CLImate();

function afficherMenuPrincipal(CLImate $climate): void {
    $menuBuilder = (new CliMenuBuilder())
        ->setTitle('ESCAPE GAME - MENU PRINCIPAL')
        ->setExitButtonText('❌ Quitter')
        ->setForegroundColour('cyan')
        ->setBackgroundColour('black')
        ->setWidth(70)
        ->setPadding(2)
        ->setMargin(2)
        ->setBorder(1, 'cyan')
        ->addItem('📜 Règles du jeu', function (CliMenu $menu) use ($climate) {
            $menu->close();
            afficherRegles($climate);
            afficherMenuPrincipal($climate);
        })
        ->addItem('▶ Jouer', function (CliMenu $menu) use ($climate) {
            $menu->close();
            lancerEscapeGame($climate);
            exit(0);
        });

    $menu = $menuBuilder->build();
    $menu->open();
}

// Démarrage de l'application
$climate->clear();
afficherMenuPrincipal($climate);
```

### ✔ Fonction d'affichage des règles

La fonction `afficherRegles()` doit :

* utiliser CLImate pour un affichage stylisé,
* présenter les règles de manière claire et structurée,
* permettre de retourner au menu principal après consultation.

---

## 🟨 Fonctionnement attendu

1. Au démarrage de l'application, le menu principal s'affiche.
2. L'utilisateur peut naviguer avec les flèches du clavier.
3. Sélection de **"Règles du jeu"** :
   * affichage des règles avec CLImate,
   * possibilité de revenir au menu après consultation.
4. Sélection de **"Jouer"** :
   * lancement d'une partie complète,
   * fin de l'application après la partie.
5. Sélection de **"Quitter"** :
   * fermeture de l'application.

---

## 🟦 Exemple de sortie complète

### Menu principal

```
┌──────────────────────────────────────────────────────────────────────┐
│                                                                      │
│              ESCAPE GAME - MENU PRINCIPAL                            │
│                                                                      │
│  ┌──────────────────────────────────────────────────────────────┐    │
│  │  📜 Règles du jeu                                            │    │
│  └──────────────────────────────────────────────────────────────┘    │
│  ┌──────────────────────────────────────────────────────────────┐    │
│  │  ▶ Jouer                                                     │    │
│  └──────────────────────────────────────────────────────────────┘    │
│                                                                      │
│  ❌ Quitter                                                          │
│                                                                      │
└──────────────────────────────────────────────────────────────────────┘
```

### Affichage des règles

```
════════════════════════════════════════════════════════════════════════════════
                    RÈGLES DU JEU
════════════════════════════════════════════════════════════════════════════════

📖 Bienvenue dans ESCAPETECH !

🎯 Objectif
Résolvez toutes les énigmes de la salle pour gagner.

⚙️ Fonctionnement
• Vous devrez résoudre 3 énigmes sélectionnées aléatoirement
• Chaque énigme a une réponse unique
• Si vous donnez une mauvaise réponse, un indice vous sera fourni
• Vous pouvez réessayer autant de fois que nécessaire

⏱️ Score
Votre score final dépend de :
  - Le nombre de tentatives (moins c'est mieux)
  - Le temps total pour résoudre toutes les énigmes
  - Le nombre d'énigmes résolues

🏆 Bonne chance !

════════════════════════════════════════════════════════════════════════════════

Appuyez sur Entrée pour retourner au menu...
```

### Exécution complète avec le menu

```
┌──────────────────────────────────────────────────────────────────────┐
│                                                                      │
│              ESCAPE GAME - MENU PRINCIPAL                            │
│                                                                      │
│  ┌──────────────────────────────────────────────────────────────┐    │
│  │  📜 Règles du jeu                                            │    │
│  └──────────────────────────────────────────────────────────────┘    │
│  ┌──────────────────────────────────────────────────────────────┐    │
│  │  ▶ Jouer                                                     │    │
│  └──────────────────────────────────────────────────────────────┘    │
│                                                                      │
│  ❌ Quitter                                                          │
│                                                                      │
└──────────────────────────────────────────────────────────────────────┘

[L'utilisateur sélectionne "▶ Jouer" avec les flèches et appuie sur Entrée]

════════════════════════════════════════════════════════════════════════════════
      ESCAPETECH - ESCAPE GAME NUMÉRIQUE
════════════════════════════════════════════════════════════════════════════════

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

* [ ] Le package CLI-Menu est installé via Composer.
* [ ] Un menu principal interactif est créé et fonctionnel.
* [ ] Le menu contient au moins deux options : "Règles du jeu" et "Jouer".
* [ ] La fonction d'affichage des règles utilise CLImate pour un rendu stylisé.
* [ ] La navigation entre le menu et les règles fonctionne correctement.
* [ ] Le menu est personnalisé (couleurs, bordures, largeur).
* [ ] L'application démarre directement sur le menu principal.
* [ ] Le code est clair, bien structuré et maintenable.
* [ ] L'intégration entre CLI-Menu et CLImate est harmonieuse.

À vous de jouer ! 🚀

