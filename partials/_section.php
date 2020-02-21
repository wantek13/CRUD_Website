<!----------------Sections--------------------------------->
<?php if(isset($_SESSION['username'])): ?>
	<p class="align-self-center mx-auto">
		<a class="btn btn-success" href="create.php">Create Festival/Event</a>
</p>
<?php endif; ?>

<div id="anchor1" class="row">
	<?php while($data = $resultat->fetch()): ?>
		<div class="col-lg-3">
		<div class="card">
			<a href="view.php?id=<?php echo $data['id'] ?>">
				<img width="100%" height="100%" class="card-img-top" src="<?php echo $data['img']; ?>" alt="Card image cap">
			</a>
			<div class="card-body">
				<h5 class="card-title"><?php echo $data['nom']; ?></h5>

				<?php if(isset($_SESSION['username'])): ?>
					<div class="row">
						<a class="btn btn-outline-info btn-lg btn-block" href="view.php?id=<?php echo $data['id'] ?>">Voir détails</a>
						<a class="btn btn-outline-secondary btn-lg btn-block" href="update.php?id=<?php echo $data['id'] ?>">Modifier</a>
						<a class="btn btn-outline-danger btn-lg btn-block" href="delete.php?id=<?php echo $data['id'] ?>">Supprimer</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
		</div>
		
	<?php
		endwhile;
		$resultat->closeCursor();
	?>
</div>
<!---------------FinSection--------------------------------->