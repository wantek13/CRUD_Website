<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>HardAfter</title> 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<?php if(isset($_GET['page']) && $_GET['page'] == "login"): ?>
		<style>body {background: url("https://www.mastersofhardcore.com/wp-content/themes/mastersofhardcore/assets/img/footer.jpg"); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}</style>
	<?php elseif(isset($_GET['page']) && $_GET['page'] == "register"): ?>
		<style>body {background: url("https://www.iamhardstyle.com/wp-content/uploads/sites/3/2019/09/20190309-Rossumedia-IAmHardstyle-Germany-0124-7900-min.jpg"); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}</style>
	<?php endif;?>
	<!--------FONTS---------------------------------------------->
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Black+Ops+One|Bungee+Inline&display=swap" rel="stylesheet">

	<style type="text/css">
		h1{line-height: 100px;}
		.container-fluid{margin:0px; padding:0px;}
	</style>
</head>
<body>

<div class="container-fluid">
