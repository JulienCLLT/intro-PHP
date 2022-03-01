<?php

$note = [10,20];
$noteoldArray = array(10, 25);

$eleve = ['jean', 'passe', [10, 20, 30]];
//array avec une clef valeur
$student = [
    'nom' => 'paul',
    'prenom' => 'Yvon',
    'note'=> [10,20,30]
];

$classroom = [
    [
        'nom' => 'Doe',
        'prenom' => 'monique',
        'notes' => [ 15, 14, 18]
    ],
    [
        'nom' => 'Doe',
        'prenom' => 'Roger',
        'notes' => [ 7, 4, 8]  
    ]
];

// réassigné une valeur
$student["prenom"] = 'hector';
$student['note'][3] = 40;
    //réasigne auto fin du tableau (nouveau index fin)
$student['note'][]= 50;
//echo $student['nom'].' '.$student['prenom'].' '. $student['note'][3];

//affichage plus graphique des array
//print_r($student['note']);

echo $classroom[1]['notes'][1];

?>
