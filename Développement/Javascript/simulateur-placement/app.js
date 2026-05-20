const curseurCapital = document.querySelector("#capital");
const curseurTaux = document.querySelector("#taux");
const curseurDuree = document.querySelector("#duree");

const affichageCapital = document.querySelector("#affichageCapital");
const affichageTaux = document.querySelector("#affichageTaux");
const affichageDuree = document.querySelector("#affichageDuree");

const affichageCapitalFinal = document.querySelector("#affichageCapitalFinal");
const affichageInterets = document.querySelector("#affichageInterets");
const affichagePhraseSynthese = document.querySelector("#phraseSynthese");

function formaterEnEuros(valeur) {
    return valeur.toLocaleString("fr-FR", {
        style: "currency",
        currency: "EUR"
    });
}

function formaterNombre(valeur) {
    return valeur.toLocaleString("fr-FR");
}

function calculerCapitalFinal(capital, tauxDecimal, duree) {
    return capital * Math.pow(1 + tauxDecimal, duree);
}

function recupererValeurs() {
    const capital = Number(curseurCapital.value);
    const tauxPourcentage = Number(curseurTaux.value);
    const tauxDecimal = tauxPourcentage / 100;
    const duree = Number(curseurDuree.value);
}

function calculerResultats() {
    const capitalFinal = calculerCapitalFinal(
        capital,
        tauxDecimal,
        duree
    );

    const interetsGeneres = capitalFinal - capital;
}

function afficherDonneesSaisies() {
    affichageCapital.textContent = formaterEnEuros(capital);
    affichageTaux.textContent = `${formaterNombre(tauxPourcentage)} %`;
    affichageDuree.textContent = `${duree} an${duree > 1 ? "s" : ""}`;
}

function afficherDonneesCalculees() {
    affichageCapitalFinal.textContent = formaterEnEuros(capitalFinal);
    affichageInterets.textContent = formaterEnEuros(interetsGeneres);
}

function afficherPhraseSynthese() {
    affichagePhraseSynthese.innerHTML =
        `Vous placez ${formaterEnEuros(capital)} pendant ${duree} an${duree > 1 ? "s" : ""}.<br>` +
        `Le taux annuel du placement est de ${formaterNombre(tauxPourcentage)} %.<br>` +
        `Le capital final obtenu sera de ${formaterEnEuros(capitalFinal)}.<br>` +
        `Les intérêts générés seront de ${formaterEnEuros(interetsGeneres)}.`;
}

function mettreAJourApplication() {
    // Récupérer les valeurs des 3 curseurs (sliders)
    const valeurs = recupererValeurs();
    // Lancer les calculs
    const resultats = calculerResultats(valeurs);
    // Afficher les données (saisies et calculées)
    afficherDonneesSaisies(valeurs);
    afficherDonneesCalculees(resultats);
    afficherPhraseSynthese(valeurs, resultats);
}

// Déclaration des listeners (écouteurs)
curseurCapital.addEventListener("input", mettreAJourApplication);
curseurTaux.addEventListener("input", mettreAJourApplication);
curseurDuree.addEventListener("input", mettreAJourApplication);


// Au démarrage de l'application
mettreAJourApplication();