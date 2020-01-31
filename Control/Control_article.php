<?php
   $titre = $_GET['ID'];
   $id=$_GET['ID'];
   
   if(!isset($_COOKIE["ID_connexion"])){$co=false;}else {$co=true;}
 
 include_once("../Model/Modele_article.php")
 ?>
 <?php
 if(isset($_GET['ID']) AND !empty($_GET['ID'])) {
   $get_id = htmlspecialchars($_GET['ID']);
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