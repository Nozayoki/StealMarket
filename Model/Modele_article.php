<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8", "root", ""); 
$reponse=$bdd->query("SELECT * FROM articles ;");
$donnees = $reponse->fetchall();
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
}
?>