<?php 
include_once "/laragon/www/mortal-storm/POO-Combat/class/Personnage.php";

class Etoile_du_matin extends Personnage {




 
    public function __construct($name)
    {                                
        parent::__construct([
            'nom' => $name, 
            'classe' => 'Etoile_du_matin', 
            'vie' => 120, 
            'degats' => 20
        ]);
    }

}






?>