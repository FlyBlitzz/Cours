# TP PHP – Fonctions utilisateur (console)

## Exercice 1 – Lecture sécurisée d’un entier dans un intervalle

---

## Objectif

Écrire une **fonction utilisateur** permettant de lire une valeur saisie au clavier et de garantir qu’il s’agit d’un **entier valide compris dans un intervalle donné**.

---

## Travail demandé

Écrire une fonction nommée :

```php
lireEntierDansIntervalle
```

### La fonction devra :

* prendre **trois paramètres** :

  * un message à afficher (`string`)
  * une valeur minimale (`int`)
  * une valeur maximale (`int`)
* retourner un **entier**
* utiliser `readline()` pour la saisie
* contrôler la validité de la saisie
* redemander tant que la valeur n’est pas correcte

---

## Contraintes

* ✔️ paramètres et type de retour **obligatoirement typés**
* ✔️ la validation est faite **dans la fonction**
* ✔️ aucune erreur ne doit arrêter le programme

---

## Exemple d’utilisation (code d’appel)

Le code suivant illustre **comment la fonction sera utilisée** dans le programme principal :

```php
<?php

// Appel de la fonction (implémentation à écrire)
$note = lireEntierDansIntervalle("Saisir une note (0 à 20) : ", 0, 20);

// Exploitation de la valeur retournée
echo "Note valide : $note\n";
```

---

## Exemple de comportement attendu à l’exécution

```
Saisir une note (0 à 20) : dix
Erreur : veuillez saisir un nombre entier.
Saisir une note (0 à 20) : 30
Erreur : la valeur doit être comprise entre 0 et 20.
Saisir une note (0 à 20) : 14
Note valide : 14
```



