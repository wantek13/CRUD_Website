<?php

try{
    $bdd = new PDO('mysql:dbname=projet_festival;host:127.0.0.1', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
}
catch(exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
