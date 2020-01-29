<?php
include ("../Model/Modele_article_homme.php")
?>
<?php
include("../View/View_accueil_stealmarket.php")
?>
        <div class="container-fluid" style="margin-left:10%;">
            <div class="container">
                <div class="row">
                    <article class="col-md-6">
                    <p>
                    <div class="titre" style="margin-left:60%;">            
                    <h1>Homme</h1>
                    </div>
                    </p>
                    </article>
                </div>
            </div>
            <?php while($a = $articles->fetch()) { ?>
                <div style="width:300px; float:left;">
                <?= $a['articles'] ?><br>
                    <a href="View_article.php?ID=<?= $a['ID'] ?>" style="float:left;">
                    <?php if($a['src']=='nosrc' ){$src="miniatures/". $a['ID'];}else {$src=$a['src'];}?>
                    <img src="<?php echo $src; ?>.jpg" width="100" /></a>
                    
                </div>
            <?php } ?>
        </div>

    </body>
</html>