<?php
// (int) indique que la valeur recu sera converti en integer (nombre)
//$note = (int)readline('entrez votre note : ');

// if ($note < 10) {
//     echo 'Vous n\'avez pas la moyenne dommage.';
// } elseif ($note === 10) {
//     echo 'Vous avez pile la moyenne.';
// } else {
//         echo 'Vous avez la moyenne bravo.';
// };




// $action = (int)readline('Entrez votre action : (1: Attaquer, 2: Defendre, 3: Passer mon tour)');

// switch ($action) {
//     case 1:
//         echo 'J\'attaque';
//         break;
//     case 2:
//         echo 'Je defends';
//         break;
//     case 3:
//         echo 'Je ne fait rien';
//         break;
    
//     default:
//         echo 'Commande invalide';
//         break;
// }


// opérateur logique & = et  || = ou comme en JS

/* rappel table logique
VRAI & VRAI = VRAI
VRAI & FAUX = FAUX
FAUX & FAUX = FAUX

VRAI || FAUX = VRAI
VRAI || VRAI = VRAI
FAUX || FAUX = FAUX
*/

$heure = (int) readline('Entrez une heure : ');

if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 18)) {
    echo 'le Magasin est ouvert';
} else {
    echo 'le magasion est fermé';
};




?>