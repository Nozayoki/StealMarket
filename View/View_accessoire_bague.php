<?php
include ("../Model/Modele_article_bague.php")
?>
<?php
include("../View/View_accueil_stealmarket2.php")
?>

        <?php
        include("../Control/Control_connexion.php")
        ?>
        <div class="container-fluid" style="margin-left:10%;">
            <div class="container">
                <div class="row">
                    <article class="col-md-4">
                    <p>
                    <div class="titre" style="margin-left:70%;">            
                    <h1>Bague</h1>
                    </div>
                    </p>
                    </article>
                </div>
            </div>
            <?php while($a = $articles->fetch()) { ?>
                <div style="width:400px; float:left;">
                    <a href="View_article.php?ID=<?= $a['ID'] ?>" style="float:left;"><?= $a['articles'] ?></a><br>
                    <img src="miniatures/<?= $a['ID'] ?>.jpg" width="100" />
                </div>
            <?php } ?>
        </div>

    </body>
</html>>
</html>