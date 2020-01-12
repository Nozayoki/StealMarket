<?php
include ("../Model/Modele_article_femme.php")
?>

<!Doctype html>

<html>
    <head>
        <title>Collection Femme</title>
    </head>  
    <body>
       
        <a href="../index.php">INDUMENTIS</a> 
        
        <a href="View_homme.php">Collection Homme</a> 
        
        <a href="View_femme.php">Collection Femme</a> 
        
        <a href="View_accessoire.html">Accessoire</a> 

        <a href="View_ajout_article.php">Ajout article</a>

        <a href="View_contact.html">En savoir plus</a>
        
        <form>
            <input type="button" value="En savoir plus">
        </form>
        <div id="recherche">
            <label for="site-search">Search the site :</label>
            <input type="recherche" id="site-search" name="recherche">
        </div>
        <h1>Femme</h1>    
        
        <ul>
            <?php while($a = $articles->fetch()) { ?>

            <li>
                <img src="miniatures/<?= $a['ID'] ?>.jpg" width="100" /><br />
                <a href="View_article.php?ID=<?= $a['ID'] ?>"><?= $a['articles'] ?></a></li>
            <?php } ?>
        <ul>
                
    </body>
</html>