<?php

require 'bdd.php';

function getFestivals($bdd)
{
    $resultat = $bdd->query('SELECT * FROM festivals ORDER BY addDate DESC');

    return $resultat;
}

function getFestivalById($id, $bdd)
{
    $festivals = getFestivals($bdd); 
    foreach($festivals as $festival)
    {
        if($id == $festival['id'])
        {

            $stmt = $bdd->prepare('SELECT * FROM festivals WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $result = $stmt->fetch();

            return $result;
        }
    }
}

function getFestivalsByFestival($festivalPage ,$bdd)
{
    $festivals = getFestivals($bdd); 
    foreach($festivals as $festival)
    {
        if($festivalPage == $festival['festival'])
        {
            $resultat = $bdd->query("SELECT * FROM festivals WHERE festival IN('$festivalPage') ORDER BY nom DESC");

            return $resultat;
        }
    }
}

function createFestival($data, $bdd)
{
    // insert a row
    $img = htmlspecialchars($_POST["img"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $video = htmlspecialchars($_POST["video"]);
    $festival = htmlspecialchars($_POST["festival"]);

    $stmt = $bdd->prepare("INSERT INTO festivals (img, nom, video, festival) VALUES (:img, :nom, :video, :festival)");

    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':video', $video);
    $stmt->bindParam(':festival', $festival);

    $stmt->execute();
    
    header('Location: index.php');
}

function updateFestival($data, $id, $bdd)
{
    $data = $festivals = getFestivals($bdd);

    foreach ($festivals as $festival) 
    {
        if($id == $festival['id'])
        {
            $img = htmlspecialchars($_POST["img"]);
            $nom = htmlspecialchars($_POST["nom"]);
            $video = htmlspecialchars($_POST["video"]);
            $festival = htmlspecialchars($_POST["festival"]);

            $data=$bdd->prepare('UPDATE festivals SET img = :img , nom = :nom , video = :video, festival = :festival WHERE id= '.$id.'');
            $data->execute(array('img' => $_POST['img'],'nom' => $_POST['nom'], 'video' => $_POST['video'], 'festival' => $_POST['festival']));

            $data->bindParam(':img', $img);
            $data->bindParam(':nom', $nom);
            $data->bindParam(':video', $video);
            $data->bindParam(':festival', $festival);
        }

        
    }
    
}

function deleteFestival($id, $bdd)
{
    $festivals = getFestivals($bdd);

    foreach ($festivals as $key => $festival) {
        if($id == $festival['id'])
        {
            
            $sql = 'DELETE FROM festivals WHERE id= :id';
            $resultat = $bdd->prepare($sql);
            $resultat->bindParam(':id', $id);
            $resultat->execute();
        }
    }
}

function search($data, $bdd)
{
    $festivals = getFestivals($bdd);
    
    foreach($festivals as $festival)
    {
        $upData = strtoupper($data);
        $upNom = strtoupper($festival['nom']);

        $position = strpos($upNom, $upData);

        if($position !== false)
        {
            $resultat = $bdd->query("SELECT * FROM festivals WHERE nom LIKE '%{$data}%' ");
            return $resultat;
        }
    }
}



