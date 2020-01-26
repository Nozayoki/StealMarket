<?php
include ("../Model/Modele_article_homme.php")
?>
<?php
include("../View/View_accueil_stealmarket.php")
?>
        <div class="center">
        <h1>Homme</h1>    
            
        <ul>
            <?php while($a = $articles->fetch()) { ?>

            <li>
                 
                <h1><img src="miniatures/<?= $a['ID'] ?>.jpg" width="100" /></h1>
                <a href="View_article.php?ID=<?= $a['ID'] ?>"><?= $a['articles'] ?></a></li>
            <?php } ?>
        <ul>

    </body>
</html>