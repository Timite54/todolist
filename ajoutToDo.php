<?php
// session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do list</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="ajout">

    <div class="card">
        
        <div class="enter">
            
            
 

            <form action="index.php" method="post">


          <?php

// // if(isset($_SESSION['erreur']) && !empty($_SESSION['erreur'])){
    // // echo '<div style="color:red;">' .$_SESSION['erreur'].'</div>';

    // unset($_SESSION['erreur']);

// } elseif(isset($_SESSION['succes'])){
    // // echo "<p class='succes'>" .$_SESSION['succes']. "</p>";
    
    // unset($_SESSION['succes']);
// }
// ?>

                <h1>ajout de tâches</h1>

                <label for="titre">
                    Titre de la tache : 
                    <input type="text" name="titre" placeholder="Nouvelle tâche" >
                </label>

                <label for="libelle">Decrivez la tache : 
                    <input type="text" name="libelle" placeholder="Libellé" >
                </label>

                <label for="debut">La tâche commence le : 
                    <input type="datetime-local" name="debut" >
                </label>

                <label for="fin">Elle s'achève le : 
                    <input type="date" name="fin" >
                </label>

                <div class="radio-group">
                        <label >
                            <input type="radio" name="priorite" value="basse">
                            Priorité Basse
                        </label>
                        <label>
                            <input type="radio" name="priorite" value="moyenne" checked> 
                            Priorité Moyenne
                        </label>
                        <label>
                            <input type="radio" name="priorite" value="haute">
                            Priorité Haute
                        </label>
                </div>

                <input type="submit" value="AJOUTER">
            </form>
    </div>

    
</body>
</html>