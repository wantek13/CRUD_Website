<?php
    require '../functions.php';
    include '../partials/header.php';

    if(!isset($_GET['id']))
    {
        include '../partials/not_found.php';
        exit;
    }

    $festivalId = $_GET['id'];

    deleteFestival($festivalId, $bdd);

    // $film = afficherFilmParId($festivalId);
    // if(!$film)
    // {
    //     include 'partiels/not_found.php';
    //     exit;
    // }
    //permet de retourner sur la page désignée
    //attention a la syntaxe
    header("Location: index.php");

include '../partials/footer.php';