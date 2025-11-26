# Guide d’apprentissage – Le langage **markdown**

> _Un guide pédagogique pour les étudiants de **BTS SIO**_

---

- [Guide d’apprentissage – Le langage **markdown**](#guide-dapprentissage--le-langage-markdown)
  - [Introduction à Markdown](#introduction-à-markdown)
    - [Objectif](#objectif)
  - [Module 1 Les bases du formatage](#module-1-les-bases-du-formatage)
    - [1.1 — Titres](#11--titres)
    - [1.2 — Gras, italique et barré](#12--gras-italique-et-barré)
    - [1.3 — Paragraphes et retours à la ligne](#13--paragraphes-et-retours-à-la-ligne)
  - [Module 2 Les listes et l’organisation du contenu](#module-2-les-listes-et-lorganisation-du-contenu)
    - [2.1 — Listes à puces](#21--listes-à-puces)
    - [2.2 — Listes numérotées](#22--listes-numérotées)
    - [2.3 — Listes de tâches](#23--listes-de-tâches)
  - [Module 3 : Liens et images](#module-3--liens-et-images)
    - [3.1 — Liens](#31--liens)
    - [3.2 — Images](#32--images)
  - [Module 4 : Tableaux et code](#module-4--tableaux-et-code)
    - [4.1 — Tableaux Markdown (version enrichie)](#41--tableaux-markdown-version-enrichie)
      - [Structure de base](#structure-de-base)
      - [Exemple concret](#exemple-concret)
      - [Cas pratiques BTS SIO](#cas-pratiques-bts-sio)
      - [Combiner formatage et tableaux](#combiner-formatage-et-tableaux)
      - [Tableaux avancés](#tableaux-avancés)
    - [4.2 — Blocs de code](#42--blocs-de-code)
  - [Module 5 : Citations, séparateurs et autres éléments](#module-5--citations-séparateurs-et-autres-éléments)
    - [Citations](#citations)
    - [Séparateur horizontal](#séparateur-horizontal)
  - [Module 6 : Bonnes pratiques](#module-6--bonnes-pratiques)
  - [Conclusion](#conclusion)

---

## Introduction à Markdown

Markdown est un **langage de balisage léger**, créé par _John Gruber_ en 2004, pour écrire du texte **lisible à la fois par les humains et les machines**.

### Objectif

Créer des documents structurés sans avoir recours à des balises HTML complexes.

**Pourquoi l’utiliser ?**

- Simple et rapide à apprendre
- Idéal pour la documentation technique, rapports, README GitHub
- Compatible avec VS Code, GitHub, Notion, Obsidian
- Convertissable en HTML, PDF, Word

---

## Module 1 Les bases du formatage

### 1.1 — Titres

```markdown
# Titre 1

## Titre 2

### Titre 3
```

| Niveau | Syntaxe       | Rendu             |
| :----- | :------------ | :---------------- |
| 1      | `# Titre 1`   | <h1> Titre 1</h1> |
| 2      | `## Titre 2`  | <h2> Titre 2</h2> |
| 3      | `### Titre 3` | <h3> Titre 3</h3> |

---

### 1.2 — Gras, italique et barré

| Effet      | Syntaxe                    | Rendu      |
| :--------- | :------------------------- | :--------- |
| _Italique_ | `*texte*` ou `_texte_`     | _Italique_ |
| **Gras**   | `**texte**` ou `__texte__` | **Gras**   |
| ~~Barré~~  | `~~texte~~`                | ~~Barré~~  |

Combiner gras et italique : `***texte important***` → **_texte important_**

---

### 1.3 — Paragraphes et retours à la ligne

- Deux espaces en fin de ligne = saut de ligne
- Ligne vide = nouveau paragraphe

---

## Module 2 Les listes et l’organisation du contenu

### 2.1 — Listes à puces

```markdown
- Elément 1
- Elément 2
  - Sous-élément
```

- Elément 1
- Elément 2
  - Sous-élément

---

### 2.2 — Listes numérotées

```markdown
1. Étape 1
2. Étape 2
3. Étape 3
```

1. Étape 1
2. Étape 2
3. Étape 3

---

### 2.3 — Listes de tâches

```markdown
- [x] Installer Git
- [ ] Créer un dépôt
- [ ] Rédiger le README
```

- [x] Installer Git
- [x] Créer un dépôt
- [ ] Rédiger le README

---

## Module 3 : Liens et images

### 3.1 — Liens

```markdown
[Visiter GitHub](https://github.com)
```

➡️ [Visiter GitHub](https://github.com)

### 3.2 — Images

```markdown
![Texte alternatif](https://example.com/image.png)
```

Le texte alternatif s’affiche si l’image ne charge pas.

---

## Module 4 : Tableaux et code

### 4.1 — Tableaux Markdown (version enrichie)

Les tableaux organisent les données sous forme de colonnes et de lignes.

#### Structure de base

```markdown
| Colonne 1        | Colonne 2 |        Colonne 3 |
| :--------------- | :-------: | ---------------: |
| Alignée à gauche |  Centrée  | Alignée à droite |
| Exemple A        | Exemple B |        Exemple C |
```

| Colonne 1        | Colonne 2 |        Colonne 3 |
| :--------------- | :-------: | ---------------: |
| Alignée à gauche |  Centrée  | Alignée à droite |
| Exemple A        | Exemple B |        Exemple C |

💡 `:---` = gauche · `:---:` = centre · `---:` = droite

---

#### Exemple concret

```markdown
| Prénom | Age | Option BTS SIO |  Ville |
| :----- | :-: | -------------: | -----: |
| Alice  | 20  |           SLAM |   Lyon |
| Bob    | 21  |           SISR | Nantes |
| Clara  | 19  |           SLAM |  Lille |
```

| Prénom | Age | Option BTS SIO |  Ville |
| :----- | :-: | -------------: | -----: |
| Alice  | 20  |           SLAM |   Lyon |
| Bob    | 21  |           SISR | Nantes |
| Clara  | 19  |           SLAM |  Lille |

---

#### Cas pratiques BTS SIO

| Cas d’usage                | Exemple                          |
| :------------------------- | :------------------------------- |
| Comparatif de technologies | “Langage / Avantages / Limites”  |
| Planning de projet         | “Tâche / Responsable / Échéance” |
| Liste d’incidents          | “Date / Niveau / Description”    |

```markdown
| Tâche              | Responsable | Échéance |      Statut |
| :----------------- | :---------- | :------: | ----------: |
| Cahier des charges | Clara       |  12/11   |  ✅ Terminé |
| Base de données    | Bob         |  15/11   | 🔄 En cours |
| Tests API          | Alice       |  20/11   |  ⏳ À faire |
```

| Tâche              | Responsable | Échéance |      Statut |
| :----------------- | :---------- | :------: | ----------: |
| Cahier des charges | Clara       |  12/11   |  ✅ Terminé |
| Base de données    | Bob         |  15/11   | 🔄 En cours |
| Tests API          | Alice       |  20/11   |  ⏳ À faire |

---

#### Combiner formatage et tableaux

```markdown
| Fonction    | Description         |
| :---------- | :------------------ |
| **print()** | Affiche du texte    |
| _input()_   | Demande une saisie  |
| `len()`     | Calcule la longueur |
```

| Fonction    | Description         |
| :---------- | :------------------ |
| **print()** | Affiche du texte    |
| _input()_   | Demande une saisie  |
| `len()`     | Calcule la longueur |

---

#### Tableaux avancés

| Projet           | Description         | Lien                                    |
| :--------------- | :------------------ | :-------------------------------------- |
| **Appli Python** | Gestion de stocks   | [🔗 Voir](https://github.com/tonrepo)   |
| **Site Web**     | Portfolio personnel | [🌐 En ligne](https://monportfolio.com) |

---

### 4.2 — Blocs de code

Code en ligne :

```markdown
`php test.php`
```

`php test.php`

Bloc de code :

````markdown
```php
echo "Bonjour BTS SIO !";
```
````

```php
echo "Bonjour BTS SIO !";
```

---

## Module 5 : Citations, séparateurs et autres éléments

### Citations

```markdown
> Ceci est une citation.
```

> Ceci est une citation.

---

### Séparateur horizontal

```markdown
---
```

---

## Module 6 : Bonnes pratiques

✅ Hiérarchise tes titres  
✅ Préfère la simplicité  
✅ Vérifie ton rendu  
✅ Sauvegarde en `.md`  
✅ Reste cohérent dans le style

---

## Conclusion

Tu maîtrises désormais **Markdown**, un langage simple, efficace et essentiel en BTS SIO.  
Utilise-le pour rédiger tes rapports, documentations et projets GitHub.

> 💡 **Astuce finale :** Rédige tous tes journaux de projet et TPs directement en Markdown — c’est propre, lisible et professionnel !

---

**Auteur :** Franck LAMY — Enseignant en BTS SIO
🗓 _Dernière mise à jour : novembre 2025_
