

<!Doctype html>

<html>
    <head>
    </head>  
    <body>
       
        <a href="../index.php">INDUMENTIS</a> 
        
        <a href="View_homme.php">Collection Homme</a> 
        
        <a href="View_femme.php">Collection Femme</a> 
        
        <a href="View_accessoire.html">Accessoire</a> 

        <a href="View_ajout_article.php">Ajout article</a>

        <a href="View_contact.html">En savoir plus</a>
        
        <form>
            <input type="button" value="En savoir plus">
        </form>
        <div id="recherche">
            <label for="site-search">Search the site :</label>
            <input type="recherche" id="site-search" name="recherche"><br>
        </div>
        <?php
            include ("../Model/Modele_gerer_son_compte.php")
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
        Modifier son mot de passe:<br>
        <form method="GET" action="View_gerer_son_compte.php">
        <input type="text" name="mdp" placeholder="nouveau mot de passe"><br>
        <input type="submit" value="valider" name="modif">
        </form>

        Supprimer son compte(ATTENTION cette action est définitive):<br>
        <form method="GET" action="View_gerer_son_compte.php">
        <input type="submit" value="valider" name="suppr">
        </form>
    </body>
</html>