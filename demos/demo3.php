<?php

declare(strict_types= 1);
function reponse_oui_non()
{
    $response = readline("Voulez-vous continuer o/n ? ");
    if ($response === "o") {
        return true;
    }
    if ($response === "n") {
        return false;
    }
}
function demander_crenau($phrase = null)
{
    if ($phrase === null) {
        $phrase = "veuillez entrer un crenau";
    }
    echo $phrase . " \n";
    $heureDebut = (int)readline("Entre l'heure de début : ");
    $heureFin = (int)readline("Entre l'heure de fin : ");

    if (($heureDebut < 00 || $heureDebut > 24) || ($heureFin < 00 || $heureFin > 24)) {
        echo "l'heure de debut " . $heureDebut . " ou l'heure de fin " . $heureFin . " doit etre valide (compris entre [00h-24h]) \n";
    } elseif ($heureDebut >= $heureFin) {
        echo "L'heure de début ne doit pas être supérieure ou égale à l'heure de fin.\n";
    }
    return [$heureDebut, $heureFin];
}

function demander_crenaux($phrase = null)
{
    echo $phrase . " \n";
    $liste_crenaux = [];
    do {
        $liste_crenaux[] = demander_crenau('Entre un crenaux');
        $reponse = reponse_oui_non();
    } while ($reponse === true);

    return $liste_crenaux;
}

$crennaux = demander_crenaux('Veuillez entrer des crenaux');
var_dump($crennaux);
// $crennau2 = demander_crenau('veuillez entrer un crenau');
// var_dump($crennau2);

// $result = reponse_oui_non();
// echo $result;
