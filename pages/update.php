<?php
    require '../functions.php';
    include '../partials/header.php';

    if(!isset($_GET['id']))
    {
        include '../partials/not_found.php';
        exit;
    }

    $festivalId = $_GET['id'];

    $festival = getFestivalById($festivalId, $bdd);
    if(!$festival)
    {
        include '../partials/not_found.php';
        exit;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
            //$_POST = toutes les données du festival
            //$festivalId = $_GET['id'] defini juste au dessus
            $festival = updateFestival($_POST, $festivalId, $bdd);

            //permet de retourner sur la page désignée
            //attention a la syntaxe
            header("Location: index.php");
    }
    
include '../partials/_form.php';

include '../partials/footer.php';