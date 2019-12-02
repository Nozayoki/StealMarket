<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8", "root", ""); 

if(isset($_POST['articles_titre'], $_POST['articles_prix'])) {
    if(!empty($_POST['articles_titre']) && !empty($_POST['articles_prix'])) {
        $articles_titre = htmlspecialchars($_POST['articles_titre']);
        $articles_prix = htmlspecialchars($_POST['articles_prix']);

        $insertion = $bdd->prepare('INSERT INTO articles(articles, prix)
            VALUES (?,?)');
        $insertion->execute(array($articles_titre, $articles_prix));//*/
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
        <title>Collection Femme</title>
    </head>  
    <body>
        <form>
            <input type="button" value="Indumentis">
    </form>
        <form>
          <input type="button" value="Collection Homme">
        </form>
        <form>
            <input type="button" value="Collection Femme">
    </form>
        <form>
            <input type="button" value="Accessoire">
    </form>
        <form>
            <input type="button" value="En savoir plus">
    </form>
        <div id="recherche">
            <label for="site-search">Search the site :</label>
            <input type="recherche" id="site-search" name="recherche">
        </div>
    <h1>Femme</h1>    
        <form method="POST">
            <input type="text" name="articles_titre" placeholder="articles" /><br/>
            <textarea name="articles_prix" placeholder="prix"></textarea><br />
            <input type="submit" value="Envoyer l'article" />
        </form>
        <form action="Control_.php" method="post">
            <input type="submit" value="Supprimer l'article" />
        </form>    
        <br/>
        <?php if(isset($message)) {echo $message; }
        ?>
                
    </body>
</html>