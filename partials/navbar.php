	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Minicine</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">

					<?php
					foreach ($pages as $page_url => $page_name) {

					/*$nav_active_class = '';
					if ($current_page === $page_url) {
						$nav_active_class = 'active';
					}*/

					$nav_active_class = ($current_page === $page_url ? 'active' : '');

					?>
					<li class="<?= $nav_active_class ?>">
						<a href="<?= $page_url ?>">
							<?= $page_name ?>
						</a>
					</li>
					<?php } ?>


				</ul>
				<form class="navbar-form navbar-right" action="search.html" method="POST">
					<div class="input-group">
						<input name="search" type="text" class="form-control" placeholder="Recherche rapide...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</nav><!-- nav.navbar -->
