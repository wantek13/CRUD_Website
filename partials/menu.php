<!-----------------MENU--------------------------------------->
<div class="row">
			
	<div class="col-md-12">

		<nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark bg-dark">

			<a class="navbar-brand" href="index.php">HardAfter</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
		
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
					<a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							festivals
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="defqon_1.php?page=defqon1">Defqon 1</a>
							<a class="dropdown-item" href="decibel.php?page=decibel">Decibel</a>
							<a class="dropdown-item" href="dominator.php?page=dominator">Dominator</a>
							<a class="dropdown-item" href="hoh.php?page=hoh">Harmony of Hardcore</a>
							<a class="dropdown-item" href="ground_zero.php?page=ground_zero">Ground Zero</a>
							<a class="dropdown-item" href="intents_festival.php?page=intents_festival">Intents Festival</a>
						</div>
					</li>

					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							events
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="moh.php?page=moh">Masters of Hardcore</a>
							<a class="dropdown-item" href="reverze.php?page=reverze">Reverze</a>
							<a class="dropdown-item" href="qapital.php?page=qapital">Qapital</a>
							<a class="dropdown-item" href="syndicate.php?page=syndicate">Syndicate</a>
							<a class="dropdown-item" href="i_am_hardstyle.php?page=i_am_hardstyle">I am Hardstyle</a>
							<a class="dropdown-item" href="qlimax.php?page=qlimax">Qlimax</a>
							<a class="dropdown-item" href="imagination_festival.php?page=imagination_festival">Imagination Festival</a>
						</div>
					</li>

					<li class="nav-item active">
					<a class="nav-link" href="contact.php">Contact</a>
					</li>

					<li class="nav-item active">
					<a class="nav-link" href="administration.php">administration</a>
					</li>
				</ul>

				<form class="form-inline my-2 my-lg-0" method="POST" action="index.php">
					<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
				</form>

					<?php if(isset($_SESSION['username'])): ?>
						<a href="viewUser.php?user=<?php echo $_SESSION['username']; ?>" class="btn btn-outline-success my-3 my-sm-0"><?php echo $_SESSION['username']; ?></a>
						<a href="?logout=1" class="btn btn-outline-success my-3 my-sm-0">LOGOUT</a>
					<?php elseif(isset($_GET['page']) == 'login'): ?>
						
					<?php elseif(isset($_GET['page']) == 'register'): ?>
						
					<?php else: ?>
						<a href="login.php?page=login" class="btn btn-outline-success my-3 my-sm-0">LOGIN</a>
						<a href="register.php?page=register" class="btn btn-outline-success my-2 my-sm-0">REGISTER</a>
					<?php endif; ?>

			</div>
		</nav>
	</div>
</div>
<!----------FinMENU----------------------------------------->