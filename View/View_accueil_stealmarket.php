<!doctype html utf-8>

<html>
    <head>
        <style>
            img{
	        width: 50px;
	        height: 50px;
            };
        </style>
    </head>

    <body>
    <?php 
                if (isset($_POST["deco"])){
                    unset($_COOKIE["ID_connexion"]);
                } 
                
        ?>
       
        <a href="../index.php">INDUMENTIS</a> 
        
        <a href="View_homme.php">Collection Homme</a> 
        
        <a href="View_femme.php">Collection Femme</a> 
        
        <a href="View_accessoire.php">Accessoire</a>
        
        <a href="View_contact.html">En savoir plus</a>
        
        <a href="View_recherche.php">Recherche</a> 
        <?php
                if (isset($_COOKIE["ID_connexion"])){

        echo "<a href='View_gerer_son_compte.php'>gérer son compte</a>";
        echo "<form method='post' action='index.php' >
        <input type='submit' value='se déconnecter' name='deco'>
      </form>";  
                }
        ?>
        
        
      
        <a href="View_recherche.php"><img src="Image/loupe.png"></a>
      
        <a href="View_inscription_steal.php"><img src="Image/engrenage.jpg"></a>

        <a href="View_panier.php"><img src="Image/caddie.jpg"></a> <br> <br>

        <a href="View_homme.php"><img src="Image/vetement_homme.jpg"></a>
    
        <a href="View_femme.php"><img src="Image/vetement_femme.jpg"></a> <br>

        
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