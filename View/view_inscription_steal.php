<!doctype html utf8>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../Bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="../Css/style.css" type="text/css" />

    </head>

    <body>
        <div class="center">
        <h1>INDUMENTIS</h1>
        <?php
        include("../Control/Control_inscription.php")
        ?>
        
        <form method="POST" action="../View/view_inscription_steal.php">
                Coordonnées: <br>
                <input type="text" name="adresse_mail" placeholder="Adresse email">
                <input type="text" name="mdp" placeholder="Mot de passe"><br>
                Coordonnées de livraison:<br>
                <input type="text" name="prenom" placeholder="Prénom">
                <input type="text" name="nom" placeholder="Nom"><br>
                <input type="text" name="adresse" placeholder="Adresse"><br>
                <input type="text" name="complement" placeholder="Complément d\'adresse"><br>
                <input type="text" name="code_postal" placeholder="Code postal">
                <input type="text" name="ville" placeholder="Ville">
                <select name="pays" value="pays">
                    <option value="">Pays</option>
                    <option value="france">france</option>
                    <option value="belgique">belgique</option>
                    <option value="suisse">suisse</option>
                </select><br>
                <input type="text" name="telephone" placeholder="Numéro de téléphone"><br> 
                <input type="submit" value="Création de compte"><br>
                </form>

        <a href="../index.php">Retour accueil</a> <br>  
        <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div> 
    </body> 
</html>
   