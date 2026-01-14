<?php
declare(strict_types=1);

// ================================
// Données
// ================================
$questions = [
    "Quel langage est principalement utilisé pour le style des pages web ?|HTML|CSS|Python|SQL|2",
    "Que signifie le sigle WWW ?|World Wide Web|Web World Wide|Wide Web World|World Web Wide|1",
    "Quelle balise HTML permet de créer un lien hypertexte ?|link|a|href|url|2",
    "En PHP, quel signe commence une variable ?|%|@|#|$|4",
    "Quel est le port standard pour le protocole HTTP ?|21|22|80|443|3",
    "Quel composant de l'ordinateur stocke les données à long terme ?|RAM|Processeur|Disque Dur|Carte Graphique|3",
    "Que signifie SIO dans BTS SIO ?|Services Informatiques aux ...stèmes Internes et Opérationnels|Services Internet et Outils|1",
    "Quel système d'exploitation est open-source ?|Windows|macOS|Linux|iOS|3",
    "En réseau, que signifie IP ?|Internet Protocol|Internal Process|Interconnection Point|Intranet Protocol|1",
    "Quelle fonction PHP permet d'afficher du texte ?|print_line()|echo|write()|display()|2",
    "Quel langage est exécuté côté client ?|PHP|Java|JavaScript|C#|3",
    "Combien d'octets y a-t-il dans un Kilo-octet (Ko) selon la norme historique ?|1000|1024|8|256|2",
    "Quel est l'équivalent binaire du chiffre décimal 5 ?|100|110|101|011|3",
    "Quelle commande permet de lister les fichiers sous Linux ?|cd|mkdir|ls|pwd|3",
    "Que signifie SQL ?|Structured Query Language|Simple Question Language|Style Query Layout|System Quality Level|1",
    "Quel est le rôle du DNS ?|Sécuriser la connexion|Traduire d... domaine en IP|Stocker les emails|Gérer les bases de données|2",
    "En programmation objet, comment appelle-t-on un modèle d'objet ?|Une instance|Une méthode|Un attribut|Une classe|4",
    "Quel caractère termine une instruction en PHP ?|.|:|,|;|4",
    "Lequel n'est PAS un navigateur web ?|Firefox|Chrome|Apache|Edge|3",
    "En HTML, quelle balise crée une liste à puces non ordonnée ?|ol|ul|li|list|2"
];

// ================================
// Fonctions (sans tableaux associatifs)
// ================================
function afficherEntete(): void
{
    echo "========================================\n";
    echo "BIENVENUE DANS LE QUIZ BTS SIO\n";
    echo "========================================\n";
}

function afficherSeparateur(): void
{
    echo "----------------------------------------\n";
}

function afficherFin(int $score, int $total): void
{
    echo "========================================\n";
    echo "TERMINE ! Votre score final : {$score} / {$total}\n";

    if ($score >= 16) {
        echo "Bravo ! Très bon résultat.\n";
    } elseif ($score >= 10) {
        echo "Peut mieux faire... Continuez vos efforts !\n";
    } else {
        echo "Courage ! Révisez et retentez le quiz.\n";
    }

    echo "========================================\n";
}

/**
 * Retourne un tableau indexé :
 * [0] intitulé
 * [1] choix 1
 * [2] choix 2
 * [3] choix 3
 * [4] choix 4
 * [5] bonne réponse (int 1..4)
 */
function parserLigneQuestion(string $ligne): array
{
    $parts = explode("|", $ligne);
    $parts[5] = (int)$parts[5]; // la bonne réponse en int
    return $parts;
}

function afficherQuestion(int $numero, array $q): void
{
    echo "Question {$numero} : {$q[0]}\n";
    echo "1) {$q[1]}\n";
    echo "2) {$q[2]}\n";
    echo "3) {$q[3]}\n";
    echo "4) {$q[4]}\n";
}

function demanderReponse(): int
{
    while (true) {
        $saisie = trim(readline("Votre réponse (1-4) : "));

        if (in_array($saisie, ['1', '2', '3', '4'], true)) {
            return (int)$saisie;
        }

        echo "Entrée invalide. Merci de saisir 1, 2, 3 ou 4.\n";
    }
}

function estBonneReponse(array $q, int $rep): bool
{
    return $rep === $q[5];
}

function afficherCorrection(bool $ok, array $q): void
{
    if ($ok) {
        echo "✅ Bonne réponse !\n";
        return;
    }

    $bonne = $q[5];        // 1..4
    $texteBonne = $q[$bonne]; // q[1]..q[4]
    echo "❌ Mauvaise réponse... La bonne était la {$bonne} ({$texteBonne})\n";
}

// ================================
// Programme principal
// ================================
afficherEntete();

$score = 0;
$total = count($questions);

for ($i = 0; $i < $total; $i++) {
    $q = parserLigneQuestion($questions[$i]);

    afficherQuestion($i + 1, $q);
    $rep = demanderReponse();

    $ok = estBonneReponse($q, $rep);
    afficherCorrection($ok, $q);

    if ($ok) {
        $score++;
    }

    afficherSeparateur();
}

afficherFin($score, $total);
