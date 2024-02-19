<?php
include_once "/laragon/www/mortal-storm/POO-Combat/class/Personnage.php";

class Roi_de_la_discorde extends Personnage
{


    public function __construct($name)
    {
        parent::__construct([
            'nom' => $name, 
            'classe' => 'Roi_de_la_discorde', 
            'vie' => 190, 
            'degats' => 20
        ]);
    }

}
