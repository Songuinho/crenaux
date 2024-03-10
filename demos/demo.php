<?php

    # =============== Algo qui demande la note d'un eleve et son genre et lui donne le resultat ================


print("Entre ta note et ton genre:  Genre: F ou M \n");
$note = (int)readline("Ta note: \n");
$genre = (string)readline("ton genre: ");
while($genre !== 'F' && $genre !== 'M'){
    echo " \"$genre\" ce genre est incorrect \n";
    $genre = readline("Entre a nouveau ton genre F ou M: ");
}
if($note > 10 && $note <= 20){
    echo "Tu as passé ton examen !";
}elseif($note === 10){
    echo $genre == 'M' ? "Tu as été délibéré mon petit !" : "Tu as été délibéré peyi soeur !" ;
}elseif($note < 10){
    echo "Tu as echoué ton examen !";
}else{
    echo $genre == 'M' ? "Inssere une note correcte mon petit !" : "Inssere une note correcte peyi soeur!";
}
        # ============= Algo qui demande a un utilisateur d'entrer des note et lui retourne la liste des notes entrees lorsqu'il a entre fin ======================== 
/*
$note = null;
$notes = [];
while(true){
    echo "entre une note ou tape sur 'fin' pour terminer la session \n";
    $note = readline('note: ');
    if($note === "fin"){
        break;
    }else{
        $notes[] = (int)$note;
    }
}
echo "\n";
if(empty($notes)){
    echo "votre tableau est vide";
}else{
    echo "liste des notes: \n";
    foreach($notes as $n){
        echo "- " . $n . "\n";
    }
} */

