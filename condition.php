<?php
// (int) indique que la valeur recu sera converti en integer (nombre)
$note = (int)readline('entrez votre note : ');
if ($note < 10) {
    echo 'Vous n\'avez pas la moyenne dommage.';
} elseif ($note === 10) {
    echo 'Vous avez pile la moyenne.';
} else {
        echo 'Vous avez la moyenne bravo.';
};

?>