<?php
            include ("../Model/Modele_gerer_son_compte.php")
        ?>

<?php
include ("../View/View_accueil_stealmarket.php")
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
        Modifier son mot de passe:<br>
        <form method="GET" action="View_gerer_son_compte.php">
        <input type="text" name="mdp" placeholder="nouveau mot de passe"><br>
        <input type="text" name="nom" placeholder="nouveau nom"><br>
        <input type="text" name="prenom" placeholder="nouveau prenom"><br>
        <input type="text" name="telephone" placeholder="nouveau numéro de téléphone"><br>
        <input type="text" name="adresse" placeholder="nouvelle adresse"><br>
        <input type="text" name="ville" placeholder="nouvelle ville"><br>
        <input type="text" name="pays" placeholder="nouveau pays"><br>
        <input type="text" name="code_postal" placeholder="nouveau code postal"><br>
        <input type="text" name="complement" placeholder="nouveau complément d'adresse"><br>
        <input type="submit" value="valider" name="modif">
        </form>

        Supprimer son compte(ATTENTION cette action est définitive):<br>
        <form method="GET" action="View_gerer_son_compte.php">
        <input type="submit" value="supprimer" name="suppr">
        </form>
        
    </body>
</html>
