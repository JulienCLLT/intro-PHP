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
$notes = [ 13, 6, 19];
$moyenne = round(array_sum($notes)/count($notes));

echo $moyenne;
