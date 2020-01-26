<?php
            include ("../Model/Modele_gerer_son_compte.php")
        ?>

<!Doctype html>

<html>
    <head>
    <link rel="stylesheet" href="../Bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../Css/style.css" type="text/css" />
    </head>  
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="../index.php">INDUMENTIS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="View_homme.php">Collection Homme<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="View_femme.php">Collection Femme</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="View_accessoire.php">Accessoire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="View_contact.html">En savoir plus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="View_recherche.php">Recherche</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="View_inscription_steal.php">Inscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="View_panier.php">Panier</a>
      </li>
    </ul>
    </div>
</nav>      
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
        <form method="POST" action="View_gerer_son_compte.php">
        <input type="text" name="mdp" placeholder="nouveau mot de passe"><br>
        <input type="submit" value="valider" name="modif">
        </form>

        Supprimer son compte(ATTENTION cette action est définitive):<br>
        <form method="POST" action="View_gerer_son_compte.php">
        <input type="submit" value="supprimer" name="suppr">
        </form>
        
    </body>
</html>
