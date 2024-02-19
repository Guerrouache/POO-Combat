<?php 
include_once "/laragon/www/mortal-storm/POO-Combat/class/Personnage.php";

class Roi_du_monde_soutterain extends Personnage {




    public function __construct($name)
    {
        parent::__construct([
            'nom' => $name, 
            'classe' => 'Roi_du_monde_soutterain', 
            'vie' => 120, 
            'degats' => 20
        ]);
    }


}






?>