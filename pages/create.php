<?php

    require '../functions.php';
    include '../partials/header.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {

        $festival = createFestival($_POST, $bdd);

        //permet de retourner sur la page désignée
        //attention a la syntaxe
        header("Location: index.php");
    }

    $festival = 
    [
        'img' => '',
        'nom' => '',
        'video' => '',
        'addDate' => ''
    ];

    include '../partials/_form.php';
    include '../partials/footer.php';