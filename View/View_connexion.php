<<<<<<< HEAD
<?php
include ("View_accueil_stealmarket.php")
?>
=======
<!doctype html utf8>

<html>
    <head>
        <link rel="stylesheet" href="../Bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="../Css/style.css" type="text/css" />
    </head>

    <body>
>>>>>>> e29ffc0c3ca3e1a5db1ae4c13a52262d268988a8
    <h1>CONNEXION</h1>
        <?php
        if(!isset($_POST['adresse_mail']) && !isset($_POST['mdp'])){
            echo' <form method="POST" action="../View/View_connexion.php">
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