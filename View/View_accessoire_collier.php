<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8", "root", ""); 
if(isset($_GET['articles_titre_suppr'])){
    $articles_titre_suppr = $_GET['articles_titre_suppr'];
    $suppression = $bdd->query("DELETE FROM articles WHERE articles = '$articles_titre_suppr'");
} else if(isset($_POST['articles_titre'], $_POST['articles_prix'])) {
    if(!empty($_POST['articles_titre']) && !empty($_POST['articles_prix'])) {
        $articles_titre = htmlspecialchars($_POST['articles_titre']);
        $articles_prix = htmlspecialchars($_POST['articles_prix']);
        $article_stock = htmlspecialchars($_POST['articles_stock']);

        $insertion = $bdd->prepare('INSERT INTO articles(articles, prix, stock)
            VALUES (?,?,?)');
        $insertion->execute(array($articles_titre, $articles_prix, $article_stock));//*/
        /*$insertion = $bdd->query("INSERT INTO articles(articles, prix)
            VALUES ($articles_titre, $articles_prix)");*/
        $message = 'Votre article a bien été ajouter';

    } else {
        $message = 'Veuillez remplir tous les champs';
    }
}
?>

<!Doctype html>

<html>
    <head>
        <title>Collier</title>
    </head>  
    <body>
       
        <a href="View_acceuil_stealmarket.php">INDUMENTIS</a> 
        
        <a href="View_homme.php">Collection Homme</a> 
        
        <a href="View_femme.php">Collection Femme</a> 
        
        <a href="View_accessoire.html">Accessoire</a> 
        
        <form>
            <input type="button" value="En savoir plus">
        </form>
        <div id="recherche">
            <label for="site-search">Search the site :</label>
            <input type="recherche" id="site-search" name="recherche">
        </div>
        <h1>Collier</h1>
        <form method="POST">
        <textarea name="articles_titre" placeholder="nom de l'article"></textarea><br />
            <input type="text" name="articles_prix" placeholder="prix" /><br/>
            <input type="text" name="articles_stock" placeholder="quantité" /><br/>
            <input type="submit" value="Envoyer l'article" />
        </form>
        <form action="Control_.php" method="post">
            <input type="submit" value="Supprimer l'article" />
        </form>    
        <br/>
        <form method="GET">
        veuillez entrer le nom de l'article à supprimer : <br>
        <input type="text" name="articles_titre_suppr"/><br/>
        <input type="submit" value="supprimer l'article" />
        </form>
        <?php if(isset($message)) {echo $message; }
        ?>
                
                
    </body>
</html>