<?php
include ("../Model/Modele_article.php") 
?>
<!Doctype html>

<html>
    <head>
        <title>Ajout Article</title>
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
            <input type="text" name="articles_url" placeholder="URL" /><br/>
            <input type="file" name="miniature" /></br>
            <?php
            echo "<form method='POST' enctype='multipart/form-data'>
    <select name='articles_remplacement'>
    <option value='yope' selected>Article a modifier</option>";
    for ($i=0;$i<count($donnees);$i++){
               echo " <option value=
    '".$donnees[$i][1]."'>
    ".$donnees[$i][1]."</option>";
            
    }?>     <br>
            <input type="submit" name="ajouter"  value="Envoyer l'article" />
            <input type="submit" name="modifier" value="Modifier l'article" />
            <input type="submit" name="ajouter_ali_express" value="Ajouter l'article" />
        </form>
        
        <br/>
        <form method="POST">
        veuillez entrer le nom de l'article à supprimer : <br>
        <input type="text" name="articles_titre_suppr"/><br/>
        <input type="submit" value="supprimer l'article" />
        </form>
        <?php if(isset($message)) {echo $message; }
        ?>
                
    </body>
</html>