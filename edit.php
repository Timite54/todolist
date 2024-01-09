<?php

require('bd.php');

//verification de l'id de la tache dans GET
if(isset($_GET['id'])) {
    $tacheId =$_GET['id'];
    
    //faire ue requete pour recup les detailes de la tache
    $result = $connexion->query("SELECT * FROM tache WHERE id = $tacheId");
    
    if ($result->num_rows > 0) {
        $tache = $result->fetch_assoc();

          // Afficher le formulaire de modification 
                    ?>
<!DOCTYPE html>
    <html lang="en">
  
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Modifier la Tâche</title>
              <link rel="stylesheet" href="styles.css">
          </head>
  
        <body class="modifier-tache">
  
            <div class="modifierTache">
  
                
                <form action="index.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $tache['id']; ?>">
                    
                    <div class="tasks">
                        <div class="task">
                            <h3> 
                                <h1>Modification de la Tâche</h1>
                            </h3>
                            <hr>
                            <label for="titre">Le titre 
                                <input type="text" name="titre" value="<?php echo $tache['titre']; ?>"> 
                            </label> <br>
                            <label for="libelle"> Libellé de la tâche
                                <input type="text" name="libelle" value="<?php echo $tache['libelle']; ?>">
                            </label><br>

                            <label for="debut">La tâche commence le : 
                                <input type="datetime-local" name="debut" value="<?php echo $tache['debut'] ?>" >
                            </label>
                                <br>
                            <label for="fin">Elle s'achève le : 
                                <input type="date" name="fin" value="<?php echo $tache['fin'] ?>" >
                            </label>

                            <p>Priorité: 
                            <label >
                            <input type="radio" name="priorite" value="<?php $tache['priorite'];  ?>">
                            Basse
                        </label>
                        <label>
                            <input type="radio" name="priorite" value="<?php $tache['priorite'] ?>"> 
                            Moyenne
                        </label>
                        <label>
                            <input type="radio" name="priorite" value="haute">
                            Haute
                        </label>
                            <!-- <?php echo $tache['priorite']; ?> -->
                         </p>
                            <hr>
                        </div>
                        <input type="submit" value="Modifier">
                    </div>
  
                  </form>
  
              </div>
  
          </body>
  
    </html>
          <?php
} else {
    echo "Tâche numéro   non trouvée.";
    }
    $result->free_result();
}else{
    echo "Id de la tache non specifié.";
}
$connexion->close();
