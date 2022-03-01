<?php
// (int) indique que la valeur recu sera converti en integer (nombre)
//$note = (int)readline('entrez votre note : ');

$action = (int)readline('Entrez votre action : (1: Attaquer, 2: Defendre, 3: Passer mon tour)');

switch ($action) {
    case 1:
        echo 'J\'attaque';
        break;
    case 2:
        echo 'Je defends';
        break;
    case 3:
        echo 'Je ne fait rien';
        break;
    
    default:
        echo 'Commande invalide';
        break;
}


// if ($note < 10) {
//     echo 'Vous n\'avez pas la moyenne dommage.';
// } elseif ($note === 10) {
//     echo 'Vous avez pile la moyenne.';
// } else {
//         echo 'Vous avez la moyenne bravo.';
// };

?>