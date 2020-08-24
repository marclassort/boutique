<?php
require_once('bdd.php');
require('search.php');


?>

<!doctype html>
<html lang="fr">

<head>
    <title>Au petit market</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de boutique en ligne pour LaPlateforme_ Marseille">
    <meta name="author" content="Marc Lassort">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="icones/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="header-nav">
        <nav class="container-fluid menu-navigation navbar navbar-expand-md fixed-top">
            <a class="navbar-brand" href="index.php">
                <img class="logo-image" src="images/shop.png"></a>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto ">
                    <li class="titre-logo nav-item active">
                        <a class="titre-logo nav-link" href="index.php"><img src="icones/logo.png" height="30"> <span class="sr-only">(current)</span></a>
                    </li>

                    <form class="barre-recherche form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Rechercher un article..." aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
                    </form>

                    <li class="nav-item">
                        <a class="nav-link" href="panier.php">
                            <img class="panier-icon" src="icones/cart.png"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info.php">
                            <img class="info-icon" src="icones/info.png">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <img class="login-icon" src="icones/user.png">
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>