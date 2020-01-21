<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8", "root", ""); 
$reponse=$bdd->query("SELECT * FROM articles ;");
$donnees = $reponse->fetchall();
if (isset($_GET["Panier"]) AND isset($_COOKIE["ID_connexion"])){
$yu=$_GET["nombre_article"];
   $yu2=htmlspecialchars($_GET["ID"]);
   $yu3=$_COOKIE["ID_connexion"];
   $abv=$bdd->query("SELECT * FROM articles WHERE ID ='$yu2' ");
   $abv=$abv->fetch();
   $contenu=$abv[1];
   $total=0;
   //echo "$abv/";
   /*$abl=$bdd->query("SELECT ID FROM utilisateurs WHERE prenom ='$yu3' ");
   $abl=$abl->fetch();
   $abl=$abl[0];*/
   //echo "$abl/";
   $abn=$bdd->query("SELECT prix from articles WHERE ID='$yu2'");
   $abn=$abn->fetch();
   
   $abn=$abn[0];
   //echo "$abn/";
   $tot2=$abn*$yu;
   //echo "$tot/";
   $bae=$bdd->query("SELECT ID from commandes where ID_utilisateurs='$yu3'");
   $bae=$bae->fetch();
   $bae=$bae[0];
   //echo "*$bae";
   if ($bae==""){//echo "yo";
   $bdd->query("INSERT into  commandes (ID_utilisateurs) VALUES('$yu3')");}
   else {
      $total=$bdd->query("SELECT total from commandes where ID_utilisateurs='$yu3'");
      $total=$total->fetch();
      $total=$total[0];
      $tot=$total+$tot2;
   }
   //else {$trouva=true;}
   $abr=$bdd->query("SELECT ID from commandes WHERE ID_utilisateurs='$yu3'");
   $abr=$abr->fetch();
   $abr=$abr[0];
   $tot=$total+$tot2;
   $bdd->query("INSERT into  ligne_commandes (ID_commandes,ligne_comandes,ID_articles) VALUES('$abr','$tot2','$yu2')");
   $bdd->query("UPDATE commandes set total='$tot' where ID_utilisateurs='$yu3'");}
   else {
if(isset($_GET['articles_titre_suppr'])){
    $articles_titre_suppr = $_GET['articles_titre_suppr'];
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
        $insertion->execute(array($articles_titre,$articles_categorie, $articles_prix, $articles_stock));//*/
        /*$insertion = $bdd->query("INSERT INTO articles(articles, prix)
            VALUES ($articles_titre, $articles_prix)");*/
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