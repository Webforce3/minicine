<?php require_once 'partials/header.php' ?>

		<h1>Contact</h1>

		<form class="form-horizontal" action="" method="POST">
			<div class="form-group">
				<label for="lastname" class="col-sm-2 control-label">Nom</label>
				<div class="col-sm-3">
					<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Votre nom">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">Prénom</label>
				<div class="col-sm-3">
					<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom">
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-5">
					<input type="email" id="email" name="email" class="form-control" placeholder="Votre adresse email">
				</div>
			</div>
			<div class="form-group">
				<label for="message" class="col-sm-2 control-label">Message</label>
				<div class="col-sm-5">
					<textarea id="message" name="message" class="form-control" placeholder="Votre message"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label>
							<input type="checkbox" id="newsletter" name="newsletter"> S'abonner à la newsletter
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Envoyer</button>
				</div>
			</div>
		</form>

<?php require_once 'partials/footer.php' ?>