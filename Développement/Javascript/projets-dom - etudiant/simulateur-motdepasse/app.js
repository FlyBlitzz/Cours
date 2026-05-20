const caracteresMinuscules = "abcdefghijklmnopqrstuvwxyz";
const caracteresMajuscules = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
const caracteresChiffres = "0123456789";
const caracteresSymboles = "!@#$%^&*()_+-=[]{};:,.<>?";

const longueurInput = document.querySelector('#longueur');
const checkboxMinuscules = document.querySelector('#optionMinuscules');
const checkboxMajuscules = document.querySelector('#optionMajuscules');
const checkboxChiffres = document.querySelector('#optionChiffres');
const checkboxSymboles = document.querySelector('#optionSymboles');
const boutonGenerer = document.querySelector('#boutonGenerer');
const motDePasse = document.querySelector('#motDePasse');
const affichageLongueur = document.querySelector('#affichageLongueur');
const messageErreur = document.querySelector('#messageErreur');

longueurInput.addEventListener('input', (event) => {
    affichageLongueur.textContent = event.target.value + " caractères";
});

boutonGenerer.addEventListener('click', (event) => {
    const longueur = parseInt(longueurInput.value);
    messageErreur.textContent = "";
    let caracteresUtilises = '';

    if (checkboxMinuscules.checked) {
        caracteresUtilises += caracteresMinuscules;
    }
    if (checkboxMajuscules.checked) {
        caracteresUtilises += caracteresMajuscules;
    }
    if (checkboxChiffres.checked) {
        caracteresUtilises += caracteresChiffres;
    }
    if (checkboxSymboles.checked) {
        caracteresUtilises += caracteresSymboles;
    }
    if (caracteresUtilises.length === 0) {
        messageErreur.textContent = "Veuillez sélectionner au moins une catégorie de caractères.";
        return;
    }

    let mdp = '';
    for (let i = 0; i < longueur; i++) {
        const index = Math.floor(Math.random() * caracteresUtilises.length);
        mdp += caracteresUtilises[index];
    }
    motDePasse.textContent = mdp;
});
