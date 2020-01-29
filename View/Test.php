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
                    <img src="miniatures/<?= $a['ID'] ?>.jpg" width="100" /></a>
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
    <div class="dropdown">
  <button class="btn btn-primary" class="dropbtn" >Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
  </div>
</div>

                </div>
            <?php } ?>
        </div>

    </body>
</html>