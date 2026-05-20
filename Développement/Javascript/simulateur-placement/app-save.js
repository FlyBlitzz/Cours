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

function calculerInterets(capitalFinal, capitalInitial) {
    return capitalFinal - capitalInitial
}

function recupererValeurs() {
    const capital = Number(curseurCapital.value);
    const tauxPourcentage = Number(curseurTaux.value);
    const duree = Number(curseurDuree.value);
    // Retourner un objet contenant les valeurs
    return {
        capital: capital,
        taux: tauxPourcentage,
        duree: duree,
        tauxDecimal: tauxPourcentage / 100
    };
}

function calculerResultats(valeurs) {
    // Calcul du capital final
    const capitalFinal = calculerCapitalFinal(valeurs.capital, valeurs.tauxDecimal, valeurs.duree);
    // Calcul des intérêts
    const interets = calculerInterets(capitalFinal, valeurs.capital)
    return {
        capitalFinal: capitalFinal,
        interets: interets
    }
}

function afficherDonneesSaisies(valeurs) {
    affichageCapital.textContent = formaterEnEuros(valeurs.capital);
    affichageTaux.textContent = `${formaterNombre(valeurs.taux)} %`;
    affichageDuree.textContent = `${valeur.duree} an${valeur.duree > 1 ? "s" : ""}`;
}

function afficherDonneesCalculees(resultats) {
    affichageCapitalFinal.textContent = formaterEnEuros(resultats.capitalFinal);
    affichageInterets.textContent = formaterEnEuros(resultats.interets);
}

function afficherPhraseSynthese(valeurs, resultats) {
    affichagePhraseSynthese.innerHTML =
        `Vous placez ${formaterEnEuros(valeurs.capital)} pendant ${valeur.duree} an${valeur.duree > 1 ? "s" : ""}.<br>` +
        `Le taux annuel du placement est de ${formaterNombre(valeurs.taux)} %.<br>` +
        `Le capital final obtenu sera de ${formaterEnEuros(resultats.capitalFinal)}.<br>` +
        `Les intérêts générés seront de ${formaterEnEuros(resultats.interets)}.`;
}

function mettreAJourApplication() {
    // Récupérer les valeurs des 3 curseurs (sliders)
    const valeurs = recupererValeurs()
    // Lancer les calculs
    const resultats = calculerResultats(valeurs)

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