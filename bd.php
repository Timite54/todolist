<?php

$serveur = "localhost";
$user = "root";
$password = "";
$bdd = "todolist";

$connexion = new mysqli($serveur, $user, $password, $bdd);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Echec de la connexion à la base de données : " . $connexion->connect_error);
}
?>
