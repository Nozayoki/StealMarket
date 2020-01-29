<!doctype html utf-8>

<html>
    <head>
    <link rel="stylesheet" href="Css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="Css/styles.css" type="text/css" />

    </head>

    <body>
        <?php 
                if (isset($_GET["deco"])){
                    setcookie ("ID_connexion","",time()-3600,"/");
                    unset($_COOKIE["ID_connexion"]);
                } 
                
        ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">INDUMENTIS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="View/View_homme.php">Collection Homme<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="View/View_femme.php">Collection Femme<span class="sr-only">(current)</span></a>
      </li>
      <li>
      <div class="dropdown">
      <button class="btn btn-primary">Accessoire</button>
      <div class="dropdown-content">
        <a href="View/View_accessoire_Bague.php">Bague</a></br>
        <a href="View/View_accessoire_boucle.php">Boucle d'oreille</a></br>
        <a href="View/View_accessoire_collier.php">Collier</a></br>
        <a href="View/View_accessoire_montre.php">Montre</a></br>
      </div>
      </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="View/View_contact.html">En savoir plus<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="View/View_recherche.php">Recherche<span class="sr-only">(current)</span></a>
      </li>
      <?php if (!isset($_COOKIE['ID_connexion'])){
      echo "<li class='nav-item active'>
      <a class='nav-link' href='View/View_inscription_steal.php'>Inscription<span class='sr-only'>(current)</span></a>
      </li>";
      echo "<li class='nav-item active'>
      <a class='nav-link' href='View/View_connexion.php'>Connexion<span class='sr-only'>(current)</span></a>
    </li>";}else {
      echo "<li class='nav-item active'>
      <a class='nav-link' href='View/View_gerer_son_compte.php'>Gerer son compte<span class='sr-only'>(current)</span></a>
      </li>";
      echo "<li class='nav-item active'>
      <a class='nav-link' href='index.php?deco=co'>Deconnexion<span class='sr-only'>(current)</span></a>
    </li>";
    }
      ?>
      <li class="nav-item active">
        <a class="nav-link" href="View/View_panier.php">Panier<span class="sr-only">(current)</span></a>
      </li>
    </ul>

  </div>
</nav>
<div class="jumbotron" class="center">
  <h1 class="display-3">INDUMENTIS</h1>
</div>
        <?php
                if (isset($_COOKIE["ID_connexion"])){

        echo "<a href='View/View_gerer_son_compte.php'>gérer son compte</a>";
        echo "<form method='post' action='index.php' >
                <input type='submit' value='se déconnecter' name='deco'>
              </form>";    
        }
        
        ?>
        <div class="center" >
        <a href="View/View_homme.php"><img src="View/Image/vetement_homme.jpg"></a>
    
        <a href="View/View_femme.php"><img src="View/Image/vetement_femme.jpg"></a> <br>
        <div>
        <form action="Control/Control_accueil.php" method="post">
            <p>

        </form>  
        </div>
        </nav>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
        </div>  
    </body>

</html>