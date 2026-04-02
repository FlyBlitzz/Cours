<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un profil</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div class="card">

        <header class="card-header">
            <h1>Créer un profil</h1>
            <hr>
        </header>

        <form action="form-profil.php" method="POST" autocomplete="off">

            <!-- PSEUDO -->
            <div class="form-group">
                <label for="pseudo">Pseudo <span class="required">*</span> :</label>
                <input type="text"
                    id="pseudo"
                    name="pseudo"
                    placeholder="Ex: FL39"
                    required
                    minlength="3">
                <div class="hint">3 caractères minimum</div>
            </div>

            <!-- EMAIL -->
            <div class="form-group">
                <label for="email">Email <span class="required">*</span> :</label>
                <input type="email"
                    id="email"
                    name="email"
                    placeholder="votre@email.fr"
                    required>
            </div>

            <!-- STATUT -->
            <div class="form-group">
                <label for="statut">Statut <span class="required">*</span> :</label>
                <select id="statut" name="statut" required>
                    <!-- remplissage dynamique des options -->
                </select>
            </div>

            <p class="legend">Le caractère <span class="required">*</span> indique un champ obligatoire.</p>

            <button type="submit" class="btn-submit">
                Créer profil
            </button>

        </form>

    </div>

</body>

</html>