<?php
include ("../Model/Modele_recherche.php")
?>
<?php
include("../View/View_accueil_stealmarket.php")
?>
<meta charset="utf-8" />
<div class="center">
<form method="POST" class="form-inline my-2 my-lg-0">
<form class="form-inline my-2 my-lg-0">
   <input class="form-control mr-sm-2" type="search" name="q" placeholder="Recherche article"/>
   <input type="submit" class="btn btn-secondary my-2 my-sm-0" value="Valider" />
</form>
<?php if($articles->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $articles->fetch()) { ?>
      <li><a href="View_article.php?ID=<?php $bg = $a['ID']; echo "$bg"; ?>"><?php echo $a['articles']?></li>
   <?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour: <?= $qa ?>...
<?php } ?>