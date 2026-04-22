# TP : Manipulation de tableaux 2D en PHP

## Objectif

Ce TP a pour objectif de vous familiariser avec la manipulation de tableaux multidimensionnels en PHP. Vous allez implémenter des fonctions qui simulent des requêtes SQL sur des données stockées dans des tableaux PHP.

## Structure du projet

```
SIO1-TP-Tableaux-2D/
├── src/
│   ├── bd_data.php              # Fichier contenant les données (catégories et films)
│   └── requetes/
│       ├── categories.php       # Fonctions de manipulation des catégories
│       └── films.php            # Fonctions de manipulation des films
└── tests/
    ├── test_getCategories.php
    ├── test_getCategoryById.php
    ├── test_getCategoryByName.php
    ├── test_getFilms.php
    ├── test_getFilmById.php
    └── test_getFilmsByCategory.php
```

## Données disponibles

Le fichier `src/bd_data.php` contient deux tableaux :

- **`$categories`** : Liste des catégories de films avec les champs suivants :
  - `id` : Identifiant unique
  - `nom` : Nom de la catégorie
  - `description` : Description de la catégorie
  - `created_at` : Date de création
  - `updated_at` : Date de mise à jour

- **`$films`** : Liste des films avec les champs suivants :
  - `id` : Identifiant unique
  - `titre` : Titre du film
  - `realisateur` : Nom du réalisateur
  - `annee` : Année de sortie
  - `duree` : Durée en minutes
  - `description` : Description du film
  - `category_id` : Identifiant de la catégorie (référence vers `$categories`)
  - `created_at` : Date de création
  - `updated_at` : Date de mise à jour

## Travail à réaliser

### Partie 1 : Fonctions sur les catégories

Dans le fichier `src/requetes/categories.php`, vous devez implémenter les fonctions suivantes :

#### 1. `getCategoryById(array $categories, int $id): array`

**Description** : Recherche une catégorie par son ID.

**Paramètres** :
- `$categories` : Tableau complet des catégories
- `$id` : L'identifiant de la catégorie à rechercher

**Retour** : 
- La catégorie trouvée au format `['id' => X, 'nom' => 'Nom']`
- Un tableau vide `[]` si aucune catégorie n'est trouvée avec cet ID

**Exemple SQL équivalent** :
```sql
SELECT id, nom
FROM categories
WHERE id = :id;
```

#### 2. `getCategoryByName(array $categories, string $nom): array`

**Description** : Recherche une catégorie par son nom (recherche insensible à la casse).

**Paramètres** :
- `$categories` : Tableau complet des catégories
- `$nom` : Le nom de la catégorie à rechercher (insensible à la casse)

**Retour** :
- La catégorie trouvée au format `['id' => X, 'nom' => 'Nom']`
- Un tableau vide `[]` si aucune catégorie n'est trouvée avec ce nom

**Important** : La recherche doit être insensible à la casse. Par exemple, "action", "Action" et "ACTION" doivent tous retourner le même résultat.

**Exemple SQL équivalent** :
```sql
SELECT id, nom
FROM categories
WHERE LOWER(nom) = LOWER(:nom);
```

### Partie 2 : Fonctions sur les films

Dans le fichier `src/requetes/films.php`, vous devez implémenter les fonctions suivantes :

#### 1. `getFilms(array $films): array`

**Description** : Retourne la liste de tous les films avec uniquement certains champs.

**Paramètres** :
- `$films` : Tableau complet des films

**Retour** : Liste des films au format :
```php
[
    ['id' => 1, 'titre' => 'Inception', 'realisateur' => 'Christopher Nolan', 'annee' => 2010, 'duree' => 148],
    ['id' => 2, 'titre' => 'The Dark Knight', 'realisateur' => 'Christopher Nolan', 'annee' => 2008, 'duree' => 152],
    ...
]
```

**Champs à retourner** : `id`, `titre`, `realisateur`, `annee`, `duree`

**Exemple SQL équivalent** :
```sql
SELECT id, titre, realisateur, annee, duree
FROM films;
```

#### 2. `getFilmById(array $films, int $id): array`

**Description** : Recherche un film par son ID.

**Paramètres** :
- `$films` : Tableau complet des films
- `$id` : L'identifiant du film à rechercher

**Retour** :
- Le film trouvé au format `['id' => X, 'titre' => 'Titre', 'realisateur' => 'Réalisateur', 'annee' => Y, 'duree' => Z, 'description' => 'Description']`
- Un tableau vide `[]` si aucun film n'est trouvé avec cet ID

**Champs à retourner** : `id`, `titre`, `realisateur`, `annee`, `duree`, `description`

**Exemple SQL équivalent** :
```sql
SELECT id, titre, realisateur, annee, duree, description
FROM films
WHERE id = :id;
```

#### 3. `getFilmsByCategory(array $films, int $categoryId): array`

**Description** : Recherche les films d'une catégorie donnée (par son ID).

**Paramètres** :
- `$films` : Tableau complet des films
- `$categoryId` : L'identifiant de la catégorie

**Retour** : Liste des films de la catégorie au format :
```php
[
    ['id' => X, 'titre' => 'Titre', 'annee' => Y, 'duree' => Z],
    ...
]
```
Tableau vide si aucun film n'est trouvé pour cette catégorie.

**Champs à retourner** : `id`, `titre`, `annee`, `duree`

**Exemple SQL équivalent** :
```sql
SELECT id, titre, annee, duree
FROM films
WHERE category_id = :category_id;
```

## Consignes importantes

1. **Ne pas utiliser de variables globales** : Toutes les données doivent être passées en paramètres aux fonctions.

2. **Respecter les signatures** : Ne modifiez pas les signatures des fonctions (nom, paramètres, type de retour).

3. **Respecter le format de retour** : Assurez-vous que les tableaux retournés contiennent exactement les champs demandés, dans l'ordre spécifié.

4. **Gestion des cas limites** :
   - Si aucun résultat n'est trouvé, retournez toujours un tableau vide `[]`
   - Pour toutes les fonctions de recherche (`getCategoryById`, `getCategoryByName`, `getFilmById`), retournez un tableau vide si aucun résultat n'est trouvé

5. **Recherche insensible à la casse** : Pour `getCategoryByName`, utilisez `strtolower()` ou `mb_strtolower()` pour comparer les noms.

## Tests

Des fichiers de test sont fournis dans le dossier `tests/`. Pour tester vos fonctions, exécutez les fichiers de test correspondants :

```bash
php tests/test_getCategoryById.php
php tests/test_getCategoryByName.php
php tests/test_getFilms.php
php tests/test_getFilmById.php
php tests/test_getFilmsByCategory.php
```

Chaque fichier de test :
1. Charge les données depuis `bd_data.php`
2. Charge la fonction correspondante
3. Appelle la fonction avec des paramètres d'exemple
4. Affiche le résultat avec `print_r()`

**Note** : La fonction `getCategories` est déjà implémentée et peut servir d'exemple pour comprendre la structure attendue.

## Exemple de code

Voici un exemple de la fonction `getCategories` déjà implémentée pour vous guider :

```php
function getCategories(array $categories): array
{
    $resultat = [];

    foreach ($categories as $categorie) {
        $resultat[] = [
            'id'  => $categorie['id'],
            'nom' => $categorie['nom'],
        ];
    }

    return $resultat;
}
```

## Critères d'évaluation

- ✅ Correctitude : Les fonctions retournent les bons résultats
- ✅ Format de retour : Les tableaux contiennent exactement les champs demandés
- ✅ Gestion des cas limites : Gestion correcte des cas où aucun résultat n'est trouvé
- ✅ Code propre : Code lisible et bien structuré
- ✅ Respect des consignes : Pas d'utilisation de variables globales, respect des signatures

## Aide

Si vous rencontrez des difficultés :

1. **Pour parcourir un tableau** : Utilisez `foreach`
2. **Pour comparer des chaînes insensiblement à la casse** : Utilisez `strtolower()` ou `mb_strtolower()`
3. **Pour vérifier si une clé existe** : Utilisez `isset()` ou `array_key_exists()`
4. **Pour filtrer un tableau** : Parcourez le tableau et ajoutez les éléments correspondants à un nouveau tableau

Bon courage !
