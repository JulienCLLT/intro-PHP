<?php

$lastname = "Doe";
//fonction avec valeur par defaut ('Anonymous')
function bonjour ($name = 'Anonymous') {
    echo "bonjour $name \n";
};

function bonjours ($name) {
    return "bonjours avec un S $name \n";
};


// une fonction de base n'a pas accés à des variables à l'exterieur de celle-ci toute information externe dois etre passé en via des arguments.
function scopeVariable ($name = null) {
    //global permet d'avoir acces a une variable exterieur a la fonction. Méthode ne conseillé car le fonctionnement de la fonction depend de l'existance varible exterieur.
    global $lastname;
    if ($name === null){
        return "bonjour à personne \n";
    };
    return "Bonjour $name $lastname \n";
};

function repondre_oui_non ($params) {

    
    while (true) {
        $result = readline("$params");
            switch ($result) {
                case 'o':
                    return true;
                    break;
                case 'n':
                    return false;
                    break;

            }
    }

  
} ;

//$result = repondre_oui_non('voulez vous continuer ? o/n : ');
//var_dump($result);

function demander_creneau ($phrase = 'Veuillez entre un creneau') {
    echo $phrase . "\n";
    while (true) {
        $ouverture = (int)readline("Heure d'ouverture : "); 
            
            if ($ouverture >= 0 && $ouverture <= 23) {
                break;
            };
    };

    while (true) {
        $fermeture = (int)readline('Heure de fermeture :');
        
            if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
                break;
            }
    };
    
    return [$ouverture, $fermeture];
    

};

$creneau = demander_creneau();
var_dump($creneau);


//

// bonjour();
// $resultFunction = bonjours("Marie");
// echo $resultFunction;
//  $resultFunction = scopeVariable('John');
//  echo $resultFunction;


?>