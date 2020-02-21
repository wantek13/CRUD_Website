<?php
    require '../functions.php';
    include '../partials/header.php';

    $festivalPage = $_GET['page'];

    $resultat = getFestivalsByFestival($festivalPage, $bdd);
?>
<!-----------------Image------------------------------------->
		<div class="row">
			<div class="col-md-12">
                <img width="100%" height="500px" src="https://d1amsjpw70k1w5.cloudfront.net/l6hfsc63q612/4ZWwylBqcwQmQiEaggw48A/02fc4139567e776d03eb62cde2d0d6bd/180721_121721_dominator_delio_lowres.jpg?w=1024">
			</div>
		</div>

<?php 

    include '../partials/menu.php';

    include '../partials/_section.php';

    include '../partials/footer.php';

?>