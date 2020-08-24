<?php
require_once('auth.php');
user_connected();
require_once("header.php");?>

<?php if (is_logged()): ?>
	<ul class="deco"><a href="logout.php">Se déconnecter</a></ul>
<?php endif ?>

<link rel="stylesheet" href="style2.css">

 <br>
 <h1>Cher administrateur, que souhaitez-vous faire ?</h1>
 <?php 
    print_r($_POST);
 ?>
 <br>

 <?php

    if(!empty($_POST)) {
        require('bdd.php');
        $req = $bdd->prepare("INSERT INTO article SET description_art = ?, image_art = ?, nom_produit = ?, prix = ?, stock = ?");
        $req->execute([$_POST['description_art'], $_POST['image_art'], $_POST['nom_produit'], $_POST['prix'], $_POST['stock']]);

    header('Location: admin.php');
        
}

?>

<?php
    require('bdd.php');

    // Recherche par article
    $reqadmin = "SELECT * FROM article";
    if (!empty($_GET['q'])) {
        $reqadmin .= " WHERE nom_produit LIKE \"%" . $_GET['q'] . "%\"";
    }

    $reqadmin .= " LIMIT 20";
    $articles = $bdd->query($reqadmin)->fetchAll();

    // // Supprimer un article
    // $articlesasuppr = "DELETE FROM article WHERE id = :" . $articles['id'];
    // $stmt = $bdd->prepare($articlesasuppr);

 ?>

 <form action="" method="POST">
 	<br>
 	<p class="nouvel-article">Ajouter un article</p>
 	<hr>
 	<br>

 	<div class="form-group">
 		<label for="">Nom du produit</label>
 		<input type="text" name="nom_produit" class="form-control" >
 	</div>

 	<div class="form-group">
 		<label for="">Prix</label>
 		<input type="number" name="prix" class="form-control" step="0.01" >
	 </div>
	 
	 <div class="form-group">
 		<label for="">Description</label>
 		<input type="text" name="description_art" class="form-control" >
	 </div>
	 
	 <div class="form-group">
 		<label for="">Lien URL de l'image</label>
 		<input type="text" name="image_art" class="form-control" >
	 </div>
	 
	 <div class="form-group">
 		<label for="">Stock</label>
 		<input type="number" name="stock" class="form-control" >
 	</div>

     <br>
     <input type="submit" value="Rajouter à la base de données" class="btn btn-primary">
     <br>
 	<br>
 	<br>
 	<br>
 </form>



 <form action="" method="POST">
 	<br>
 	<p class="nouvelle-categorie">Ajouter une catégorie</p>
 	<hr><br>

 	<div class="form-group">
 		<label for="">Nom</label>
 		<input type="text" name="nom" class="form-control" required>
     </div>
     
     <br>

 	<button type="submit" class="btn btn-primary">Rajouter à la base de données</button>
 	<br><br><br><br>
 </form>

 <?php

 if(!empty($_POST)) {

 		require_once 'bdd.php';
 		$req = $bdd->prepare("INSERT INTO categorie SET nom = ?");
 		$req->execute([$_POST['nom']]);

 		header('Location: admin.php');
 }

 ?>

<hr><hr><hr>

 <form action="">
 <p class="nouvelle-categorie">Rechercher les articles</p><hr><br>
    <div class="form-group">
        <input type="text" class="form-control" name="q" placeholder="Rechercher">
    </div><hr><hr>
    <button class="btn btn-primary">Rechercher</button>

    <hr><hr><hr><hr>
 </form>
 
 <table class="table table-striped" style="font-size: smaller;" "> 
     <thead>
         <tr>
             <th>ID</th>
             <th>Nom de l'article</th>
             <th>Prix</th>
             <th>Description </th>
             <th>Lien URL de l'image</th>
             <th>Stock</th>
             <th>Supprimer</th>
         </tr>
     </thead>
     <tbody>
         <?php foreach($articles as $article): ?>
         <tr>
             <td>#<?= $article['id'] ?></td>
             <td><?= $article['nom_produit'] ?></td>
             <td><?= number_format($article['prix'], 2, ",", " "); ?> €</td>
             <td><?= $article['description_art'] ?></td>
             <td><img src="<?= $article['image_art'] ?>" width="100" height="auto"></td>
             <td><?= $article['stock'] ?></td>
             <td><button>Supprimer</button></td>
         </tr>
         <?php endforeach ?>
     </tbody>
 </table>

 <!-- id nom_produit prix description_art image_art stock--> 


 <!-- Footer -->

 <?php include("footer.php"); ?>


</body>
</html>