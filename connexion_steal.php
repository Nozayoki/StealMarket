<!doctype html utf8>

<html>
    <head>

    </head>

    <body>
    <h1>CONNEXION</h1>
        <?php
        if(!isset($_GET['adresse_mail']) && !isset($_GET['mdp'])){
            echo' <form method="GET" action="acceuil_steal.php">
            <input type="text" name="adresse_mail" placeholder="Adresse email"><br>
            <input type="password" name="mdp" placeholder="Mot de passe"><br>
            <input type="submit" value="Connexion"><br>
            </form>';
        }
    
        ?>
    
    </body> 
</html>    