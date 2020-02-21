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

include '../partials/menu.php';

?>

<div class="container">
    <div id="empty" class="card">
        <div class="card-header">
            <h3>Info Festival : <strong><?php echo $festival['nom'] ?></strong></h3>
        </div>

        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $festival['id'] ?>">Modifier</a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $festival['id'] ?>">Supprimer</a>
        </div>

        <table class="table">
            <tbody>
                <tr>
                <?php $video = preg_replace('/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i',
                        "<iframe width=\"100%\" height=\"500\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$festival['video']);
                    echo $video;
                ?>
                    
                </tr>
                <tr>
                    <th>Nom : </th>
                    <td><?php echo $festival['nom'] ?></td>
                </tr>
                <tr>
                    <th>AddDate : </th>
                    <td><?php echo $festival['addDate']; var_dump($festival['addDate']) ?></td>
                </tr>
                <tr>
                    <th><a class="btn btn-success" href="index.php">RETOUR</a></th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include '../partials/footer.php' ?>

