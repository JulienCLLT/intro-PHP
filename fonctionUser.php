<?php

$lastname = "Doe";
//fonction avec valeur par defaut ('Anonymous')
function bonjour ($name = 'Anonymous') {
    echo "bonjour $name \n";
};

function bonjours ($name) {
    return "bonjours avec un S $name \n";
};


// une fonction de base n'a pas accés a des variable a l'exterieur de celle-ci toute information externe dois etre passé en via des arguments.
function scopeVariable ($name = null) {
    //global permet d'avoir acces a une variable exterieur a la fonction. Méthode ne conseillé car le fonctionnement de la fonction depend de l'existance varible exterieur.
    global $lastname;
    if ($name === null){
        return "bonjour à personne \n";
    };
    return "Bonjour $name $lastname \n";
};

function repondre_oui_non ($reponse) {
    switch ($reponse) {
        case 'o':
            return true;
            break;
        case 'n':
            return false;
            break;
        
        default:
            readline('voulez vous continuer');
            break;
    }
} ;

// bonjour();
// $resultFunction = bonjours("Marie");
// echo $resultFunction;
 $resultFunction = scopeVariable('John');
 echo $resultFunction;


?>