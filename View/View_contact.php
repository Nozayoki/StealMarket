<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <title>En savoir plus</title>
        <link rel="stylesheet" href="../Bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css" />
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
                  <a class="nav-link" href="View_femme.php">Collectioon Femme</a>
                </li>
                <li>
                <div class="dropdown">
                <button class="btn btn-primary">Accessoire</button>
                <div class="dropdown-content"> 
                  <a href="View_accessoire_Bague.php">Bague</a></br>
                  <a href="View_accessoire_boucle.php">Boucle d'oreille</a></br>
                  <a href="View_accessoire_collier.php">Collier</a></br>
                  <a href="View_accessoire_montre.php">Montre</a></br>
                </div>
                </div>
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
                  <?php if (!isset($_COOKIE['ID_connexion'])){
                    echo "<li class='nav-item active'>
                    <a class='nav-link' href='View_inscription_steal.php'>Inscription<span class='sr-only'>(current)</span></a>
                    </li>";
                    echo "<li class='nav-item active'>
                    <a class='nav-link' href='View_connexion.php'>Connexion<span class='sr-only'>(current)</span></a>
                  </li>";}else {
                    echo "<li class='nav-item active'>
                    <a class='nav-link' href='View_gerer_son_compte.php'>Gerer son compte<span class='sr-only'>(current)</span></a>
                    </li>";
                    echo "<li class='nav-item active'>
                    <a class='nav-link' href='../index.php?deco=co'>Deconnexion<span class='sr-only'>(current)</span></a>
                  </li>";
                  }
                    ?>
                  <li class="nav-item">
                    <a class="nav-link" href="View_panier.php">Panier</a>
                  </li>
              </ul>
              </div>
          </nav>
          <div class="jumbotron">
            <h1 class="display-3">Bienvenue sur le Projet StealMarket!</h1>
            <p class="lead">Le nom du projet n'a pas le même nom que le site et cela est tout à fait normal !</p>
            <hr class="my-4">
            <p>Nous avons donc décidé de séparer les 2 noms un peu comme si StealMarket était une entreprise qui crée de nombreux sites 
                et INDUMENTIS est l'un de ses nombreux sites  .</br>
               Contactez-nous à cette e-mail : williammpassy@gmail.com
            </p>
          </div>
        <h1>L'équipe</h1></br>
        <h3>William Mpassy</h3>
        <img src="Image/williamm.jpg" width="150">
        </br>
        <h3>Elio Transetti</h3></br>
        <img src="Image/elio.jpg" width="150">
        <h3>Pierre Sorli</h3></br>
        <img src="Image/pierre.jpg" width="150">
        <h3>Colombe Singbeu</h3></br>
        <img src="Image/colombe.jpg" width="150">

        
    </body>
</html>