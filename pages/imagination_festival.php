<?php

    require '../functions.php';
    include '../partials/header.php';

    $festivalPage = $_GET['page'];

    $resultat = getFestivalsByFestival($festivalPage, $bdd);
?>
<!-----------------Image------------------------------------->
		<div class="row">
			<div class="col-md-12">
                <img width="100%" height="500px" src="https://cdn.shopify.com/s/files/1/0064/7400/6618/files/defqon-2020-primal-energy.png?v=1576355710">
			</div>
		</div>

<?php 

    include '../partials/menu.php';

    include '../partials/_section.php';

    include '../partials/footer.php';

?>