<?php

$heure = null;
$notes = [10, 15, 17, 3];
$student = [
    'cm1' => 'Eric',
    'cm2' => 'Theo',
    'cp' => 'kiki'
];

//Tant que
// while ($heure !== 10) {
//     $heure = (int)readline('Entrez une heure :');
// };

// echo 'Brave vous avez trouvé la bonne heure (sortie de boucle)';

// for ($i=0; $i < 10; $i++) { 
//     echo " - $i \n";
// };

// Pour chaque
// foreach ($notes as $value) {
//     echo " note - $value . \n";
// };

// foreach ($student as $classe => $eleve) {
//     echo "l'éleve $eleve est dans la classe $classe \n";
// };

// $user = null;
// $noteUser = [];

// while ($user !== 'fin') {
//     $user = readline('Entrez une nouvelle note a sauvgarder ou Entré fin.');
    
//     if ($user !== 'fin') {
//         $noteUser[] = (int)$user ;
//     } else {
//         echo "fin de la saisie de note au revoir.\n";
//     };
    
// };

// foreach ($noteUser as $value) {
//     echo "liste de note $value \n";
// };

$horaireOverture = [];

while (true) {
    $debut = (int)readline('Entrez les horaires d\'ouverture :');
    $fin = (int)readline('Entrez les horaires de fermeture :');

    if ($debut >= $fin) {
        echo " Creneau horaire érroné.";
    }else {
        $horaireOverture[]= [$debut, $fin];
        $action = readline("voulez-vous ajouter un nouveau creneau ? (o/n)");
        if ($action === 'n') {
            break;
        }
    }
};

$horaire = (int) readline("A quelle heure voulez vous visiter le shop ?");
    if (($horaireOverture[0][0] <= $horaire && $horaire <= $horaireOverture[0][1]) || ($horaireOverture[1][0] <= $horaire && $horaire <= $horaireOverture[1][1])) {
        echo 'le Magasin est ouvert';
    } else {
        echo 'le magasion est fermé';
    };




