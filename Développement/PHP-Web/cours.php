<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires</title>
</head>

<body>
    <h1>Formulaires</h1>
    <form action="traitement.php" method="post">

        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom..." />
        </div>

        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe" />
        </div>

        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Votre email..." />
        </div>

        <h2>Liste déroulante</h2>
        <select name="pays" id="pays">
            <option value=''>Saisir un pays</option>
            <option value="france">France</option>
            <option value="italie">Italie</option>
            <option value="espagne">Espagne</option>
            <option value="portugal">Portugal</option>
        </select>

        <h2>Boutons radio (choix unique)</h2>
        <label>
            <input type="radio" name="civilite" value="M" checked /> Monsieur
        </label>

        <label>
            <input type="radio" name="civilite" value="Mme" /> Madame
        </label>

        <h2>Cases à cocher (choix multiple)</h2>
        <div>
            <label>
                <input type="checkbox" name="sport" value="foot" /> Football
            </label>

            <label>
                <input type="checkbox" name="musique" value="musique" /> Guitare
            </label>
        </div>

        <h2>Autres types de champs</h2>
        <textarea name="description" rows="6" placeholder="Votre description..."></textarea>
        <input type="number" name="age" min="0" max="120">
        <input type="date" name="anniversaire">

        <!-- Bouton de soumission -->
        <button type="submit">Envoyer</button>

    </form>
</body>

</html>