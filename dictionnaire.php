<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);


// Nombre de mots dans le dico
// echo count($dico);

// Nombre de mots a 15 lettres
$count = 0;
foreach ($dico as $key => $mot) {
    if (strlen($mot) == 16) {
        $count++;
        
    };
}
echo $count;
