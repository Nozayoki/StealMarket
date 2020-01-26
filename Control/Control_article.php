<?php
   $titre = $_POST['ID'];
   $id=$_POST['ID'];
 
 include_once("../Model/Modele_article.php")
 ?>
 <?php
 if(isset($_POSt['ID']) AND !empty($_POST['ID'] AND !isset($_POST["Panier"]))) {
   $get_id = htmlspecialchars($_POST['ID']);
   $articles = $bdd->prepare('SELECT * FROM articles WHERE ID = ?');
   $articles->execute(array($get_id));
   if($articles->rowCount() == 1) {
      $articles = $articles->fetch();
      $titre = $articles['ID'];
      $id = $articles['ID'];
      $contenu = $articles['articles'];
      $prix = $articles['prix'];
   } else {
      die('Cet article n\'existe pas !');
   }
}else if (isset($_POST["Panier"])){} 
else {
   die('Erreur');
}
?>