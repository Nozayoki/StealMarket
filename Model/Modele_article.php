<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8", "root", ""); 
$reponse=$bdd->query("SELECT * FROM articles ;");
$donnees = $reponse->fetchall();
require("../Control/Control_function.php")
?>
<?php


if (isset($_POST["Panier"]) AND isset($_COOKIE["ID_connexion"])){
$yu=$_POST["nombre_article"];
   $ID_article=htmlspecialchars($_GET["ID"]);
   $ID_utilisateur=$_COOKIE["ID_connexion"];
   
   $contenu=select($bdd,'articles','articles',"ID='$ID_article'");
   $total=0;
   
   
   $abn=select($bdd,'prix','articles',"ID='$ID_article'");
  
   $tot2=$abn*$yu;
   
   $bae=select($bdd,'ID','commandes',"ID_utilisateurs='$ID_utilisateur'");
  
   if ($bae==""){
   $bdd->query("INSERT into  commandes (ID_utilisateurs) VALUES('$ID_utilisateur')");}
   else {
      
      $total=select($bdd,'total','commandes',"ID_utilisateurs='$ID_utilisateur'");
      $tot=$total+$tot2;
   }
   
   $abr=select($bdd,'ID','commandes',"ID_utilisateurs='$ID_utilisateur'");
   $tot=$total+$tot2;
   $bdd->query("INSERT into  ligne_commandes (ID_commandes,ligne_comandes,ID_articles) VALUES('$abr','$tot2','$ID_article')");
   $bdd->query("UPDATE commandes set total='$tot' where ID_utilisateurs='$ID_utilisateur'");}
   else {
if(isset($_POST['articles_titre_suppr'])){
    $articles_titre_suppr = $_POST['articles_titre_suppr'];
    $suppression = $bdd->query("DELETE FROM articles WHERE articles = '$articles_titre_suppr'");
} else if(isset($_POST['articles_titre'], $_POST['articles_prix'])) {
    if(!empty($_POST['articles_titre']) && !empty($_POST['articles_prix'])) {
        $articles_titre = htmlspecialchars($_POST['articles_titre']);
        $articles_categorie = htmlspecialchars($_POST['articles_categorie']);
        $articles_prix = htmlspecialchars($_POST['articles_prix']);
        $articles_stock = htmlspecialchars($_POST['articles_stock']);
        $articles_remplacement = $_POST['articles_remplacement'];
        if(isset($_POST['ajouter'])){
        $insertion = $bdd->prepare('INSERT INTO articles(articles, categorie, prix, stock)
            VALUES (?,?,?,?)');
        $insertion->execute(array($articles_titre,$articles_categorie, $articles_prix, $articles_stock));
        
        } elseif(isset($_POST['modifier'])) {
            $modification = $bdd -> query("UPDATE articles SET articles = '$articles_titre', stock = '$articles_stock', categorie ='$articles_categorie', prix='$articles_prix' WHERE articles = '$articles_remplacement' ");
        
    }
        $lastid = $bdd->lastInsertId();      
           
        if(isset($_FILES['miniature']) AND !empty($_FILES['miniature']['name'])) {
            if(exif_imagetype($_FILES['miniature']['tmp_name']) == 2) {
               $chemin = 'miniatures/'.$lastid.'.jpg';
               move_uploaded_file($_FILES['miniature']['tmp_name'], $chemin);
            } else {
               $message = 'Votre image doit être au format jpg';
            }    
        }    
        $message = 'Votre article a bien été ajouter';

    } else {
        $message = 'Veuillez remplir tous les champs';
    }
}}
?>