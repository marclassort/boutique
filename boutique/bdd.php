<?php

	$BDD_ADRESSE  = "mysql:host=localhost";
	$BDD_DBNAME   = "boutique";
	$BDD_LOGIN    = "root";
	$BDD_PASSWORD = "root";

	try {
	$bdd = new PDO("$BDD_ADRESSE;dbname=$BDD_DBNAME", $BDD_LOGIN, $BDD_PASSWORD);
	} catch(PDOException $e) {
        echo('Impossible de se connecter à la base de données.');
    }
?>