<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8", "root", "");
if(isset($_GET['ID']) AND !empty($_GET['ID'])) {
   $get_id = htmlspecialchars($_GET['ID']);
   $articles = $bdd->prepare('SELECT * FROM articles WHERE ID = ?');
   $articles->execute(array($get_id));
   if($articles->rowCount() == 1) {
      $articles = $articles->fetch();
      $titre = $articles['ID'];
      $id = $articles['ID'];
      $contenu = $articles['articles'];
   } else {
      die('Cet article n\'existe pas !');
   }
} else {
   die('Erreur');
}
?>