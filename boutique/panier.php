<?php require_once 'header.php'; 
require_once 'auth.php';
is_logged();
user_connected();
if (is_logged()): ?>
    <ul class="deco"><a href="logout.php">Se déconnecter</a></ul>
<?php endif ?>

<link rel="stylesheet" href="style2.css">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <main role=" main" class="inner cover text-center">
        <h1 class="cover-heading">Panier</h1><br><br>
        <p class="paragraphe">

            <?php

            if ($_SESSION['connected']) {
                echo '<h1>Vous êtes bien connecté.</h1><br><br>';
                require_once('auth.php');

                // Affiche tous les articles présents dans la BDD

                include('bdd.php');

                ?><h1>Tous nos articles :</h1><br><br><?php

                $sql = "SELECT id, nom_produit, prix FROM article";
                $result = $bdd->query($sql);

                if ($result->rowCount() > 0) {
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo '<p>' . $row["nom_produit"] . ' - ' . $row["prix"] . '€</p>';
                    }
                    echo "</table>";
                } else {
                    echo "0 résultat";
                }
            }
            ?>
        </p>
        <p class="paragraphe"><br><br>
            <a href="index.php" class="btn btn-lg btn-secondary">Revenir vers la page d'accueil</a>
        </p>
    </main>
</div>

<?php require_once 'footer.php'; ?>

</body>