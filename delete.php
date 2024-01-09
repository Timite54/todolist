<?php 
require('bd.php');

if(isset($_GET['id'])){
    $tacheId = $_GET['id'];

    //supprssion de la tache 
    $result = $connexion->query("DELETE FROM tache WHERE id = $tacheId");


    if($result){
        echo "Tâche supprimée avec succès";

    }else{
        echo "Erreur lors e la suppression de la tâche : " .$connexion->error;    }
}else{
    echo "Aucune tâche trouvée";
}
$connexion->cloe();
