# **Évolution n°2 — Ajout d’un système de score avec une classe `Score`**

## 🟦 Contexte
Ajouter un système de score complet et motivant à l’Escape Game en PHP.
Cette évolution repose sur une *classe dédiée `Score`*

---

## 🟨 Pourquoi ajouter un système de score ?

Un système de score permet :

* d’enrichir la motivation du joueur,
* d’évaluer la performance en fonction du temps et du nombre de tentatives,
* d’introduire des notions importantes : pondération, calcul, règles métier,
* de séparer clairement la logique du score du reste du jeu (bonne pratique POO).

Le score devient un véritable **indicateur de performance**.

---

## 🟩 Rôle de la classe `Score`

La classe `Score` doit :

1. récupérer les informations finales de la partie :

   * durée totale (en secondes),
   * nombre total de tentatives,
   * nombre d’énigmes.
2. appliquer une formule pour déterminer un score sur 100.
3. fournir un message final personnalisé selon la performance.
4. fournir les valeurs formatées pour l’écran de fin.

---

## 🟥 Modèle attendu : `Score.php`



```php
<?php

class Score
{
    private int $tentatives;
    private int $duree;
    private int $nbEnigmes;
    private int $valeur;
    private string $commentaire;

    public function __construct(int $tentatives, int $duree, int $nbEnigmes)
    {
        $this->tentatives = $tentatives;
        $this->duree = $duree;
        $this->nbEnigmes = $nbEnigmes;

        $this->calculerScore();
        $this->genererCommentaire();
    }

    private function calculerScore(): void
    {
        // Barème proposé :
        // - Score de base : 100 points
        // - Malus : 2 points par tentative au‑delà du nombre d’énigmes
        // - Malus temps : 1 point par tranche de 20 secondes

        // TODO
    }

    private function genererCommentaire(): void
    {
        // TODO
    }

    public function getScore(): int
    {
        // TODO
    }

    public function getCommentaire(): string
    {
        // TODO
    }
}
```

La méthode `genererCommentaire(`) applique des règles métier très simples :

| Intervalle de score | Interprétation | Commentaire                                         |
| ------------------- | -------------- | --------------------------------------------------- |
| **90 à 100**        | Excellent      | Valoriser une performance parfaite                  |
| **70 à 89**         | Très bon       | Encourager sans surévaluer                          |
| **50 à 69**         | Moyen          | Reconnaître la réussite mais pointer l’amélioration |
| **0 à 49**          | Faible         | Encourager, éviter la démotivation                  |


---

## 🟨 Fonctionnement attendu

À la fin du jeu :

1. Le Timer indique la durée totale.
2. `SessionJeu` donne le nombre de tentatives.
3. `Salle` donne le nombre total d’énigmes.
4. La classe `Score` :

   * applique automatiquement une formule,
   * produit un score sur 100,
   * génère un message motivant.

---

## 🟦 Exemple de sortie finale complète

```
-------------------------------------------
        F I N   D E   L A   S E S S I O N
-------------------------------------------

Résultat pour l'équipe : Les Phoenix

✔ Énigmes résolues : 3 / 3
✔ Nombre total de tentatives : 5
✔ Bravo, vous avez terminé la salle !
⏱️ Temps total : 01:42
🏆 Score final : 72/100
🔥 Très bon score ! Continue comme ça !

===========================================
        MERCI D’AVOIR JOUÉ AVEC NOUS !
===========================================
```

---

## 🟩 7. Critères de réussite

* [ ] La classe `Score` est correctement créée.
* [ ] La méthode de calcul applique le barème donné.
* [ ] Le score est borné entre 0 et 100.
* [ ] Un commentaire de performance est généré.
* [ ] Le score apparaît dans l’écran final.
* [ ] Le code est clair et bien présenté.

À vous de jouer ! 🚀
