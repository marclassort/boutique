<?php

$erreur = null;

//vérifier l'authentification de l'utilisateur
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
	if ($_POST['pseudo'] == 'admin' && $_POST['motdepasse'] == 'laplateforme') {
		session_start();
		$_SESSION['connected'] = 1;
		header('Location: admin.php');
		exit();
	}
}

require_once('connect.php');

?>

<?php require 'header.php'; ?>

<link rel="stylesheet" href="style2.css">

<h1>Login</h1>

<br><br>

<form action="" method="POST">
	<div class="form-group">
		<label for="">Pseudo</label>
		<input type="text" name="pseudo" class="form-control">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email" class="form-control">
	</div>

	<div class="form-group">
		<label for="">Mot de passe</label>
		<input type="password" name="motdepasse" class="form-control">
	</div>

	<div class="form-group">
		<label for="">Confirmez votre mot de passe</label>
		<input type="password" name="motdepasse-confirmed" class="form-control">
	</div>

	<button type="submit" class="btn btn-primary">Se connecter</button>
	<br>
	<br>
	<br>
	<br>
</form>

<?php

if (!empty($_POST)) {

	$errors = array();


	if (empty($_POST['pseudo'])) {
		$errors['pseudo'] = "Vous n'avez pas entré de login.";
		echo '<h1>' . $errors['pseudo'] . '</h1><br>';
	}

	if (empty($_POST['email'])) {
		$errors['email'] = "Vous n'avez pas entré d'email.";
		echo "<h1>" . $errors['email'] . '</h1><br>';
	}

	if (empty($_POST['motdepasse']) || $_POST['motdepasse'] != $_POST['motdepasse-confirmed']) {
		$errors['motdepasse'] = "Vous n'avez pas entré de mot de passe ou vous vous êtes trompé. Veuillez recommencer ou vous inscrire.";
		echo '<h1>' . $errors['motdepasse'] . '</h1><br><br>';
	}

	if (empty($errors)) {

		require_once('bdd.php');
		session_start();

		$pseudo = $_POST['pseudo'];
		$mail = $_POST['email'];
		$mdp = $_POST['motdepasse'];

		$sql = 'SELECT * FROM client SET pseudo = $pseudo, email = $mail, motdepasse = $mdp';
		$req = $bdd->prepare($sql);
		$req->execute();
		
		var_dump($resultat);

		if (!$req) {
			echo '<h1> Vous vous êtes trompé d\'identifiant ou de mot de passe. </h1><br><br>';
		} else {
			session_start();
			$_SESSION['connected'] = 1;
			echo 'Vous êtes connecté.';
			header('Location: panier.php');
			exit();
			
		}
	}
}

?>

<p class="nouveau-user">Nouveau chez Au petit market ?</p>
<hr>
<br>
<div class="registercenter"><a href="register.php">
		<button type="submit" class="btn btn-primary">S'inscrire</button></a></div>
<br>
<br>
<br>

<?php require 'footer.php'; ?>

</body>