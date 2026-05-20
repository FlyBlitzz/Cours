const salles = [
    {
        id: "petite",
        nom: "Petite salle",
        prixHoraire: 30,
        capaciteMax: 10
    },
    {
        id: "reunion",
        nom: "Salle de réunion",
        prixHoraire: 50,
        capaciteMax: 20
    },
    {
        id: "conference",
        nom: "Salle de conférence",
        prixHoraire: 90,
        capaciteMax: 80
    },
    {
        id: "informatique",
        nom: "Salle informatique",
        prixHoraire: 120,
        capaciteMax: 25
    }
];

const typesReservation = [
    {
        id: "standard",
        nom: "Standard",
        coefficient: 0
    },
    {
        id: "soir",
        nom: "Soirée",
        coefficient: 0.20
    },
    {
        id: "weekend",
        nom: "Week-end",
        coefficient: 0.30
    }
];

const optionsReservation = [
    {
        id: "videoprojecteur",
        nom: "Vidéoprojecteur",
        prix: 15,
        prixParPersonne: false
    },
    {
        id: "cafe",
        nom: "Café d’accueil",
        prix: 3,
        prixParPersonne: true
    },
    {
        id: "tableau",
        nom: "Tableau blanc",
        prix: 10,
        prixParPersonne: false
    },
    {
        id: "assistance",
        nom: "Assistance technique",
        prix: 25,
        prixParPersonne: false
    }
];

const formulaireReservation = document.querySelector("#formulaireReservation");
const typeSalle = document.querySelector("#typeSalle");
const nombrePersonnes = document.querySelector("#nombrePersonnes");
const duree = document.querySelector("#duree");
const zoneTypesReservation = document.querySelector("#zoneTypesReservation");
const zoneOptions = document.querySelector("#zoneOptions");
const boutonSubmit = document.querySelector("#boutonSubmit");
const boutonReinitialiser = document.querySelector("#boutonReinitialiser");
const prixTotalSpan = document.querySelector("#prixTotal");
const messageCapacite = document.querySelector("#messageCapacite");

typeSalle.textContent = "";
salles.forEach(salle => {
    const option = document.createElement("option");
    option.value = salle.id;
    option.textContent = `${salle.nom} - ${salle.prixHoraire.toFixed(2)} € / h - max ${salle.capaciteMax} personnes`;
    typeSalle.appendChild(option);
});

typesReservation.textContent = "";
typesReservation.forEach(type => {
    let message = ""
    const radio = document.createElement("input");
    radio.name = "typeReservation";
    radio.type = "radio";
    radio.value = type.id;
    const label = document.createElement("label");
    if (type.coefficient > 0) {
        message = ` +${(type.coefficient * 100).toFixed(0)} %`;
    } else {
        message = " - aucun supplément";
    }

    label.textContent = `${type.nom} ${message}`;
    zoneTypesReservation.appendChild(radio);
    zoneTypesReservation.appendChild(label);
});

optionsReservation.textContent = "";
optionsReservation.forEach(option => {
    let message = "";
    const checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    checkbox.value = option.id;
    const label = document.createElement("label");
    if (option.prixParPersonne) {
        message = ` +${option.prix.toFixed(2)} € / personne`;
    } else {
        message = ` +${option.prix.toFixed(2)} €`;
    }
    label.textContent = `${option.nom} ${message}`;
    zoneOptions.appendChild(checkbox);
    zoneOptions.appendChild(label);
});