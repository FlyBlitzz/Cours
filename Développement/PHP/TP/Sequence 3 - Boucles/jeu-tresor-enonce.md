# TP PHP : Algorithmique et Génération Procédurale de Grille

#### **Filière :** BTS SIO (Services Informatiques aux Organisations)
#### **Module :** Développement Web / Algorithmique
#### **Compétences visées :** Maîtrise des structures de contrôle, logique algorithmique, résolution de problèmes.

---

### **Contexte**

En tant que développeur junior, vous êtes chargé de créer le moteur d'initialisation pour un mini-jeu d'aventure en mode console. Le jeu se déroule sur une grille où des éléments (joueur, trésor, obstacles) doivent être placés. Pour garantir la rejouabilité, la position de certains éléments doit être aléatoire à chaque lancement.

Votre mission est d'écrire un script PHP qui génère une configuration de départ unique et valide, puis l'affiche à l'écran.

### **Objectifs Pédagogiques**

Ce TP a pour but de vous faire manipuler en profondeur les structures de contrôle fondamentales de PHP pour résoudre un problème logique concret. À la fin de ce TP, vous devrez être capable de :

1.  Mettre en œuvre un algorithme de type **"générer et tester"** à l'aide de boucles `while`.
2.  Concevoir une logique de **détection de collision** entre plusieurs éléments.
3.  Utiliser des boucles `for` imbriquées pour **parcourir et afficher une grille 2D**.
4.  Structurer un programme séquentiel complexe sans l'aide de structures de données avancées.

---

## **Déroulé du Travail**

### **Partie 1 : Configuration et Éléments Fixes**

Dans votre script PHP, commencez par définir les paramètres de base du jeu.

1.  Créez une variable `$tailleGrille` et initialisez-la à `10`.
2.  Définissez 5 murs en créant des paires de variables pour leurs coordonnées X et Y. Ces murs seront toujours aux mêmes endroits.
    ```php
    // Exemple
    $mur1X = 2; $mur1Y = 2;
    $mur2X = 2; $mur2Y = 3;
    $mur3X = 2; $mur3Y = 4;
    $mur4X = 6; $mur4Y = 6;
    $mur5X = 7; $mur5Y = 6;
    ```

### **Partie 2 : Placement Aléatoire Garanti du Joueur**

C'est le premier défi logique. Vous devez placer le joueur (`P`) sur une case aléatoire de la grille, tout en garantissant qu'il n'apparaît pas sur un mur.

**Algorithme à implémenter avec une boucle `while` :**
1.  Créez une variable "drapeau" (ex: `$positionValide`) et initialisez-la à `false`. Cela forcera votre script à entrer dans la boucle au moins une fois.
2.  Ouvrez une boucle `while` qui continuera tant que `$positionValide` est `false`.
3.  **À l'intérieur de la boucle :**
    a. Générez des coordonnées `$joueurX` et `$joueurY` aléatoires (entre 0 et 9) à l'aide de la fonction `rand()`.
    b. Faites une "supposition optimiste" : considérez que la position est valide en passant votre drapeau `$positionValide` à `true`.
    c. Testez cette supposition : écrivez une condition `if` qui vérifie si les coordonnées (`$joueurX`, `$joueurY`) sont identiques à celles de **l'un des 5 murs**.
    d. Si une collision est détectée, invalidez votre supposition en remettant le drapeau `$positionValide` à `false`. La boucle `while` effectuera alors une nouvelle itération.

### **Partie 3 : Placement Aléatoire Garanti du Trésor**

Le principe est le même que pour le joueur, mais la condition de collision est plus complexe. Le trésor (`T`) ne peut être ni sur un mur, ni sur la case déjà occupée par le joueur.

1.  Réutilisez la même structure de boucle `while` que pour le joueur.
2.  La condition de collision à l'intérieur de votre boucle devra vérifier si les coordonnées aléatoires du trésor (`$tresorX`, `$tresorY`) correspondent :
    *   Aux coordonnées de l'un des 5 murs.
    *   **OU** aux coordonnées du joueur (`$joueurX`, `$joueurY`) qui viennent d'être validées.

### **Partie 4 : Affichage de la Grille**

Une fois tous les éléments placés, vous devez "dessiner" l'état final de la grille dans la console.

1.  Utilisez une première boucle `for` (pour les lignes `y` de 0 à 9).
2.  Imbriquez à l'intérieur une seconde boucle `for` (pour les colonnes `x` de 0 à 9).
3.  Au cœur de cette double boucle, pour chaque case `(x, y)`, utilisez une structure `if / elseif / else` pour décider quel caractère afficher :
    *   Si la case correspond à la position du joueur, affichez `P `.
    *   Sinon, si elle correspond à celle du trésor, affichez `T `.
    *   Sinon, si elle correspond à l'un des 5 murs, affichez `# `.
    *   Sinon (si la case est vide), affichez `. `.
4.  N'oubliez pas d'afficher un saut de ligne (`PHP_EOL`) après la fin de chaque ligne de la grille (après la boucle `for` intérieure).

---

### **Résultat Attendu**

Lorsque vous exécutez votre script, vous devriez obtenir un affichage similaire à celui-ci. Les positions du joueur (`P`) et du trésor (`T`) doivent changer à chaque exécution, mais les murs (`#`) restent fixes.

```text
==================================
     AFFICHAGE DE LA GRILLE
==================================

. . . . . . . . . .
. . . . . . . . . .
. . # . . . . . . .
. . # . P . . . . .
. . # . . . . . . .
. . . . . . . . . .
. . . . . . # # . .
. . . . . . . . . .
. . T . . . . . . .
. . . . . . . . . .

Légende : P = Joueur, T = Trésor, # = Mur, . = Case vide
```

