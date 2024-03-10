<?php
#========= (Crenau) Algo qui demande a un utilisateur les heures d'ouverture de son magasin en suite on lui demande d'entrer une heure et on lui dira si le magasin est ouvert ou pas.

$heures_ouvertures = [];

do {
    $heureDebut = (int)readline("Entre l'heure de début : ");
    $heureFin = (int)readline("Entre l'heure de fin : ");

    if (($heureDebut >= 00 && $heureDebut <= 24) && ($heureFin >= 00 && $heureFin <= 24) && ($heureDebut < $heureFin)) {
        $heures_ouvertures[] = [$heureDebut, $heureFin];
    } elseif (($heureDebut < 00 || $heureDebut > 24) || ($heureFin < 00 || $heureFin > 24)) {
        echo "l'heure de debut " . $heureDebut . " ou l'heure de fin " . $heureFin . " doit etre valide (compris entre [00h-24h]) \n";
    } else {
        echo "L'heure de début ne doit pas être supérieure ou égale à l'heure de fin.\n";
    }

    $reponse = readline("Veux-tu entrer un nouveau créneau ? (o/n) : ");
} while ($reponse === 'o');

while (true) {
    $heure_entree = (int)readline("Entre une heure valide : ");
    if ($heure_entree >= 00 && $heure_entree <= 24) {
        break;
    }
    echo "heure incorrecte \n";
}
$magasinOuvert = false;
foreach ($heures_ouvertures as $creneau) {
    // var_dump($creneau);die();
    if ($heure_entree >= $creneau[0] && $heure_entree <= $creneau[1]) {
        $magasinOuvert = true;
        break;
    }
}

if ($magasinOuvert) {
    echo "Le magasin est ouvert à cette heure.\n";
} else {
    echo "Le magasin est fermé à cette heure.\n";
}

// $heures_ouvertures = [];
// $heureDebut = (int)readline("Entre l'heure de debut: \n");
// $heureFin = (int)readline("Entre l'heure de fin: \n");

// if($heureDebut > $heureFin){
//     echo "l'heure de debut ne doit pas etre superieur a l'heure de fin. \n";
//     $heureDebut = (int)readline("Entre l'heure de debut: \n");
//     $heureFin = (int)readline("Entre l'heure de fin: \n");
//     if($heureDebut < $heureFin){
//         array_push($heures_ouvertures, $heureDebut, $heureFin);
//     }
// }
// array_push($heures_ouvertures, $heureDebut, $heureFin);

// $response = readline("veux-tu entrer un nouveau crenaux o/n: \n");
// if($response == 'o'){
//     var_dump($heureDebut, $heureFin);
//     $heureDebut = (int)readline("Entre l'heure de debut: \n");
//     $heureFin = (int)readline("Entre l'heure de fin: \n");

//     if($heureDebut > $heureFin){
//         echo "l'heure de debut ne doit pas etre superieur a l'heure de fin. \n";
//         $heureDebut = (int)readline("Entre l'heure de debut: \n");
//         $heureFin = (int)readline("Entre l'heure de fin: \n");
//         if($heureDebut < $heureFin){
//             array_push($heures_ouvertures, $heureDebut, $heureFin);
//         }
//     }
//     array_push($heures_ouvertures, $heureDebut, $heureFin);
// }

// $heure_entree = (int)readline("Entre une heure: \n");
// if(in_array($heure_entree, $heures_ouvertures)){
//     echo "Le magasin est ouvert";
// }else{
//     echo "Le magasin est ferme";
// }