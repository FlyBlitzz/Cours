<?php

namespace App;

/**
 * Classe gérant une banque d'énigmes.
 * Permet de stocker un grand nombre d'énigmes et de sélectionner aléatoirement
 * un certain nombre d'énigmes différentes.
 */
class BanqueEnigmes {
    /** @var Enigme[] */
    private array $enigmes = [];

    /**
     * Initialise la banque avec 50 énigmes.
     */
    public function __construct() {
        $this->initialiserEnigmes();
    }

    /**
     * Initialise le tableau avec 50 énigmes variées.
     */
    private function initialiserEnigmes(): void {
        $this->enigmes = [
            new Enigme("Quel est le résultat de : 3 + 5 ?", "8", "Pense à l'addition basique !"),
            new Enigme("Je commence la nuit et finis le matin. Je suis indispensable mais invisible. Qui suis-je ?", "le sommeil", "C'est une activité humaine naturelle…"),
            new Enigme("Mot caché : Il contient les lettres P, H, P, et c'est ton langage préféré 😉", "php", "Langage web très connu !"),
            new Enigme("Je suis un nombre pair entre 10 et 20. La somme de mes chiffres fait 3. Qui suis-je ?", "12", "Pense aux nombres pairs…"),
            new Enigme("Quelle est la capitale de la France ?", "paris", "C'est la ville de la Tour Eiffel !"),
            new Enigme("Je suis le contraire de 'jour'. Qui suis-je ?", "nuit", "C'est l'opposé du jour…"),
            new Enigme("Combien de jours y a-t-il dans une semaine ?", "7", "Lundi, mardi, mercredi…"),
            new Enigme("Quel animal dit 'miaou' ?", "chat", "C'est un félin domestique !"),
            new Enigme("Je suis le premier mois de l'année. Qui suis-je ?", "janvier", "C'est après décembre !"),
            new Enigme("Quelle est la couleur du ciel par temps clair ?", "bleu", "C'est une couleur primaire !"),
            new Enigme("Je suis un fruit jaune et courbé. Qui suis-je ?", "banane", "Les singes en raffolent !"),
            new Enigme("Combien font 2 × 4 ?", "8", "C'est une multiplication simple !"),
            new Enigme("Quel est le plus grand océan du monde ?", "pacifique", "Il borde l'Asie et l'Amérique !"),
            new Enigme("Je suis un instrument de musique à cordes. Qui suis-je ?", "guitare", "On en joue avec les doigts ou un médiator !"),
            new Enigme("Quelle est la planète la plus proche du Soleil ?", "mercure", "C'est la première planète du système solaire !"),
            new Enigme("Je suis rouge et rond, on me met dans les salades. Qui suis-je ?", "tomate", "C'est un fruit qu'on utilise comme légume !"),
            new Enigme("Combien de continents y a-t-il sur Terre ?", "7", "Europe, Asie, Afrique, Amérique du Nord, Amérique du Sud, Océanie, Antarctique !"),
            new Enigme("Quel est le résultat de : 10 - 3 ?", "7", "C'est une soustraction simple !"),
            new Enigme("Je suis un moyen de transport sur deux roues. Qui suis-je ?", "vélo", "On pédale pour avancer !"),
            new Enigme("Quelle est la couleur du feu ?", "rouge", "Ou orange, ou jaune… mais surtout rouge !"),
            new Enigme("Je suis un nombre premier inférieur à 10. Qui suis-je ?", "7", "Ou 2, 3, 5… mais 7 est le plus grand !"),
            new Enigme("Quel est l'animal le plus rapide sur terre ?", "guépard", "Il peut atteindre 110 km/h !"),
            new Enigme("Combien de lettres y a-t-il dans l'alphabet français ?", "26", "De A à Z !"),
            new Enigme("Je suis un légume vert, long et mince. Qui suis-je ?", "haricot", "Ou courgette, ou concombre… mais haricot est le plus classique !"),
            new Enigme("Quelle est la plus haute montagne du monde ?", "everest", "Elle se trouve dans l'Himalaya !"),
            new Enigme("Je suis un sport où on frappe dans un ballon avec les pieds. Qui suis-je ?", "football", "Le sport le plus populaire au monde !"),
            new Enigme("Combien font 5 + 5 ?", "10", "C'est une addition simple !"),
            new Enigme("Quel est le plus grand mammifère marin ?", "baleine", "C'est un animal impressionnant !"),
            new Enigme("Je suis une saison. Il fait chaud et on va à la plage. Qui suis-je ?", "été", "C'est la saison la plus chaude !"),
            new Enigme("Quelle est la couleur de l'herbe ?", "vert", "C'est la couleur de la nature !"),
            new Enigme("Je suis un nombre pair entre 20 et 30. Qui suis-je ?", "24", "Ou 22, 26, 28… mais 24 est un bon choix !"),
            new Enigme("Quel est le plus petit pays du monde ?", "vatican", "C'est un État dans Rome !"),
            new Enigme("Combien de doigts a une main ?", "5", "Le pouce, l'index, le majeur, l'annulaire et l'auriculaire !"),
            new Enigme("Je suis un fruit rouge avec des graines à l'extérieur. Qui suis-je ?", "fraise", "C'est délicieux en été !"),
            new Enigme("Quelle est la capitale de l'Italie ?", "rome", "C'est la ville éternelle !"),
            new Enigme("Je suis un moyen de transport volant. Qui suis-je ?", "avion", "On peut voyager très loin avec !"),
            new Enigme("Combien font 6 × 2 ?", "12", "C'est une multiplication simple !"),
            new Enigme("Quel est l'animal qui dit 'coin coin' ?", "canard", "C'est un oiseau aquatique !"),
            new Enigme("Je suis un métal précieux jaune. Qui suis-je ?", "or", "On en fait des bijoux !"),
            new Enigme("Quelle est la couleur du soleil ?", "jaune", "Ou orange, mais surtout jaune !"),
            new Enigme("Combien de minutes y a-t-il dans une heure ?", "60", "C'est une unité de temps !"),
            new Enigme("Je suis un légume orange, long et pointu. Qui suis-je ?", "carotte", "Les lapins en raffolent !"),
            new Enigme("Quel est le plus grand désert du monde ?", "sahara", "Il se trouve en Afrique !"),
            new Enigme("Je suis un nombre impair entre 1 et 10. Qui suis-je ?", "9", "Ou 1, 3, 5, 7… mais 9 est le plus grand !"),
            new Enigme("Quelle est la couleur de la neige ?", "blanc", "C'est la couleur pure !"),
            new Enigme("Combien font 4 + 4 ?", "8", "C'est une addition simple !"),
            new Enigme("Je suis un fruit orange et rond. Qui suis-je ?", "orange", "C'est aussi une couleur !"),
            new Enigme("Quel est le plus grand continent du monde ?", "asie", "Il contient la Chine, l'Inde, le Japon…"),
            new Enigme("Je suis un instrument de musique à vent. Qui suis-je ?", "flûte", "On souffle dedans pour jouer !"),
            new Enigme("Combien de côtés a un triangle ?", "3", "C'est une figure géométrique à trois côtés !"),
            new Enigme("Quelle est la couleur du sang ?", "rouge", "C'est la couleur de la vie !"),
        ];
    }

    /**
     * Sélectionne aléatoirement un nombre d'énigmes différentes.
     * 
     * @param int $nombre Nombre d'énigmes à sélectionner
     * @return Enigme[] Tableau d'énigmes sélectionnées
     * @throws \Exception Si le nombre demandé est supérieur au nombre d'énigmes disponibles
     */
    public function selectionnerEnigmesAleatoires(int $nombre): array {
        // TODO
    }

    /**
     * Retourne le nombre total d'énigmes disponibles.
     */
    public function getNombreEnigmes(): int {
        return count($this->enigmes);
    }
}
