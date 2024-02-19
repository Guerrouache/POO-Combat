<?php
require_once "../config/db_connect.php";
include_once "../class/Etoile_du_matin.php";
include_once "../class/Roi_de_la_discorde.php";
include_once "../class/Roi_des_reves.php";
include_once "../class/Roi_du_monde_soutterain.php";
include_once "../class/PersoManager.php";



if (
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['classe']) && !empty($_POST['classe'])
) {




    switch ($_POST['classe']) {
        case 'roi_du_monde_soutterain':
           $hero = new Roi_du_monde_soutterain($_POST['nom']) ;
            break;
        case "étoile_du_matin":
            $hero = new Etoile_du_matin($_POST['nom']);
            break;
        case 'roi_de_la_discorde':
            $hero = new Roi_de_la_discorde($_POST['nom']);
            break;
        case 'roi_des_reves':
            $hero = new Roi_des_reves($_POST['nom']);
            break;
    }
    

   $heroManager = new PersoManager($database);
   $heroManager->ajouter($hero);
   header('Location: ../index.php');
}


