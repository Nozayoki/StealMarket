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
       
        <a href="index.php">INDUMENTIS</a> 
        
        <a href="View/View_homme.php">Collection Homme</a> 
        
        <a href="View/View_femme.php">Collection Femme</a> 
        
        <a href="View/View_accessoire.html">Accessoire</a>
        
        <a href="View/View_contact.html">En savoir plus</a>
        
        <a href="View/View_recherche.html">Recherché</a> 
        
        
        
      
        <a href="recherche.html"><img src="View/Image/loupe.png"></a>
      
        <a href="View/view_inscription_steal.php"><img src="View/Image/engrenage.jpg"></a>

        <a href="View_panier.php"><img src="View/Image/caddie.jpg"></a> <br> <br>

        <a href="View/View_homme.php"><img src="View/Image/vetement_homme.jpg"></a>
    
        <a href="View/View_femme.php"><img src="View/Image/vetement_femme.jpg"></a> <br>

        <form action="Control/Control_accueil.php" method="post">
            <p>
                <?php
                if (!isset($_COOKIE["ID_connexion"])){
                echo "<input type='radio' name='connexion' value='connexion' />
                Connexion
                
            </p>
            <p>
                <input type='radio' name='inscription' value='s'inscrire' />
                S'inscrire
            </p>
                <input type='submit' name='validation' value='Valider' />";}
                
                //echo $_COOKIE["ID_connexion"];
                ?>
        </form>  
          
    </body>

</html>