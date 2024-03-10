<?php

$insultes = ['mouf', 'salopare', 'con'];
$phrase = readline("Entre une phrase: ");
$replace = [];
foreach ($insultes as  $insulte) {
    // recupere la premiere lettre
    $lettre = substr($insulte,0,1);
    $replace[] = $lettre . str_repeat("*", strlen($insulte) - 1);
}
// $response = str_replace($insultes, '[message suprime]', $phrase);

echo $response;

// $mot = strtolower(readline("Entre un mot: "));
// print_r($mot);
// $motrenver = strrev($mot);
// if ($mot === $motrenver) {
//     echo "ce mot est un palyndrome";
// }else{
//     echo "ce mot n'est pas un palyndrome";
// }