<?php
include ("../Model/Modele_article_montre.php")
?>
<?php
include("../View/View_accueil_stealmarket.php")
?>
        <h1>Montre</h1>
        
        <ul>
            <?php while($a = $articles->fetch()) { ?>

            <li>
                <img src="miniatures/<?= $a['ID'] ?>.jpg" width="100" /><br />
                <a href="View_article.php?ID=<?= $a['ID'] ?>"><?= $a['articles'] ?></a></li>
            <?php } ?>
        <ul>

    </body>
</html>