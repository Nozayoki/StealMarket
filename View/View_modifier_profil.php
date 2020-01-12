<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modifier votre profil</title>
    </head>
    <body>      
        <div>Modification</div>
        <form method="post">
            <?php
                if (isset($er_nom)){
                ?>
                    <div><?= $er_nom ?></div>
                <?php   
                }
            ?>
            <input type="text" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }else{ echo $afficher_profil['nom'];}?>" required>   
            <?php
                if (isset($er_prenom)){
                ?>
                    <div><?= $er_prenom ?></div>
                <?php   
                }
            ?>
            <input type="text" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }else{ echo $afficher_profil['prenom'];}?>" required>   
            <?php
                if (isset($er_mail)){
                ?>
                    <div><?= $er_mail ?></div>
                <?php   
                }
            ?>
            <input type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }else{ echo $afficher_profil['mail'];}?>" required>
            <button type="submit" name="modification">Modifier</button>
        </form>
    </body>
</html>
