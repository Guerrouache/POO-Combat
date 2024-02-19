<?php 
include_once "/laragon/www/mortal-storm/POO-Combat/class/Personnage.php";

class Roi_des_reves extends Personnage{




    public function __construct($name)
    {
        parent::__construct([
            'nom' => $name, 
            'classe' => 'Roi_des_reves', 
            'vie' => 120, 
            'degats' => 20
        ]);
    }

}






?>