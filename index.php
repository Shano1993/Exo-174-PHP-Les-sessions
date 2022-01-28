<?php

// Premiere ligne

session_start();
$_SESSION['couleur'] = 'rouge';
echo "La valeur session 'couleur' a été définie !";
?>

<a href="index2.php">Voir la valeur de la session</a>








