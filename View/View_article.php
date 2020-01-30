<?php
include ("../Control/Control_article.php")
?>
<?php
include("../View/View_accueil_stealmarket.php")
?>
<!DOCTYPE html>
<html>
<head>
   <div class="center">
   <title>Accueil</title>
   <meta charset="utf-8">
</head>
<body>
   <p>
   <h1><?= $contenu ?></h1>
   <form method='POST'>
   </p>
   <?php if($articles['src']=='nosrc' ){$src="miniatures/". $articles['ID'];}else {$src=$articles['src'];}?>
                  <p>  <img src="<?php echo $src; ?>.jpg" width="100" /></p>
   <select name='nombre_article'>
      <?php
      for ($lo=1;$lo<$articles['stock']+1;$lo++){
         echo "<option value='$lo' selected>$lo</option>";
      }
      ?>
    <?php $azer=$_GET["ID"]; echo "<input type='hidden' name='ID' value='$azer'"?>>
        <input type="submit" name="Panier" value="Ajouter Au Panier">
        </form>
   <form action='View_homme.php'>
   <input type='hidden' name='liste' value='on'>
   <h3><?php echo "$prix"; echo"€";?></h3></br>
   <input type='submit' value='Retour'>
   </form>
</body>
</html>