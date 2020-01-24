<!doctype html utf8>

<html>
    <head>

    </head>

    <body>
        <h1>INDUMENTIS</h2>
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

        <a href="../View/View_accueil_stealmarket.php">Retour accueil</a> <br>   
    </body> 
</html>
   