Minicine
=============

#### * DESCRIPTION * ####

Mini portail d'information cinématographique avec :
- des fiches détaillées
- des séléctions/tops
- des suggestions de films aléatoires
- des actus
- une recherche rapide et une recherche avancée/multicritère
- un formulaire de contact
- et plus si affinités...

----------
#### * CONSEILS ET ASTUCES * ####

- ``Tous les templates html sont fournis``
- ``Penser à la balise container lors de la découpe``
- ``Penser à réduire les balises dans l'éditeur de texte pour visualiser rapidement les blocs (flèches dans la colonne de gauche sur chaque parent)``
- ``Au besoin commenter les fermetures de balise sur les gros blocs``
- *Think [DRY](https://fr.wikipedia.org/wiki/Ne_vous_r%C3%A9p%C3%A9tez_pas)*

----------
#### * CONSIGNES * ####

 1. Faire la découpe des templates HTML
> **CONSEIL** : Pour chaque page, commencer par renommer le .html en .php et déplacer le .html dans un sous répertoire ``html``. Placer les fragments de code html (header, footer, ...etc) dans un sous répertoire ``partials``

 2. Isoler la sidebar dans un partial "sidebar.php"

 3. Créer un fichier config.php dans le répertoire ``inc``.

 4. Dans le fichier ``inc/config.php``, créer un tableau ``$pages`` contenant la liste des pages du site avec : en clé le libellé du lien dans le menu, et en valeur le nom du fichier php cible.
> **ASTUCE** : Aligner les balises ``li`` du menu de navigation et utiliser le mode colonne pour créer le tableau ``$pages``

 5. Reconstituer le menu de navigation à partir d'une boucle foreach et du tableau ``$pages`` créé précedemment.

----------
#### *** POUR LE FUN :gift: *** ####

Des thèmes de couleur sont fournis dans le répertoire ``/css/themes/``.

Pour changer de thème il faut remplacer dans le header, la ligne suivante (~13) :
```
<link href="css/themes/default/bootstrap.min.css" rel="stylesheet">
```
Par la ligne suivante avec le repertoire du thème choisi :
```
<link href="css/themes/nom_du_theme/bootstrap.min.css" rel="stylesheet">
```

Pour changer de thème à l'aide d'une liste déroulante :

La partie PHP à inclure dans le ``header`` :
```
$themes = glob('css/themes/*');
$current_theme = !empty($_GET['theme']) ? basename($_GET['theme']) : 'default';
```

La ligne d'inclusion du thème css (~13) à remplacer dans le ``header`` :
```
<link href="css/themes/<?= $current_theme ?>/bootstrap.min.css" rel="stylesheet">
```

Le code HTML de la liste déroulante à placer directement après l'ouverture ou avant la fermeture de la balise ``body`` :
```
<form id="form-theme-select" method="GET">
	<div class="form-group">
		<select id="theme-select" name="theme" class="form-control" onchange="javascript:$('#form-theme-select').submit();">
			<option value="">Theme</option>
			<?php
			foreach($themes as $theme_path) {
				$theme = basename($theme_path);
				$selected = $theme == $current_theme ? ' selected="selected"' : '';
			?>
			<option value="<?= $theme ?>"<?= $selected ?>><?= $theme ?></option>
			<?php } ?>
		</select>
	</div>
</form>
```

Une fois le thème choisi il ne reste plus qu'à définir une valeur fixe à la variable ``$current_theme``, commenter/supprimer la liste déroulante et commenter/supprimer la variable ``$themes``.

----------

> " yIghoSDo' 'ej yIghoSDo'! "
