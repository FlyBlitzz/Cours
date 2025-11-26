# PARTIE 1 — Questions de cours

### 1. Différence entre `if...else` et `while`

**Réponse :**

- `if...else` : exécute un bloc d’instructions **une seule fois** si la condition est vraie.
- `while` : répète un bloc d’instructions **tant que** la condition reste vraie.

**Commentaire :**
L’un est une structure **conditionnelle**, l’autre **itérative**.

---

### 2. Valeur de `$resultat`

```php
$a = 5;
$b = 8;
$resultat = ($a < $b);
```

**Réponse :**
`$resultat = true`

**Commentaire :**
L’expression `(5 < 8)` est vraie, donc `$resultat` contient la valeur booléenne `true`.

---

### 3. Valeur booléenne des expressions

| Expression         | Résultat attendu |
| ------------------ | ---------------- |
| a) `5 > 8`         | `false`          |
| b) `10 == "10"`    | `true`           |
| c) `true && false` | `false`          |
| d) `!false`        | `true`           |

**Commentaire :**
Faire attention à la différence entre `==` (égalité de valeur) et `===` (égalité stricte : valeur **et** type).

---

### 4. Condition : `$note` entre 10 et 15 inclus

**Réponse :**

```php
if ($note >= 10 && $note <= 15)
```

**Commentaire :**
Les deux bornes doivent être incluses avec `>=` et `<=`.

---

### 5. Sortie du code suivant

```php
$x = 0;
while ($x < 3) {
    echo $x;
    $x = $x + 2;
}
```

**Déroulement :**

- Itération 1 → $x=0 → affiche `0` → $x=2
- Itération 2 → $x=2 (<3) → affiche `2` → $x=4
- Itération 3 → $x=4 (faux) → fin de boucle

**Réponse :**
Affiche `02`

---

# PARTIE 2 — Code à interpréter

### Exercice 1

```php
$a = 5;
$b = 8;

if ($a > $b)
    echo "A est plus grand";
elseif ($a == $b)
    echo "A et B sont égaux";
else {
    $a = $a + 3;
    $b = $b - 2;
    if ($a > $b)
        echo "A devient plus grand";
    else
        echo "B reste plus grand";
}
```

**Déroulement :**

- $a = 5, $b = 8 → ni supérieur ni égal → on entre dans le `else`.
- $a = 8, $b = 6 après modification.
- `$a > $b` est vrai → affiche `"A devient plus grand"`.

**Réponse :**

- `$a = 8`, `$b = 6`
- Affichage : A devient plus grand

---

### Exercice 2

| Cas | `$age` | `$etudiant` | Résultat affiché |
| --- | ------ | ----------- | ---------------- |
| 1   | 10     | false       | Entrée gratuite  |
| 2   | 15     | false       | Tarif réduit     |
| 3   | 18     | true        | Tarif réduit     |
| 4   | 25     | false       | Plein tarif      |

**Commentaire :**
La condition `($age >= 12 && $age <= 17) || $etudiant` couvre à la fois les adolescents et les étudiants, quel que soit leur âge.

---

# PARTIE 3 — Code à implémenter

### Exercice 3 — division.php

```php
<?php
$rouge = "\033[31m";
$normal = "\033[0m";

echo "Entrez le premier nombre : ";
$a = (int) readline();

echo "Entrez le deuxième nombre : ";
$b = (int) readline();

if ($b != 0) {
    $resultat = $a / $b;
    echo "Résultat : " . round($resultat, 2);
} else {
    echo $rouge . "Erreur : division par zéro interdite" . $normal;
}
?>
```

**Commentaire :**
On vérifie que le diviseur n’est pas nul avant la division.
L’utilisation des séquences ANSI permet d’afficher le message d’erreur en rouge.

---

### Exercice 4 — motdepasse.php

```php
<?php
$motDePasse = "";
$tentatives = 0;

while ($motDePasse != "BTS2025") {
    $motDePasse = readline("Saisir le mot de passe : ");
    $tentatives++;
}

echo "Accès autorisé après $tentatives tentative(s)";
?>
```

**Commentaire :**
La boucle `while` se répète tant que le mot de passe est incorrect.
Le compteur `$tentatives` s’incrémente à chaque saisie.
Lorsque la condition devient fausse, le programme affiche le nombre total de tentatives effectuées.
