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
       
        <a href="View_accueil_stealmarket.php">INDUMENTIS</a> 
        
        <a href="View_homme.php">Collection Homme</a> 
        
        <a href="View_femme.php">Collection Femme</a> 
        
        <a href="View_accessoire.html">Accessoire</a> 
        
        <a href="contact.php">En savoir plus</a> 
        
      
        <a href="recherche.html"><img src="Image/loupe.png"></a>
      
        
        <a href="view_inscription_steal.php"><img src="Image/engrenage.jpg"></a>

        <a href="panier_stealmarket.php"><img src="Image/caddie.jpg"></a> <br> <br>

        <a href="View_homme.php"><img src="Image/vetement_homme.jpg"></a>
    
        <a href="View_femme.php"><img src="Image/vetement_femme.jpg"></a> <br>

        <form action="../Control/Control_accueil.php" method="post">
            <p>
                <input type="radio" name="connexion" value="connexion" />
                Connexion
            </p>
            <p>
                <input type="radio" name="inscription" value="s'incrire" />
                S'inscrire
            </p>
                <input type="submit" name="validation" value="Valider" />
        </form>    
    </body>

</html>