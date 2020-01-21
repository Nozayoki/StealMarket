<?php
   $titre = $_GET['ID'];
   $id=$_GET['ID'];
 
 include_once("../Model/Modele_article.php")
 ?>
 <?php
 if(isset($_GET['ID']) AND !empty($_GET['ID'] AND !isset($_POST["Panier"]))) {
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
}else if (isset($_POST["Panier"])){} 
else {
   die('Erreur');
}
?>