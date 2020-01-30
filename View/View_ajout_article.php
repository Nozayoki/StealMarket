<?php
include ("../Model/Modele_article.php") 
?>
<?php
include ("../View/View_accueil_stealmarket.php")
?>
<div class='container-fluid'>
    <div class='container'>
<div class='center'>
<div class='col-lg-6'>
        <h1>Ajout d'Article</h1>  </div><div class='col-lg-6'>
        Sélectionnez la catégorie<form method="POST" enctype="multipart/form-data">
            <select name="articles_categorie">
                <option value="Homme" selected>Homme</option>
                <option value="Femme">Femme</option>
                <option value="Bague">Bague</option>
                <option value="Collier">Collier</option>
                <option value="Montre">Montre</option>
                <option value="Boucle">Boucle</option>
            <select></br>
</div>
<div class=col-lg-4>

            <textarea name="articles_titre" placeholder="nom de l'article"></textarea><br />
            <input type="text" name="articles_prix" placeholder="prix" /><br/>
            <input type="text" name="articles_stock" placeholder="quantité" /><br/>
            <input type="text" name="articles_url" placeholder="URL" /><br/>
            <input type="file" name="miniature" /></br>
            <?php
            echo "<form method='POST' enctype='multipart/form-data'>
    <select name='articles_remplacement'>
    <option value='yope' selected>Article a modifier</option><br>";
    for ($i=0;$i<count($donnees);$i++){
               echo " <option value=
    '".$donnees[$i][1]."'>
    ".$donnees[$i][1]."</option>";
            
    }?>     <br>
            <input type="submit" name="ajouter"  value="Envoyer l'article" /><br>
            <input type="submit" name="modifier" value="Modifier l'article" /><br>
            <input type="submit" name="ajouter_ali_express" value="Ajouter l'article" /><br>
        </form>
        
        <br/>
        <form method="POST">
        veuillez entrer le nom de l'article à supprimer : <br>
        <input type="text" name="articles_titre_suppr"/><br/>
        <input type="submit" value="supprimer l'article" />
        </form>
        <?php if(isset($message)) {echo $message; }
        ?>
        </div>
</div>
</div>
</div>
        
    </body>
</html>