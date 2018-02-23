<?php require_once 'partials/header.php' ?>

		<h1>Recherche</h1>

		<hr>

		<form class="form-inline" action="" method="POST">
			<div class="form-group">
				<label for="title">Titre</label>
				<input type="text" id="title" name="title" class="form-control" placeholder="Star Wars" value="">
			</div>

			<div class="form-group">
				<label for="title">Genre</label>
				<select id="genre" name="genre" class="form-control">
					<option value="">...</option>
				</select>
			</div>

			<div class="form-group">
				<label for="title">Année</label>
				<select id="year" name="year" class="form-control">
					<option value="">...</option>
				</select>
			</div>

			<div class="form-group">
				<label for="title">Acteur</label>
				<input type="text" id="actor" name="actor" class="form-control" placeholder="Christopher Lloyd" value="">
			</div>

			<div class="form-group">
				<label for="title">Réalisateur</label>
				<input type="text" id="director" name="director" class="form-control" placeholder="Robert Zemeckis" value="">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Rechercher
				</button>
			</div>
		</form>

<?php require_once 'partials/footer.php' ?>