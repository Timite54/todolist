<?php

    //creation d'une class etudiant
class etudiant {
     
    //les propriété publique de la class
    public $isStudy = true;
    public $nom;
    public $age;
    public $notes;

        //la fonction constructeur de la class pour nous permettre de creer une instance (declaration d'instance)
    public function __construct ($nom, $age, $notes){
        $this->nom = $nom;
        $this->age = $age;
        $this->notes = $notes;
    }

    
}  
$notesCharles = array("maths" => 17, "francais" => 9 , "anglais" => 12);
// $charles  = new etudiant["Charles" ];
 