<?php

    require '../functions.php';
    include '../partials/header.php';

    $festivalPage = $_GET['page'];

    $resultat = getFestivalsByFestival($festivalPage, $bdd);
?>
<!-----------------Image------------------------------------->
		<div class="row">
			<div class="col-md-12">
                <img width="100%" height="500px" src="https://www.hardnews.nl/wp-content/uploads/2019/10/Reverze-line-up-2020-megamix-850x315.jpg">
			</div>
		</div>

<?php 

    include '../partials/menu.php';

    include '../partials/_section.php';

    include '../partials/footer.php';

?>