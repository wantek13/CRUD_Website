<?php
session_start();
	require '../functions.php';
	include '../partials/header.php';

	$festivalPage = $_GET['page'];

	$resultat = getFestivalsByFestival($festivalPage, $bdd);
?>
<!-----------------Image------------------------------------->
		<div class="row">
			<div class="col-md-12">
				<img width="100%" height="500px" src="https://travel.decibeloutdoor.com/images/events/5/img/db-website-header.jpg">
			</div>
		</div>

<?php 

    include '../partials/menu.php';

	include '../partials/_section.php';

    include '../partials/footer.php';

?>