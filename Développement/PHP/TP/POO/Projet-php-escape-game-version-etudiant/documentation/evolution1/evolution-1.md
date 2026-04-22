# Évolution n°1 : Intégration d’un chronomètre avec une classe `Timer`

## 🟦 Contexte

Dans ce module d’amélioration, vous allez enrichir le projet Escape Game déjà réalisé en PHP orienté objet.
Votre objectif : **ajouter une gestion propre du temps grâce à une classe dédiée `Timer`**.

---

## 🟥 Travail demandé

Vous devez :

1. **Créer une nouvelle classe `Timer`** jouant le rôle de chronomètre.
2. **Modifier `escape.php`** pour intégrer ce chronomètre :

   * démarrer le timer avant la boucle du jeu,
   * l’arrêter après la dernière énigme,
   * afficher le temps de jeu à la fin.
3. Respecter l’architecture suivante :

   ```
   /src
       Enigme.php
       Salle.php
       BanqueEnigmes.php
       SessionJeu.php
       Timer.php   ← NOUVEAU
   escape.php
   ```
4. Afficher la durée sous un format compréhensible (`mm:ss`).

---

## 🟦 Détails de la classe `Timer`

### ✔ Rôle de la classe

La classe `Timer` doit :

* enregistrer le moment de début,
* enregistrer le moment de fin,
* calculer la durée totale,
* proposer un format d’affichage propre.

### ✔ Modèle attendu (`Timer.php`)

```php
<?php

class Timer
{
    private int $debut;
    private int $fin;

    public function start(): void
    {
        // TODO
    }

    public function stop(): void
    {
        // TODO
    }

    public function getDuree(): int
    {
        // TODO
    }

    public function getDureeFormatee(): string
    {
        // TODO 
    }
}
```

---

## 🟨 Fonctionnement attendu

1. Le jeu démarre → le timer commence automatiquement.
2. Le joueur répond aux énigmes normalement.
3. Lorsqu’il répond correctement à la dernière énigme → la boucle se termine.
4. Le timer s’arrête.
5. L’écran final doit afficher :

   * nombre d’énigmes résolues,
   * nombre de tentatives,
   * **temps total du jeu**, format `mm:ss`.

---

## 🟦 Exemple de sortie (fin du jeu)

```
-------------------------------------------
        F I N   D E   L A   S E S S I O N
-------------------------------------------

Résultat pour l'équipe : Les Phoenix

✔ Énigmes résolues : 3 / 3
✔ Nombre total de tentatives : 4
✔ Bravo, vous avez terminé la salle !
⏱️ Temps total : 01:42

===========================================
        MERCI D’AVOIR JOUÉ AVEC NOUS !
===========================================


```

---

## 🟩 Critères de réussite

* [ ] La classe `Timer` est correctement créée.
* [ ] Le timer démarre **avant** le début de la session.
* [ ] Le timer s’arrête **après** la dernière énigme.
* [ ] Le temps total est affiché.
* [ ] Le format d’affichage est propre (`mm:ss`).
* [ ] Aucun code inutile.
* [ ] Architecture respectée.

À vous de jouer ! 🚀
