<!doctype html utf8>

<html>
    <head>

    </head>

    <body>
    <h1>CONNEXION</h1>
        <?php
        if(!isset($_GET['adresse_mail']) && !isset($_GET['mdp'])){
            echo' <form method="GET" action="../View/View_connexion.php">
            <input type="text" name="adresse_mail" placeholder="Adresse email"><br>
            <input type="password" name="mdp" placeholder="Mot de passe"><br>
            <input type="submit" value="Connexion"><br>
            </form>';
        }
        else {
            include ("../Model/Modele_connexion.php")
            ?>
            <?php
        }
    
        ?>

        <a href="../index.php">Retour accueil</a><br>
    

    </body> 
</html>    