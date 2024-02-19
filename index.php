<?php
include_once "./class/PersoManager.php";
include_once "./config/db_connect.php";
include_once "./class/Personnage.php";

$cardPersos = new PersoManager($database);

$aliveHeroes = $cardPersos->findAllAlive();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Battle of Gods</title>
</head>
<style>
        body {
            background-image: url('./assets/TB.webp');
            background-size: cover; /* Ajuste la taille de l'image pour couvrir toute la zone */
            background-position: center; /* Centre l'image horizontalement et verticalement */
            /* Vous pouvez ajouter d'autres propriétés de style selon vos besoins */
        }
    </style>


<body>
    <?php
    include_once "./partials/header.php";
    ?>

    <div class="container mt-5">
        <form action="./config/traitementform.php" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre nom">
            </div>
            <div class="mb-3">
                <label for="choix" class="form-label">Choix du démon :</label>
                <select class="form-select" name="classe" id="classe">
                    <option value="roi_du_monde_soutterain">roi du monde soutterain</option>
                    <option value="étoile_du_matin">étoile du matin</option>
                    <option value="roi_de_la_discorde">roi de la discorde</option>
                    <option value="roi_des_reves">roi des reves</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Confirmation</button>

        </form>
    </div>
    <bR>
    <br>
    <br>
    <br>
    <bR>
    <br>


    <?php foreach ($aliveHeroes as $aliveHero) { ?>

        <div class="container">
            <div class="">
                <h3><?= $aliveHero->getNom() ?></h3>
                <p>Points de vie: <?= $aliveHero->getVie() ?>
                Attaque: <?= $aliveHero->getDegats() ?></p>
                <p>Classe: <?= $aliveHero->getClasse() ?></p>
                <form action="./partials/fight.php" method="post">
                    <input type="hidden" name="hero_id" value="<?= $aliveHero->getId() ?>">
                    <input type="submit" class="choose-button" value="Choisir">
                </form>
            </div>
        </div>
    <?php } ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>