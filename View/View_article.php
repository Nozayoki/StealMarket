<?php
include ("../Control/Control_article.php")
?>
<!DOCTYPE html>
<html>
<head>
   <title>Accueil</title>
   <meta charset="utf-8">
</head>
<body>

   <h1><?= $titre ?></h1>
   <p>
   <h1><?= $contenu ?></h1>
   <form method='GET'>
   <select name='nombre_article'>
    <option value='1' selected>1</option>
    <option value='2' selected>2</option>
    <option value='3' selected>3</option>
    <?php $azer=$_GET["ID"]; echo "<input type='hidden' name='ID' value='$azer'"?>>
        <input type="submit" name="Panier" value="Ajouter Au Panier">
        </form>
   </p>
   <p><img src="miniatures/<?= $id ?>.jpg" width="400" /><p>
   <form action='View_homme.php'>
   <input type='hidden' name='liste' value='on'>
   <input type='submit' value='Retour'>
</body>
</html>