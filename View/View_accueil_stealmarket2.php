<!doctype html utf-8>

<html>
    <head>
        <style>
            img{
	        width: 150px;
	        height: 150px;
            };
        </style>
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
        <a class="nav-link" href="View_accessoire_bague.php">Bague</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="View_accessoire_boucle.php">Boucle</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="View_accessoire_collier.php">Collier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="View_accessoire_montre.php">Montre</a>
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
        <?php
                if (isset($_COOKIE["ID_connexion"])){

        echo "<a href='View_gerer_son_compte.php'>gérer son compte</a>";}
        ?>
        
            <p>
                <?php
                /*if (!isset($_COOKIE["ID_connexion"])){
                echo "<input type='radio' name='connexion' value='connexion' />
                Connexion
                
            </p>
            <p>
                <input type='radio' name='inscription' value='s'inscrire' />
                S'inscrire
            </p>
                <input type='submit' name='validation' value='Valider' />";}
                
                //echo $_COOKIE["ID_connexion"];*/
                ?>
        </form>  
          
    </body>

</html>