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
   </p>
   <p><img src="miniatures/<?= $id ?>.jpg" width="400" /><p>
</body>
</html>