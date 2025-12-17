# Travaux pratiques - Fonctions en PHP

---


## 1. Conversion de température
Créez une fonction `convertirCelsiusFahrenheit` qui convertit une température de Celsius en Fahrenheit.\
La fonction a un argument (la température en Celcius) et retourne la température convertie en Fahrenheit.

## 2. Génération d'un numéro adhérent
Créez une fonction `genererNumeroAdhérent` qui génère un numéro d'adhérent dont le format est le suivant : `AD-999999`. \
Le format doit donc comporter 9 caractères.  

### Exemple :
- AD-987544
- AD-342943
- AD-000007

## 3. Génération d'un numéro de commande
Créez une fonction `genererNumeroCommande` qui génère un numéro de commande. \
Le format doit être `CMD-yyyyMMdd-XXXX` où `yyyyMMdd` est la date actuelle et `XXXX` est un nombre aléatoire à quatre chiffres.

### Exemple
   
- CMD-20241202-1234
- CMD-20241202-9876

## 4. Vérification si une adresse email appartient à un domaine donné.
Créez une fonction `verifierDomaine` permettant de vérifier si une adresse email appartient à un domaine donné. 

### Signature

La fonction doit prendre deux paramètres :
- Une chaîne de caractères email représentant l'adresse email.
- Une chaîne de caractères domaine représentant le domaine à vérifier.
- La fonction doit retourner un booléen (true si l'email appartient au domaine, sinon false).

Contraintes :

Vérifiez que l'email fourni est valide (un format incorrect doit retourner false directement).
La vérification doit être insensible à la casse (DOMAIN.COM est équivalent à domain.com).

### Exemples de résultats

- verifierDomaine("utilisateur@domain.com", "domain.com") retourne true.

- verifierDomaine("exemple@autre.com", "domain.com") retourne false.

- verifierDomaine("user@DOMAIN.COM", "domain.com") retourne true.

- verifierDomaine("email-invalide", "domain.com") retourne false.

## 5. Vérification d'une plaque d'immatriculation

Créez une fonction `verifierPlaqueImmatriculation` permettant de vérifier si une palque d'immatriculation est valide selon un format donné.

En France, les plaques d’immatriculation modernes respectent un format précis : AA-123-AA.

### Exemples de résultats

AB-123-CD	Valide   
A1-234-CB	Invalide   
123-ABC-12	Invalide   
ab-123-cd	Invalide   
ZZ-999-AA	Valide   
ZZ 999 AA	Invalide (espaces incorrects)   

## 6. Validation d'un code de couleur HEX
Créez une fonction `verifierCodeCouleurHex` permettant de vérifier si une chaîne de caractères représente un code de couleur HEX valide.

Dans le développement web, les couleurs peuvent être définies par des codes HEX (hexadécimaux). 

Ces codes suivent un format précis, composé de :

- Un symbole # au début.
- Suivi de 6 caractères représentant la composition des couleurs en base 16 (hexadécimale).

### Caractères valides
- Les chiffres de 0 à 9.
- Les lettres de A à F :
    - Majuscules : A, B, C, D, E, F.
    - Optionnellement des minuscules : a, b, c, d, e, f (dans les spécifications CSS, les lettres minuscules sont aussi valides).

### Exemples de codes HEX valides

- #FFFFFF (blanc)   
- #000000 (noir)   
- #1A2B3C (gris bleuté)   
- #ff6600 (orange, écrit en minuscules)   

### Exemples de codes HEX invalides

- #12345 (trop court, 5 caractères).   
- #1234567 (trop long, 7 caractères après le #).   
- #GHIJKL (lettres non valides, hors de A-F ou a-f).   
- 123456 (manque le # initial).   

Les codes HEX permettent de définir des couleurs en spécifiant leur composition en rouge, vert, et bleu (RGB), chaque paire de caractères représentant une intensité entre 00 et FF en base 16.

### Exemples de résultats

- verifierCodeCouleurHex("#1A2B3C") retourne true.
- verifierCodeCouleurHex("#1a2b3c") retourne true.
- verifierCodeCouleurHex("1A2B3C") retourne false (manque le #).
- verifierCodeCouleurHex("#GHIJKL") retourne false (caractères non valides).
- verifierCodeCouleurHex("#123AB") retourne false (trop court).













