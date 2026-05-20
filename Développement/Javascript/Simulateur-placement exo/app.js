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

function mettreAJourApplication() {
    const capital = Number(curseurCapital.value);
    const tauxPourcentage = Number(curseurTaux.value);
    const tauxDecimal = tauxPourcentage / 100;
    const duree = Number(curseurDuree.value);

    const capitalFinal = calculerCapitalFinal(
        capital,
        tauxDecimal,
        duree
    );

    const interetsGeneres = capitalFinal - capital;

    affichageCapital.textContent = formaterEnEuros(capital);
    affichageTaux.textContent = `${formaterNombre(tauxPourcentage)} %`;
    affichageDuree.textContent = `${duree} an${duree > 1 ? "s" : ""}`;

    affichageCapitalFinal.textContent = formaterEnEuros(capitalFinal);
    affichageInterets.textContent = formaterEnEuros(interetsGeneres);

    affichagePhraseSynthese.innerHTML =
        `Vous placez ${formaterEnEuros(capital)} pendant ${duree} an${duree > 1 ? "s" : ""}.<br>` +
        `Le taux annuel du placement est de ${formaterNombre(tauxPourcentage)} %.<br>` +
        `Le capital final obtenu sera de ${formaterEnEuros(capitalFinal)}.<br>` +
        `Les intérêts générés seront de ${formaterEnEuros(interetsGeneres)}.`;
}

curseurCapital.addEventListener("input", mettreAJourApplication);
curseurTaux.addEventListener("input", mettreAJourApplication);
curseurDuree.addEventListener("input", mettreAJourApplication);

mettreAJourApplication();