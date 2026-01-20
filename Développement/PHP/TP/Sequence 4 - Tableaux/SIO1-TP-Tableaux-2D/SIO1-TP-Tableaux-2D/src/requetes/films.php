<?php

/**
 * Retourne la liste des films avec id, titre, realisateur, annee et duree.
 *
 * @param array $films Tableau complet des films (provenant de bd-data.php)
 *
 * @return array Liste des films au format :
 *               [
 *                 ['id' => 1, 'titre' => 'Inception', 'realisateur' => 'Christopher Nolan', 'annee' => 2010, 'duree' => 148],
 *                 ['id' => 2, 'titre' => 'The Dark Knight', 'realisateur' => 'Christopher Nolan', 'annee' => 2008, 'duree' => 152],
 *                 ...
 *               ]
 *
 * Exemple de requête SQL équivalente si les données étaient dans une vraie base :
 *   SELECT id, titre, realisateur, annee, duree
 *   FROM films;
 */
function getFilms(array $films): array
{
    // TODO : Implémentation à faire par les étudiants
}

/**
 * Recherche un film par son ID.
 *
 * @param array $films Tableau complet des films (provenant de bd-data.php)
 * @param int $id L'identifiant du film à rechercher
 *
 * @return array Le film trouvé au format ['id' => X, 'titre' => 'Titre', 'realisateur' => 'Réalisateur', 'annee' => Y, 'duree' => Z, 'description' => 'Description']
 *              ou un tableau vide [] si aucun film n'est trouvé avec cet ID
 *
 * Exemple de requête SQL équivalente si les données étaient dans une vraie base :
 *   SELECT id, titre, realisateur, annee, duree, description
 *   FROM films
 *   WHERE id = :id;
 */
function getFilmById(array $films, int $id): array
{
    // TODO : Implémentation à faire par les étudiants
}

/**
 * Recherche les films d'une catégorie donnée (par son ID).
 *
 * @param array $films Tableau complet des films (provenant de bd-data.php)
 * @param int $categoryId L'identifiant de la catégorie
 *
 * @return array Liste des films de la catégorie au format :
 *               [
 *                 ['id' => X, 'titre' => 'Titre', 'annee' => Y, 'duree' => Z],
 *                 ...
 *               ]
 *               Tableau vide si aucun film n'est trouvé pour cette catégorie
 *
 * Exemple de requête SQL équivalente si les données étaient dans une vraie base :
 *   SELECT id, titre, annee, duree
 *   FROM films
 *   WHERE category_id = :category_id;
 */
function getFilmsByCategory(array $films, int $categoryId): array
{
    // TODO : Implémentation à faire par les étudiants
}
