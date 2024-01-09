<?php

// session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// print_r($_SERVER);
// exit;
require ('bd.php');


// $erreur = "";

if($_SERVER["REQUEST_METHOD"] == "POST") { 

    if (
        isset($_POST["titre"]) && isset($_POST["libelle"]) && isset($_POST["debut"]) && isset($_POST["fin"]) && isset($_POST["priorite"])
    ){
        $titre = $_POST["titre"]; 
        $libelle = $_POST["libelle"]; 
        $debut = $_POST["debut"];
        $fin = $_POST["fin"]; 
        $priorite = $_POST["priorite"];

        //validation
    if( empty($titre) || empty($libelle) ||
        empty($debut) || empty($fin) || empty($priorite)) {
    
            echo "Tous les champs doivent être remplis";
        }  else  {
    
            $requete = $connexion->prepare( "INSERT INTO tache ( titre, libelle, debut, fin, priorite) 
                                            VALUES(?,?,?,?,?)");
    
            $requete->bind_param("sssss", $titre, $libelle, $debut, $fin, $priorite);
    
    
            //execution de la requete
            if ($requete->execute())  {
                header("Location: listetache.php");
                exit();
    
            } else {
               echo "Erreur lors de l'ajout de la tâche : " .$requete->error;
            }        
            $requete->close();
    }



        }else {
            echo "Des paramètres du formualires sont manquants.";
        } 
        
    }
     else {
        header("Location: listetache.php");
        exit();
    }
    $connexion->close();
