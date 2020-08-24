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
