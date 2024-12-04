<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);


// Nombre de mots dans le dico
// echo count($dico);

// Nombre de mots a 15 lettres
// $count = 0;
// foreach ($dico as $key => $mot) {
//     if (strlen($mot) == 16) {
//         $count++;
        
//     };
// }
// echo $count;


// Nombre de mots avec w dedans 

// $count = 0;
// foreach ($dico as $key => $mot) {
//     if (str_contains($mot, 'w')) {
//         $count++;
        
//     };
// }
// echo $count;

// Mots finissant par Q

$count = 0;

foreach ($dico as $mot) {
    $mot = trim($mot);
    if (str_ends_with($mot, 'q')) {
        $count++;
    }
}
echo $count;