<!doctype>

<html>

    <head>

    </head>

    <body>
        <?php
            $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
            if (isset($_GET['ban'])){
                $num_dossier = $_GET['dossier'];
                $bdd->query('UPDATE utilisateurs SET fonction = "bannie" WHERE ID = '.$num_dossier.''); 
                echo("Le compte à bien été bannie cliquer sur le lien ci-dessous pour revenir à la liste des dossiers <br>
                <a href='back_end_stealmarket.php'>Retour accueil</a>");  
            } else if (isset($_GET['deban'])) {
                $num_dossier = $_GET['dossier'];
                $bdd->query('UPDATE utilisateurs SET fonction = "utilisateur" WHERE ID = '.$num_dossier.''); 
                echo("Le compte à bien été débannie cliquer sur le lien ci-dessous pour revenir à la liste des dossiers <br>
                <a href='back_end_stealmarket.php'>Retour accueil</a>"); 
            } else {
                $num_dossier = $_GET['dossier'];
                $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE ID = '.$num_dossier.''); 
                $row =$reponse->fetch(); 
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
                </tr>
	        </tbody>
	    </table>
        
        pour bannir le compte cliquer ici:<br>
        <form method="GET" action="gerer_utilisateur_stealmarket.php">
            <input type="hidden" name="dossier" value="<?php echo $num_dossier; ?>" ></input>
            <input type="submit" value="bannir" name='ban'>
        </form>
    
        Pour débannir ce compte cliquer ici:<br>
        <form method="GET" action="gerer_utilisateur_stealmarket.php">
            <input type="hidden" name="dossier" value="<?php echo $num_dossier; ?>" ></input>
            <input type="submit" value="debannir" name='deban'> 
        </form> 
        <form method="GET" action="modif_utilisateur_stealmarket.php">
            <input type="hidden" name="dossier" value="<?php echo $num_dossier; ?>" ></input>
            <input type="submit" value="modifier" name='modif'> 
        </form> 
    
        <?php }?>
    </body>

</html>