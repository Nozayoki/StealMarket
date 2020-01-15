<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8", "root", "");
echo $_COOKIE["prenom_connexion"];
if (isset($_GET["Panier"]) AND isset($_COOKIE["prenom_connexion"])){
   $yu=$_GET["nombre_article"];
   $yu2=htmlspecialchars($_GET["ID"]);
   echo "/début$yu2/";
   $yu3=$_COOKIE["prenom_connexion"];
   $abv=$bdd->query("SELECT * FROM articles WHERE ID ='$yu2' ");
   $abv=$abv->fetch();
   $abv=$abv[0];
   echo "$abv/";
   $abl=$bdd->query("SELECT ID FROM utilisateurs WHERE prenom ='$yu3' ");
   $abl=$abl->fetch();
   $abl=$abl[0];
   echo "$abl/";
   $abn=$bdd->query("SELECT prix from articles WHERE ID='$yu2'");
   $abn=$abn->fetch();
   
   $abn=$abn[0];
   echo "$abn/";
   $tot=$abn*$yu;
   echo "$tot/";
   $bae=$bdd->query("SELECT ID from commandes where ID_utilisateurs='$abl'");
   $bae=$bae->fetch();
   $bae=$bae[0];
   echo "*$bae";
   if ($bae==""){echo "yo";
   $bdd->query("INSERT into  commandes (ID_utilisateurs) VALUES('$abl')");}
   else {
      $total=$bdd->query("SELECT total from commandes where ID_utilisateurs='$abl'");
      $total=$total->fetch();
      $total=$total[0];
      $tot+=$total;
   }
   //else {$trouva=true;}
   $abr=$bdd->query("SELECT ID from commandes WHERE ID_utilisateurs='$abl'");
   $abr=$abr->fetch();
   $abr=$abr[0];
   $bdd->query("INSERT into  ligne_commandes (ID_commandes,ligne_comandes,ID_articles) VALUES('$abr','$tot','$yu2')");
   $bdd->query("UPDATE commandes set total='$tot' where ID_utilisateurs='$abl'");}
else if(isset($_GET['ID']) AND !empty($_GET['ID'] AND !isset($_GET["Panier"]))) {
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