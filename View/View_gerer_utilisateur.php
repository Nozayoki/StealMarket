<!doctype>

<html>

    <head>

    </head>

    <body>
    <?php
           include ("../Model/Modele_gerer_utilisateur.php")
        ?>
        
        <table border ="1">
	        <thead>
		        <tr>
			        <th>id</th>
			        <th>nom</th>
			        <th>prenom</th>
                    <th>fonction</th>
                    <th>mot de passe</th>
                    <th>adresse mail</th>
                    <th>adresse</th>
                    <th>code postal</th>
                    <th>ville</th>
                    <th>pays</th>
                    <th>complément d'adresse</th>
                    <th>téléphone</th>
                    <th>portefeuille</th>
		        </tr>
	        </thead>
	        <tbody>
		        <tr>
			        <td><?php echo $row['ID']; ?></td>
			        <td><?php echo $row['nom']; ?></td>
			        <td><?php echo $row['prenom']; ?></td>
                    <td><?php echo $row['fonction']; ?></td>
                    <td><?php echo $row['mdp']; ?></td>
                    <td><?php echo $row['adresse_mail']; ?></td>
                    <td><?php echo $row['adresse']; ?></td>
                    <td><?php echo $row['code_postal']; ?></td>
                    <td><?php echo $row['ville']; ?></td>
                    <td><?php echo $row['pays']; ?></td>
                    <td><?php echo $row['complement']; ?></td>
                    <td><?php echo $row['telephone']; ?></td>
                    <td><?php echo $row['portefeuille']; ?></td>
                </tr>
	        </tbody>
	    </table>
        
        pour bannir le compte cliquer ici:<br>
        <form method="POST" action="View_gerer_utilisateur.php">
            <input type="hidden" name="dossier" value="<?php echo $num_dossier; ?>" >
            <input type="submit" value="bannir" name="ban">
        </form>
    
        Pour débannir ce compte cliquer ici:<br>
        <form method="POST" action="View_gerer_utilisateur.php">
            <input type="hidden" name="dossier" value="<?php echo $num_dossier; ?>" >
            <input type="submit" value="debannir" name="deban"> 
        </form> 
        <form method="POST" action="View_modif_utilisateur.php">
            <input type="hidden" name="dossier" value="<?php echo $num_dossier; ?>" >
            <input type="submit" value="modifier" name="modif"> 
        </form> 
        <form method="POST" action="View_gerer_utilisateur.php">
            <input type="hidden" name="dossier" value="<?php echo $num_dossier; ?>" >
            <input type="text" name="ajout_argent">
            <input type="submit" value="ajouter l'argent" name="ajouter"> 
        </form> 
        <form method="POST" action="View_gerer_utilisateur.php">
            <input type="hidden" name="dossier" value="<?php echo $num_dossier; ?>" >
            <input type="text" name="retirer_argent">
            <input type="submit" value="retirer l'argent" name="retirer"> 
        </form> 
        
    </body>

</html>