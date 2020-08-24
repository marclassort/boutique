 <?php require 'header.php'; ?>

 <link rel="stylesheet" href="style2.css">


 <br>
 <h1>Inscription</h1>
 <br>

 <form action="" method="POST">
 	<div class="form-group">
 		<label for="">Pseudo</label>
 		<input type="text" name="pseudo" class="form-control" required>
 	</div>

 	<div class="form-group">
 		<label for="">Email</label>
 		<input type="email" name="email" class="form-control" required>
 	</div>

 	<div class="form-group">
 		<label for="">Mot de passe</label>
 		<input type="password" name="motdepasse" class="form-control" required>
 	</div>

 	<div class="form-group">
 		<label for="">Confirmez votre mot de passe</label>
 		<input type="password" name="motdepasse-confirme" class="form-control" required>
 	</div>

 	<button type="submit" class="btn btn-primary">S'inscrire</button>
 	<br>
 	<br>
 	<br>
 </form>

 <?php

 if(!empty($_POST)) {

 	$errors = array(); 

 	if(empty($_POST['pseudo'])) {
 		$errors['pseudo'] = "Vous n'avez pas entré de login.";
 	}

 	if(empty($_POST['email'])) {
 		$errors['email'] = "Vous n'avez pas entré d'email.";
 	}

 	if(empty($_POST['motdepasse']) || $_POST['motdepasse'] != $_POST['motdepasse-confirme']) {
 		$errors['password'] = "Vous n'avez pas entré de mot de passe ou vous vous êtes trompé.";
 	}

 	if(empty($errors)) {
 		$req = $bdd->prepare("INSERT INTO client SET pseudo = ?, motdepasse = ?, email = ?");
 		$req->execute([$_POST['pseudo'], $_POST['motdepasse'], $_POST['email']]);

 		$_SESSION['connected'] = $user;
 		header('Location: panier.php');
 	}

 }

 ?>


 <?php require 'footer.php'; ?>

