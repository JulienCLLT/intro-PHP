<?php

// Verifier un palindrome
    // $user = readline("quelle est votre mot :");
    // $invertWord = strtolower(strrev($user));

    // if (strtolower($user) == $invertWord) {
    //     echo " votre mot est un palindrome.";
    // } else {
    //     echo "Votre mot $user n\'est pas un palindrome dommage.";
    // };

//calculer une moyenne 
    // $notes = [ 13, 6, 19];
    // $moyenne = round(array_sum($notes)/count($notes));

    // echo $moyenne;

// filtre de modération 

$blacklists = ['merde', 'con', 'débile', 'salaud'];

$phraseUser = readline('Entrez votre message:');


foreach ($blacklists as $value) {
    $censure = str_repeat('*',strlen($value));
    $phraseUser = str_replace($value, $censure, $phraseUser);
};

echo $phraseUser;


