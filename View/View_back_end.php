<?php
/*if (!isset($_COOKIE["Admin"])){
    header("location:../index.php");
}*/
?>
<!doctype>

<html>

    <head>
    <link rel="stylesheet" href="../Bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../Css/styles.css" type="text/css" />     
    <LINK rel="stylesheet" type="text/css" href="default.css">
    </head>

    <body>
        <?php
            $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","",array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
              ));
            $reponse = $bdd->query('SELECT * FROM utilisateurs');
        ?>
        
        <h1>BIENVENUE SUR L'INTERFACE ADMIN D'INDUMENTIS</h1><br>
        
        <h2>Liste des utilisateurs:</h2> <br>
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
                    <th>accéder au dossier</th>
		        </tr>
	        </thead>
	        <tbody>
		        <?php
                    while($donnees =$reponse->fetch()){
                ?>
                <tr>
                    <form method="POST" action="View_gerer_utilisateur.php">
                        <td><?php echo $donnees['ID']; ?></td>
			            <td><?php echo $donnees['nom']; ?></td>
			            <td><?php echo $donnees['prenom']; ?></td>
                        <td><?php echo $donnees['fonction']; ?></td>
                        <td><?php echo $donnees['mdp']; ?></td>
                        <td><?php echo $donnees['adresse_mail']; ?></td>
                        <td><?php echo $donnees['adresse']; ?></td>
                        <td><?php echo $donnees['code_postal']; ?></td>
                        <td><?php echo $donnees['ville']; ?></td>
                        <td><?php echo $donnees['pays']; ?></td>
                        <td><?php echo $donnees['complement']; ?></td>
                        <td><?php echo $donnees['telephone']; ?></td>
                        <td><?php echo $donnees['portefeuille']; ?></td>
                        <input type="hidden" name="dossier" value="<?php echo  $donnees['ID'];?>">
                        <td><input type="submit" value="accéder" name='dossiers'></td>
                    </form> 
                </tr>
                <?php }?>
            </tbody>
        </table> <br>
        <?php $reponse = $bdd->query('SELECT * FROM articles'); ?>
        
        <h2>Liste des articles d'Indumentis:</h2> <br>
        <table border ="1">
	        <thead>
		        <tr>
			        <th>id</th>
			        <th>articles</th>
			        <th>prix</th>
                    <th>stock</th>
                    <th>accéder au dossier</th>
		        </tr>
	        </thead>
	        <tbody>
		        <?php
                    while($donnees =$reponse->fetch()){
                ?>
                <tr>
                    <form method="POST" action="View_ajout_article.php">
                        <td><?php echo $donnees['ID']; ?></td>
			            <td><?php echo $donnees['articles']; ?></td>
			            <td><?php echo $donnees['prix']; ?></td>
                        <td><?php echo $donnees['stock']; ?></td>
                        <td><input type="submit" value="<?php echo $donnees['ID']?>" name='article'></td>
                    </form> 
                </tr>
                <?php }?>
            </tbody>
        </table>
        <h2>Ajout article :<h2>
        </br>
        <form method="POST" action="View_ajout_article.php">
        <input type="submit" class="btn btn-primary" value="Ajouter Article">
        </form>

    </body>

</html>
     