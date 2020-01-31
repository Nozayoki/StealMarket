<!doctype html utf-8>

<html>
    <head>
    <link rel="stylesheet" href="../Bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../Css/styles.css" type="text/css" /> 
    </head>

    <body>
    <?php 
                if (isset($_GET["deco"])){
                    setcookie ("ID_connexion","",time()-3600,"/");
                    unset($_COOKIE["ID_connexion"]);
                    setcookie ("Admin","",time()-3600,"/");
                    unset($_COOKIE["Admin"]);
                } 
                
        ?>         
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
      <li class="nav-item active">
        <a class="nav-link" href="View_femme.php">Collection Femme<span class="sr-only">(current)</span></a>
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
      <li class="nav-item active">
        <a class="nav-link" href="View_contact.php">En savoir plus<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="View_recherche.php">Recherche<span class="sr-only">(current)</span></a>
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
      <li class="nav-item active">
        <a class="nav-link" href="View_panier.php">Panier<span class="sr-only">(current)</span></a>
      </li>
    </ul>

  </div>
</nav>

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