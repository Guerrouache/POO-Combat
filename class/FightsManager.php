<?php 
include_once "../config/db_connect.php";
include_once "/laragon/www/mortal-storm/POO-Combat/class/Personnage.php";
include_once "/laragon/www/mortal-storm/POO-Combat/class/Monster.php";

class FightsManager{

    
    public function fight(Personnage $hero, Monster $monster)
    {
        $fightresultat = [];


        do{
            $damage = $monster->hit($hero);
            array_push($fightresultat, "le monstre inflige". $damage ."dégats au joueur");
            if($hero->getVie() <= 0){
                array_push($fightResult, "le héro est mort");
                break;
        }

        $damage = $hero->hit($monster); 
        array_push($fightresultat, "le joueur inflige ". $damage ." dégats au monstre");
        if($monster->getVie() <= 0){
            array_push($fightresultat, "le monstre est mort");
        }
        }while($monster->getVie() > 0);
     
        return $fightresultat;
    }


    public function createMonster()
    {
        $name = "Dieu Déchu";
        $vie = rand(100,200);
        $data = [
            'name' => $name,
            'vie' => $vie
        ];

        return new Monster ($data);
    } 

}

?>