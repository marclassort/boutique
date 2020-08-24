<?php
	
	$requete = $bdd->query('SELECT * FROM categorie'); 
	while ($donnees = $requete->fetch()) {
		echo '<span href="#">' . $donnees['nom'] . '</span>';
	}

?>

<div id="header">
	<p>Blabla</p>
	<p>Blabla</p>
	<p>Blabla</p>
	<p>Blabla</p>
	<p>Blabla</p>
</div>

<div id="navigation">
	<ul class="menu">
		<li class="tous-nos-rayons lead"><a href="tous-nos-rayons.php"></a></li>
		<li class="electromenager lead"><a href="electromenager.php">Électroménager</a></li>
		<li class="informatique lead"><a href="informatique.php">Informatique</a></li>
		<li class="vetements lead"><a href="vetements.php">Vêtements</a></li>
		<li class="maison lead"><a href="maison.php">Maison</a></li>
		<li class="livres lead"><a href="livres.php">Livres</a></li>
		<li class="jeuxvideo lead"><a href="jeuxvideo.php">Jeux vidéo</a></li>
		<li class="sport lead"><a href="sport.php">Sport</a></li>
		<li class="musique lead"><a href="musique.php">Musique</a></li>
		<li class="cuisine lead"><a href="cuisine.php">Cuisine</a></li>
	</ul>
	
</div>


<!-- Index / boutique / panier / inscription / connexion --> 