<?php
include ("../Model/Modele_article_bague.php")
?>
<?php
include("../View/View_accueil_stealmarket.php")
?>

        <?php
        include("../Control/Control_connexion.php")
        ?>
        <h1>Bague</h1>
        <form method='GET' action="../Model/Modele_ajouter_panier.php">
        <input type="submit" value="Ajouter Au Panier">
        
        <ul>
            <?php while($a = $articles->fetch()) { ?>

            <li>
                <img src="miniatures/<?= $a['ID'] ?>.jpg" width="100" /><br />
                <a href="View_article.php?ID=<?= $a['ID'] ?>"><?= $a['articles'] ?></a></li>
            <?php } ?>
        <ul>

    </body>
</html>