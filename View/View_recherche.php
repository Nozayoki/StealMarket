<?php
include ("../Model/Modele_recherche.php")
?>
<?php
include("../View/View_accueil_stealmarket.php")
?>
<meta charset="utf-8" />

<form method="POST">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
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