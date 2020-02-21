<?php

if(isset($_GET['logout']))
{
	session_destroy();
	header('Location: .');
	exit;
}

require '../functions.php';

include '../partials/header.php';
include '../partials/menu.php';
?>
<!-----------------Image------------------------------------->
<div class="row">
		<div class="col-md-12">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-caption d-none d-md-block">
						<h1>HARDAFTER</h1>
						<p>The first aftermovies Website in the world!</p>
						<a href="#anchor1" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">GO HARD</a>
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" src="https://www.b2s.nl/wp/wp-content/uploads/2019/08/Decibeloutdoor2019-339.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="https://scontent-frt3-2.xx.fbcdn.net/v/t1.0-9/80411764_10157225932449775_4110197502278369280_o.jpg?_nc_cat=107&_nc_oc=AQl8345N1J_18iy7GOZT5UXTh9RV1XwJM6CL8dAutuZl8TurxB6xMrZiwAtuwIbe8CsjOZzSYI_gfgQaCJlfmW_Q&_nc_ht=scontent-frt3-2.xx&oh=973fee900175079b629538ef9a6b9422&oe=5E980DB8" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="https://www.b2s.nl/wp/wp-content/uploads/2019/08/Decibeloutdoor2019-2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-9/77318528_10157165379144775_3734510515259441152_o.jpg?_nc_cat=108&_nc_oc=AQkh7d2k9zc6RHgJdcOjn889OVfsLf4omuozPCbppcXhcVS1DP9kas56crS5U-j4PC-aMFlRntB-1hgNmZUWx9Xd&_nc_ht=scontent-frt3-1.xx&oh=9fd7fd40634fb7bd3d97617351b7513d&oe=5ECDFCCA" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="https://www.b2s.nl/wp/wp-content/uploads/2019/08/Decibeloutdoor2019-96.jpg" alt="Third slide">
					</div>
				</div>
			</div>
		</div>
<!-----------------/Image------------------------------------->
<?php 

if(isset($_POST['search']))
{
	$resultat = search($_POST['search'], $bdd);

	include '../partials/_section.php';
}

else
{
	$resultat = getFestivals($bdd);

	include '../partials/_section.php';
}
    include '../partials/footer.php';
?>