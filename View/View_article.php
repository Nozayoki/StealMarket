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
   <form method='GET'>
   </p>
   <p><img src="miniatures/<?= $id ?>.jpg" width="400" /><p>
   <select name='nombre_article'>
    <option value='1' selected>1</option>
    <option value='2' selected>2</option>
    <option value='3' selected>3</option>
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