<?php

/**
 * Retourne la liste des catégories avec uniquement l'id et le nom.
 *
 * @param array $categories Tableau complet des catégories (provenant de bd-data.php)
 *
 * @return array Liste des catégories au format :
 *               [
 *                 ['id' => 1, 'nom' => 'Action'],
 *                 ['id' => 2, 'nom' => 'Comédie'],
 *                 ...
 *               ]
 * Exemple de requête SQL équivalente si les données étaient dans une vraie base.
 *
 * SQL :
 *   SELECT id, nom
 *   FROM categories;
 */
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

/**
 * Recherche une catégorie par son ID.
 *
 * @param array $categories Tableau complet des catégories (provenant de bd-data.php)
 * @param int $id L'identifiant de la catégorie à rechercher
 *
 * @return array La catégorie trouvée au format ['id' => X, 'nom' => 'Nom'] 
 *              ou un tableau vide [] si aucune catégorie n'est trouvée avec cet ID
 *
 * Exemple de requête SQL équivalente si les données étaient dans une vraie base :
 *   SELECT id, nom
 *   FROM categories
 *   WHERE id = :id;
 */
function getCategoryById(array $categories, int $id): array
{
    // TODO : Implémentation à faire par les étudiants
}

/**
 * Recherche une catégorie par son nom (recherche insensible à la casse).
 *
 * @param array $categories Tableau complet des catégories (provenant de bd-data.php)
 * @param string $nom Le nom de la catégorie à rechercher (insensible à la casse)
 *
 * @return array La catégorie trouvée au format ['id' => X, 'nom' => 'Nom'] 
 *              ou un tableau vide [] si aucune catégorie n'est trouvée avec ce nom
 *
 * Exemple de requête SQL équivalente si les données étaient dans une vraie base :
 *   SELECT id, nom
 *   FROM categories
 *   WHERE LOWER(nom) = LOWER(:nom);
 */
function getCategoryByName(array $categories, string $nom): array
{
    // TODO : Implémentation à faire par les étudiants
}
