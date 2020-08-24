<?php include 'header.php'; ?>

<link rel="stylesheet" href="style2.css">

<style>
  body {
    margin: 0;
  }
</style>

<?php $art = count($articles) - 1; ?>

<main role="main" class="container">

  <div class="menu container">
    <div class="row">
      <li class="nav-item tous-nos-rayons lead"><a class="nav-link" href="tous-nos-rayons.php"></a></li>
      <li class="electromenager lead"><a href="electromenager.php">Électroménager</a></li>
      <li class="informatique lead"><a href="informatique.php">Informatique</a></li>
      <li class="vetements lead"><a href="vetements.php">Vêtements</a></li>
      <li class="maison lead"><a href="maison.php">Maison</a></li>
      <li class="livres lead"><a href="livres.php">Livres</a></li>
      <li class="jeuxvideo lead"><a href="jeuxvideo.php">Jeux vidéo</a></li>
      <li class="sport lead"><a href="sport.php">Sport</a></li>
      <li class="musique lead"><a href="musique.php">Musique</a></li>
      <li class="cuisine lead"><a href="cuisine.php">Cuisine</a></li>
    </div>
  </div>

  <!-- Section 2 : Carrousel -->
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/watch10.jpg" alt="Apple Watch" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Apple Watch Series 5</h3>
          <p>La plus belle des montres.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/watch12.jpg" alt="Apple Watch" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Apple Watch Series 5</h3>
          <p>Ou bien celle-ci ?</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/watch11.jpg" alt="Apple Watch" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Apple Watch Series 5</h3>
          <p>Ou bien celle-là ?</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <br><br><br>

  <!-- Section 3 : Derniers produits mis en ligne -->
  <div class="starter-template">
    <h1>Derniers produits mis en ligne</h1><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 products" style="background-color:azure;">
          <div class="nom-product"><p class="nom-paragraphe"><?= $articles[$art]['nom_produit'] ?></p></div>
          <div class="prix-product"><p class="prix-paragraphe"><?= number_format($articles[$art]['prix'], 2, ",", " "); ?>€</p></div>
          <div class="image-product"><img src="<?= $articles[$art]['image_art'] ?>" class="produits-phare" width="120" height="auto"></div>
        </div>
        <div class="col-lg-2 products" style="background-color:lavender;">
          <div class="nom-product"><p class="nom-paragraphe"><?= $articles[$art - 1]['nom_produit'] ?></p></div>
          <div class="prix-product"><p class="prix-paragraphe"><?= number_format($articles[$art - 1]['prix'], 2, ",", " "); ?>€</p></div>
          <div class="image-product"><img src="<?= $articles[$art - 1]['image_art'] ?>" class="produits-phare" width="120" height="auto"></div>
        </div>
        <div class="col-lg-2 products" style="background-color:azure;">
          <div class="nom-product"><p class="nom-paragraphe"><?= $articles[$art - 2]['nom_produit'] ?></p></div>
          <div class="prix-product"><p class="prix-paragraphe"><?= number_format($articles[$art - 2]['prix'], 2, ",", " "); ?>€</p></div>
          <div class="image-product"><img src="<?= $articles[$art - 2]['image_art'] ?>" class="produits-phare" width="120" height="auto"></div>
        </div>
        <div class="col-lg-2 products" style="background-color:lavender;">
          <div class="nom-product"><p class="nom-paragraphe"><?= $articles[$art - 3]['nom_produit'] ?></p></div>
          <div class="prix-product"><p class="prix-paragraphe"><?= number_format($articles[$art - 3]['prix'], 2, ",", " "); ?>€</p></div>
          <div class="image-product"><img src="<?= $articles[$art - 3]['image_art'] ?>" class="produits-phare" width="120" height="auto"></div>
        </div>
        <div class="col-lg-2 products" style="background-color:azure;">
          <div class="nom-product"><p class="nom-paragraphe"><?= $articles[$art - 4]['nom_produit'] ?></p></div>
          <div class="prix-product"><p class="prix-paragraphe"><?= number_format($articles[$art - 4]['prix'], 2, ",", " "); ?>€</p></div>
          <div class="image-product"><img src="<?= $articles[$art - 4]['image_art'] ?>" class="produits-phare" width="120" height="auto"></div>
        </div>
        <div class="col-lg-2 products" style="background-color:lavender;">
          <div class="nom-product"><p class="nom-paragraphe"><?= $articles[$art - 5]['nom_produit'] ?></p></div>
          <div class="prix-product"><p class="prix-paragraphe"><?= number_format($articles[$art - 5]['prix'], 2, ",", " "); ?>€</p></div>
          <div class="image-product"><img src="<?= $articles[$art - 5]['image_art'] ?>" class="produits-phare" width="120" height="auto"></div>
        </div>
      </div>
    </div>
  </div>


    <!-- Section 4 : Nos produits phares -->
    <div class="starter-template">
      <br><br><br><br>
      <h1>Produits phares</h1>
      <br>
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-3 products" style="background-color:lavender;">
            <div class="nom-product"><p class="nom-paragraphe"><?= $articles[0]['nom_produit'] ?></p></div>
            <div class="prix-product"><p class="prix-paragraphe"><?= number_format($articles[0]['prix'], 2, ",", " "); ?>€</p></div>
            <div class="image-product"><img src="<?= $articles[0]['image_art'] ?>" class="produits-phare" width="120" height="auto"></div>
          </div>
          <div class="col-lg-3 products" style="background-color:azure;">
            <div class="nom-product"><p class="nom-paragraphe"><?= $articles[1]['nom_produit'] ?></p></div>
            <div class="prix-product"><p class="prix-paragraphe"><?= number_format($articles[1]['prix'], 2, ",", " "); ?>€</p></div>
            <div class="image-product"><img src="<?= $articles[1]['image_art'] ?>" class="produits-phare" width="120" height="auto"></div>
          </div>
          <div class="col-lg-3 products" style="background-color:lavender;">
            <div class="nom-product"><p class="nom-paragraphe"><?= $articles[2]['nom_produit'] ?></p></div>
            <div class="prix-product"><p class="prix-paragraphe"><?= number_format($articles[2]['prix'], 2, ",", " "); ?>€</p></div>
            <div class="image-product"><img src="<?= $articles[2]['image_art'] ?>" class="produits-phare" width="120" height="auto"></div>
          </div>
          <div class="col-lg-3 products" style="background-color:azure;">
            <div class="nom-product"><p class="nom-paragraphe"><?= $articles[3]['nom_produit'] ?></p></div>
            <div class="prix-product"><p class="prix-paragraphe"><?= number_format($articles[3]['prix'], 2, ",", " "); ?>€</p></div>
            <div class="image-product"><img src="<?= $articles[3]['image_art'] ?>" class="produits-phare" width="120" height="auto"></div>
          </div>
        </div>

      </div>
    </div><br><br><br><br><br><br>

</main>

</body>

<?php include 'footer.php'; ?>

</body>

</html>