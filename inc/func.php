<?php

function debug($tableau){
	echo "<pre>"; print_r($tableau); echo "</pre>";
}

function slugify ($string) {
    // Convertit en caractères Unicode et transforme les accents
    $string = utf8_encode($string);
    $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
    // Supprime tout ce qui n'est pas des lettre, nombres et "_+-"
    $string = preg_replace('/[^a-z0-9\/_|+-]/', '', $string);
    // Remplace les espaces par un tiret (-)
    $string = str_replace(' ', '-', $string);
    // Supprime les tirets en début/fin de chaîne
    $string = trim($string, '-');
    // Met en minusucle tous les caractères
    $string = strtolower($string);

    if (empty($string)) {
        return 'n-a';
    }

    return $string;
}