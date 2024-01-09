<?php
require('bd.php');

$result = $connexion->query("SELECT * FROM tache");
?>

<!DOCTYPE html
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Tâches</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <script src="script.js"></script>  -->
</head>

<body class="mestaches">

    <div class="mesTache">

        <div class="add-task-button">
            <a href="ajoutToDo.php">
                <button>Ajouter une Tâche</button>
            </a>
        </div>
        <h1>Liste des Tâches</h1>
            <?php
            while ($row= $result->fetch_assoc()) {
            ?>
        <div class="tasks">
                <div class="task">
                    <h3><?php echo $row['titre']; ?></h3>
                    <hr>
                    <p><?php echo $row['libelle']; ?></p>
                    <p>Priorité: <?php echo $row['priorite']; ?> </p>

                    <a href="edit.php?id=<?php echo $row['id']; ?> " class="edit">Modifier</a>

                    <a href="delete.php?id=<?php echo $row['id'];?>" class="delete"> Supprimer</a>
                    <hr>
                </div>
        </div>
            <?php
            }
            $result->free_result();
            ?>
    </div>


</body>

</html>