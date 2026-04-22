# **TP POO PHP — Prototype d’Escape Game Numérique**

## 🟦 Contexte

EscapeTech, une jeune entreprise spécialisée dans les **escape games numériques**, souhaite développer un **prototype de moteur de jeu** pour tester ses futures salles.

Vous devez créer un mini‑programme en **PHP orienté objet**, permettant :

* d’enregistrer une salle,
* de stocker plusieurs énigmes,
* de gérer une session de jeu pour une équipe,
* de vérifier les réponses une par une,
* d’afficher clairement l’avancement jusqu’à la résolution totale.

📌 **Aucune base de données.**
📌 **Aucun héritage.**


Ce prototype servira de base aux futurs stagiaires de l’entreprise.

---

## 🟩 Objectifs pédagogiques

* Comprendre et appliquer l’encapsulation
* Concevoir un petit modèle objet simple (3 classes)
* Manipuler des objets en interaction
* Organiser un mini‑projet PHP
* Écrire un script principal propre et lisible

---

## 🟧 Travail demandé

Vous devez produire :

1. **Quatre classes PHP** : `Enigme`, `Salle`, `BanqueEnigmes`, `SessionJeu`
2. **Un script principal `escape.php`** permettant de jouer une session complète
3. **Une organisation de fichiers claire** :

   ```
   /src
       Enigme.php
       Salle.php
       BanqueEnigmes.php
       SessionJeu.php
   escape.php
   ```
4. Un programme fonctionnel en mode console.
5. L’utilisation de la classe `BanqueEnigmes` pour :

   * stocker **une banque d’énigmes prédéfinies** ;
   * sélectionner **un nombre donné d’énigmes au hasard** (ex. 3) ;
   * ajouter cette sélection aléatoire d'enigmes à une `Salle` 

---

## 🟥 Détails des classes à concevoir

Le programme complet repose sur **4 classes** qui collaborent entre elles :

* `Enigme` : représente une énigme individuelle ;
* `Salle` : regroupe les énigmes qui composent la salle du jeu ;
* `BanqueEnigmes` : stocke une grande liste d’énigmes et en fournit un sous‑ensemble aléatoire ;
* `SessionJeu` : gère la progression d’une équipe dans une salle.

Les signatures exactes des classes sont précisées ci‑dessous.

### **1️⃣ Classe Enigme**

Représente une énigme du jeu.

**Attributs privés** :

* `texte : string`
* `reponseAttendue : string`
* `indice : string`
* `estResolue : bool`

**Méthodes** :

* constructeur
* `verifierReponse(string) : bool`
* getters

---

### **2️⃣ Classe Salle**

Contient toutes les énigmes qui composent une salle.

**Attributs privés** :

* `nom : string`
* `enigmes : array`

**Méthodes** :

* constructeur
* `ajouterEnigme(Enigme)`
* `getEnigme(int) : Enigme`
* `getNombreEnigmes() : int`

---

### **3️⃣ Classe BanqueEnigmes**

Cette classe permet de stocker une liste d’énigmes et d’en tirer un nombre donné **aléatoirement** au début du jeu.

**Attributs privés** :

* `liste : array` (liste d’objets Enigme)

**Méthodes** :

* constructeur : initialise la banque (tableau d’énigmes prédéfinies)
* `ajouterEnigme(Enigme)`
* `getEnigmesAleatoires(int $nb) : array` → renvoie `$nb` énigmes choisies aléatoirement
* `getTaille() : int`

Cette classe sera utilisée dans `escape.php` pour construire une salle dynamique.

---

### **4️⃣ Classe SessionJeu**

Gère une partie pour une équipe.

**Attributs privés** :

* `nomEquipe : string`
* `salle : Salle`
* `indexEnigmeCourante : int`
* `nombreTentatives : int`

**Méthodes** :

* constructeur
* `getEnigmeEnCours() : Enigme`
* `repondreAEnigme(string) : bool`
* `estTerminee() : bool`
* `getIndexEnigmeCourante() : int`
* `getNombreTentatives() : int`
* `afficherProgression() : void` → **Affiche "Énigme X / Y" à partir des informations internes de la session.**

Cette méthode doit être utilisée dans votre boucle de jeu pour rendre l’avancement clair et lisible pour le joueur.

---

## 🟪 Fonctionnement attendu du programme

Voici **le déroulement précis du jeu**, étape par étape, tel qu’il doit se produire dans votre programme. À suivre à la lettre pour garantir une logique claire et compréhensible.

### 🔹 **1. Saisie du nom de l’équipe**

Le programme demande au joueur d’entrer un nom d’équipe.
Sans cela, la session ne démarre pas.

Ex. :

```
Nom de votre équipe : >> Les Phoenix
```

---

### 🔹 **2. Création automatique de la banque, de la salle et des énigmes**

Le script doit :

* créer une **banque d’énigmes** (`BanqueEnigmes`) contenant plusieurs objets `Enigme` prédéfinis (par exemple 6 à 10 énigmes) ;
* demander au jeu de tirer **un nombre donné d’énigmes aléatoires** (ex. 3 énigmes) via la méthode `getEnigmesAleatoires(int $nb)` ;
* créer une **Salle** et y ajouter uniquement ces énigmes sélectionnées.

Chaque énigme doit comporter :

* un **texte** affiché au joueur ;
* une **réponse attendue** ;
* un **indice** qui n’apparaît que si la réponse est fausse.

Les étudiants ne doivent **pas** saisir les énigmes au clavier : elles sont définies dans la classe `BanqueEnigmes` ou dans le script qui initialise cette banque.

---

### 🔹 **3. Début de la session de jeu**

Le programme affiche :

* le nom de l’équipe,
* le nom de la salle,
* un écran d’introduction.

Puis la boucle du jeu commence.

---

### 🔹 **4. Boucle de jeu — Fonctionnement détaillé**

Pour chaque énigme :

#### 👉 Étape 4.1 — Affichage clair de la progression

Le programme doit afficher :

* le numéro de l’énigme actuelle,
* le nombre total d’énigmes.

Ex. :

```
Énigme 2 / 3
```

#### 👉 Étape 4.2 — Affichage du texte de l’énigme

Puis :

```
Je commence la nuit et finis le matin...
```

#### 👉 Étape 4.3 — Saisie de la réponse

Le joueur saisit un texte libre :

```
Votre réponse : >> le sommeil
```

#### 👉 Étape 4.4 — Vérification de la réponse

Le programme doit :

* comparer la réponse **sans tenir compte de la casse**,
* normaliser la réponse (`trim`, `strtolower`).

Deux cas possibles :

**✔ Bonne réponse :**

* affichage d’un message de réussite,
* passage automatique à l’énigme suivante.

**❌ Mauvaise réponse :**

* affichage d’un message d’erreur,
* affichage de l’**indice** de l’énigme,
* la même énigme reste affichée tant qu’elle n’est pas résolue.

Pas de limite de tentatives.
Chaque tentative augmente un compteur global.

---

### 🔹 **5. Transition entre énigmes**

Lorsque la réponse est correcte, le programme doit explicitement afficher :

```
✔ Bonne réponse !
→ Passage à l’énigme suivante…
```

Cela permet aux étudiants et au joueur de comprendre ce qu’il se passe.

---

### 🔹 **6. Fin de la salle**

Quand la dernière énigme est résolue :

* la boucle s’arrête,
* le programme affiche un message de victoire.

Ex. :

```
✔ Vous avez résolu la dernière énigme !
```

---

### 🔹 **7. Écran final**

Le programme doit afficher :

* le nom de l’équipe,
* le nombre total d’énigmes,
* le nombre total de tentatives,
* un message de félicitations.

Cet écran doit être clair, structuré et lisible pour valider la fin du jeu.

---

## 🟨 Critères de réussite

✔ Encapsulation strictement respectée
✔ Aucun attribut public
✔ Méthodes claires et cohérentes
✔ Script principal propre et lisible
✔ Session jouable jusqu’à la fin
✔ Structure identique à celle demandée

---

# 🟦 Exemple d’exécution (mode console)

Voici un exemple de sortie attendue lorsque votre programme fonctionne correctement :

```
===========================================
      ESCAPETECH - ESCAPE GAME NUMÉRIQUE
===========================================

Nom de votre équipe : >> Les Phoenix

Création de la salle...
Salle prête !

-------------------------------------------
       Lancement de la session de jeu
-------------------------------------------

Équipe : Les Phoenix
Salle  : "La Chambre du Codex"

-------------------------------------------
 Énigme 1 / 3
-------------------------------------------
Quel est le résultat de : 3 + 5 ?
Votre réponse : >> 9

❌ Mauvaise réponse…
Indice : C'est une addition très simple.

Votre réponse : >> 8

✔ Bonne réponse !
→ Passage à l’énigme suivante…

-------------------------------------------
 Énigme 2 / 3
-------------------------------------------
Je commence la nuit et finis le matin...
Votre réponse : >> le sommeil

✔ Bonne réponse !
→ Passage à l’énigme suivante…

-------------------------------------------
 Énigme 3 / 3
-------------------------------------------
Mot mystère : contient P, H, P…
Votre réponse : >> php

✔ Bonne réponse !
→ Vous avez résolu la dernière énigme !

-------------------------------------------
        F I N   D E   L A   S E S S I O N
-------------------------------------------

Résultat pour l'équipe : Les Phoenix

✔ Énigmes résolues : 3 / 3
✔ Nombre total de tentatives : 4
✔ Bravo, vous avez terminé la salle !

===========================================
        MERCI D’AVOIR JOUÉ AVEC NOUS !
===========================================
```

---

## 🟦 Checklist de validation 

Avant de rendre votre travail, vérifiez point par point :

### ✔ Structure du projet

* [ ] Le dossier **/classes** existe
* [ ] Les fichiers suivants sont présents : `Enigme.php`, `Salle.php`, `BanqueEnigmes.php`, `SessionJeu.php`
* [ ] Le fichier `escape.php` est à la racine du projet

### ✔ Classe *Enigme*

* [ ] Tous les attributs sont **privés**
* [ ] Le constructeur initialise texte / réponse / indice
* [ ] La méthode `verifierReponse()` retourne bien **true/false**
* [ ] La réponse est normalisée (`trim`, `strtolower`)
* [ ] Les getters sont présents

### ✔ Classe *Salle*

* [ ] Tous les attributs sont **privés**
* [ ] Le tableau d’énigmes contient bien des objets `Enigme`
* [ ] La méthode `ajouterEnigme()` fonctionne
* [ ] La méthode `getEnigme()` gère correctement un index valide
* [ ] La méthode `getNombreEnigmes()` renvoie la bonne valeur

### ✔ Classe *BanqueEnigmes*

* [ ] Tous les attributs sont **privés**
* [ ] La liste interne contient bien des objets `Enigme`
* [ ] La méthode `ajouterEnigme()` fonctionne
* [ ] La méthode `getEnigmesAleatoires(int $nb)` renvoie un tableau d’énigmes
* [ ] Le tirage au sort ne dépasse jamais la taille de la banque

### ✔ Classe *SessionJeu*

* [ ] Tous les attributs sont **privés**
* [ ] Le constructeur reçoit un nom d’équipe + une salle
* [ ] `getEnigmeEnCours()` renvoie bien l’énigme actuelle
* [ ] `repondreAEnigme()` incrémente le compteur de tentatives
* [ ] L’avancement à l’énigme suivante fonctionne
* [ ] `estTerminee()` renvoie **true** uniquement à la fin
* [ ] La méthode `getIndexEnigmeCourante()` existe

### ✔ Script principal `escape.php`

* [ ] Le programme demande le **nom de l’équipe**
* [ ] Une **BanqueEnigmes** est créée et remplie dans le code
* [ ] Un **nombre d’énigmes à utiliser** (par exemple 3) est fixé clairement dans le script
* [ ] Les énigmes sont tirées **aléatoirement** depuis la banque et ajoutées à une `Salle`
* [ ] La progression est affichée sous forme `Énigme X / Y` (via `afficherProgression()` ou équivalent)
* [ ] Les réponses sont demandées au clavier
* [ ] En cas d’erreur : un message + un **indice** s’affichent
* [ ] En cas de succès : passage à l’énigme suivante
* [ ] Le jeu se termine uniquement quand **toutes** les énigmes sélectionnées sont résolues
* [ ] L’écran final affiche le nombre de tentatives + un message de félicitations

### ✔ Qualité du code

* [ ] Aucun attribut public dans toutes les classes
* [ ] Nom des méthodes clair et cohérent
* [ ] Indentation propre
* [ ] Commentaires utiles sans surcharge
* [ ] Aucune variable ou méthode inutile dans le script


---

## 🟩 Fin du TP

Vous disposez maintenant de tous les éléments pour concevoir un prototype d’Escape Game simple mais complet, idéal pour pratiquer la programmation orientée objet en PHP.
