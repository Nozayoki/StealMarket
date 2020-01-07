<?php
include ("../Model/Modele_article.php") 
?>
<!Doctype html>

<html>
    <head>
        <title>Ajout Article</title>
    </head>  
    <body>
       
        <a href="../View/View_accueil_stealmarket.php">INDUMENTIS</a> 
        
        <a href="View_homme.php">Collection Homme</a> 
        
        <a href="View_femme.php">Collection Femme</a> 
        
        <a href="View_accessoire.html">Accessoire</a> 

        <a href="View_ajout_article.php">Ajout article</a>
        <form>
            <input type="button" value="En savoir plus">
        </form>
        <div id="recherche">
            <label for="site-search">Search the site :</label>
            <input type="recherche" id="site-search" name="recherche">
        </div>
        <h1>Article</h1>    
        <form method="POST" enctype="multipart/form-data">
            <select name="articles_categorie">
                <option value="Homme" selected>Homme</option>
                <option value="Femme">Femme</option>
                <option value="Bague">Bague</option>
                <option value="Collier">Collier</option>
                <option value="Montre">Montre</option>
                <option value="Boucle">Boucle</option>
            <select></br>

            <textarea name="articles_titre" placeholder="nom de l'article"></textarea><br />
            <input type="text" name="articles_prix" placeholder="prix" /><br/>
            <input type="text" name="articles_stock" placeholder="quantité" /><br/>
            <input type="file" name="miniature" /></br>
            <input type="submit" value="Envoyer l'article" />
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