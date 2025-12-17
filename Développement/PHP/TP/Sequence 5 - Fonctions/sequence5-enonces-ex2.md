# TP PHP – Fonctions utilisateur (console)

## Exercice 2 – Lecture sécurisée d’un mot selon un format imposé

### 🎯 Objectif

Écrire une fonction qui lit une chaîne de caractères saisie au clavier et vérifie qu’elle respecte un **format précis**.

---

### Travail demandé

Écrire une fonction nommée :

```php
lireCodeUtilisateur
```

### La fonction devra :

* prendre **un message** (`string`)
* retourner une **chaîne de caractères valide**
* utiliser `readline()`

### Règles de validation :

* le code doit contenir **exactement 3 lettres** suivies de **2 chiffres**
* aucun espace
* exemple valide : `ABC12`
* exemples invalides : `AB12`, `ABCD12`, `ABC1A`

### Contraintes

* validation entièrement dans la fonction
* affichage d’un message d’erreur en cas de saisie invalide

---

### Exemple d’utilisation (code d’appel)

```php
$code = lireCodeUtilisateur("Saisir un code utilisateur (AAA99) : ");
echo "Code valide : $code\n";
```

---

### Exemple d’exécution

```
Saisir un code utilisateur (AAA99) : A12
Erreur : format invalide.
Saisir un code utilisateur (AAA99) : ABC45
Code valide : ABC45
```

