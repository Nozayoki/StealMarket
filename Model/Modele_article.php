<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8", "root", ""); 
$reponse=$bdd->query("SELECT * FROM articles ;");
$donnees = $reponse->fetchall();
require("../Control/Control_function.php")    
?>
<?php

if (isset($_POST["ajouter_ali_express"])){
    require_once("../simplehtmldom_1_9_1/example/scraping/example_scraping_general.php")
    ?>
    <?php
    $ca=scraping_generic($_POST["articles_url"],"meta[property]");
    
    $poi=$ca[0];
    echo "//$poi";
    $prix_ali_express=$poi[0].$poi[1].$poi[2].$poi[3].$poi[4];
    $promo=intval($poi[6].$poi[7]);
    //echo "//".$_POST["articles_url"];
    $prix2=intval($prix_ali_express)*1.5;
    echo $prix2;
    if(!empty($_POST['articles_titre'])) {
        $articles_titre = htmlspecialchars($_POST['articles_titre']);
        $articles_categorie = htmlspecialchars($_POST['articles_categorie']);
        $articles_prix = htmlspecialchars($prix2);
        $articles_stock = htmlspecialchars($_POST['articles_stock']);
        $prix_ali_express2 = htmlspecialchars($prix_ali_express);
        $ur = htmlspecialchars($_POST['articles_url']);
        $cad=htmlspecialchars($ca[1]);
        echo strlen($ur);
        //$articles_remplacement = $_POST['articles_remplacement'];
        if(isset($_POST['ajouter_ali_express'])){
            
        $insertion = $bdd->query("INSERT INTO articles(articles, categorie, prix, stock,ur,prix_ali_express,promo_ali_express,src)
            VALUES ('$articles_titre','$articles_categorie', '$articles_prix', '$articles_stock','$ur','$prix_ali_express2','$promo','$cad');");
        //$insertion->execute(array($articles_titre,$articles_categorie, $articles_prix, $articles_stock,$ur,$prix_ali_express2));
}}}
if (isset($_POST["Panier"]) AND isset($_COOKIE["ID_connexion"])){
$yu=$_POST["nombre_article"];
   $ID_article=htmlspecialchars($_POST["ID"]);
   $ID_utilisateur=$_COOKIE["ID_connexion"];
   
   $contenu=select($bdd,'articles','articles',"ID='$ID_article'");
   $total=0;
   
   
   $abn=select($bdd,'prix','articles',"ID='$ID_article'");
   $prix=$abn;
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