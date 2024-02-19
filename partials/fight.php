<?php
require_once "/laragon/www/mortal-storm/POO-Combat/config/traitementform.php";
require_once "/laragon/www/mortal-storm/POO-Combat/config/db_connect.php";
require_once "../class/FightsManager.php";
require_once "../class/PersoManager.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fight - TP Jeu de fight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>
<style>
        body {
            background-image: url('../assets/TB.webp');
            background-size: cover; /* Ajuste la taille de l'image pour couvrir toute la zone */
            background-position: center; /* Centre l'image horizontalement et verticalement */
            /* Vous pouvez ajouter d'autres propriétés de style selon vos besoins */
        }
    </style>
    <?php
        $title = " Combatter pour sauver l'honneur des démons ! ";
        $subtitle = "Voici le résultat du fight contre le dieu déchu " ;
        require('./header.php');
       
    ?>
    <?php
        $persoManager = new PersoManager($database);
        $fightManager = new FightsManager();

        $id = intval($_POST['hero_id']);

        $hero = $persoManager->find($id);
 
        $monster = $fightManager->createMonster();
        $fightResult = $fightManager->fight($hero, $monster);
        $persoManager->update($hero);
    ?>


    <div class="container">

        <div class="card" style="width: 18rem;margin:0 auto;text-align:center;margin-bottom:20px;">
            <div class="card-body">
                <h5 class="card-title"> Classe du joueurs </h5>
             
                <div cla ss="mb-3">
                    <img src="../assets/zeus.jpg" width="200" <?= $hero->getNom() ?>">
                    <p><?= $hero->getNom() ?></p>
                    <p>hp:<?= $hero->                      getVie() ?> HP</p>
                </div> 
            </div>
        </div>

        <ol class="list-group list-group-numbered">
            <?php foreach ($fightResult as $key => $result) : ?>
                <li class="list-group-item <?= $key % 2 ? 'list-group-item-primary' : 'list-group-item-danger' ?>"><?= $result ?></li>
            <?php endforeach; ?>   
        </ol>
    </div>

    <div style="margin:20px auto;width:200px;text-align:center;">
        <a href="./" class="btn btn-primary w-100"> Rejouer </a>
    </div>





</body>
</html>