<html>
    
    <head>

    </head>

    <body>
        <?php 
        include ("../Model/Modele_modif_utilisateur_back_end.php")   
 ?>
 <form method="POST" action="View_modif_utilisateur.php">
 Coordonnées: <br>
 <input type="text" name="adresse_mail" value="<?php echo $row['adresse_mail']?>">
 <input type="text" name="mdp" value="<?php echo $row['mdp']?>"><br>
 Coordonnées de livraison:<br>
 <input type="text" name="prenom" value="<?php echo $row['prenom']?>" >
 <input type="text" name="nom" value="<?php echo $row['nom']?>"><br>
 <input type="text" name="adresse" value="<?php echo $row['adresse']?>"><br>
 <input type="text" name="complement" value="<?php echo $row['complement']?>"><br>
 <input type="text" name="code_postal" value="<?php echo $row['code_postal']?>">
 <input type="text" name="ville" value="<?php echo $row['ville']?>">
 <select name="pays" value="pays">
     <option value="">Pays</option>
     <option value="france">france</option>
     <option value="belgique">belgique</option>
     <option value="suisse">suisse</option>
 </select><br>
 <input type="text" name="telephone" value="<?php echo $row['telephone']?>"><br> 
 <input type="hidden" name="dossier" value="<?php echo $num_dossier; ?>" >
 valider la modification:<br>
            <input type="submit" value="valider" name='valider'>
        
 </form>
    </body>
</html>