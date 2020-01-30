<?php
include ("../Model/Modele_accessoire.php")
?>
<?php
include("../View/View_accueil_stealmarket2.php")
?>
        <div class="container-fluid" style="margin-left:10%;">
            <div class="container">
                <div class="row">
                    <article class="col-md-6">
                    <p>
                    <div class="titre" style="margin-left:60%;">            
                    <h1>Accessoire</h1>
                    </div>
                    </p>
                    </article>
                </div>
            </div>
            <?php $zae='';$zaa=1; while($a = $articles->fetch()) {
                ?>
                <div style="width:300px; float:left;">
                <?php
                if ($zae!=$a["categorie"]){ $zaa++;echo "<h2>".$a['categorie']."</h2>";}  
                $zae=$a["categorie"];
                echo "<h2></h2>";
                
                echo $a['articles'] ?><br>
                    <a href="View_article.php?ID=<?= $a['ID'] ?>" style="float:left;">
                    <img src="miniatures/<?= $a['ID'] ?>.jpg" width="100" /></a>
                    
                </div>
            <?php } ?>
        </div>

    </body>
</html>