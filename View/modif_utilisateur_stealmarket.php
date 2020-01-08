<html>
    
    <head>

    </head>

    <body>
        <?php echo($_GET['dossier']);
        $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
        $num_dossier = $_GET['dossier'];
        $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE ID = '.$num_dossier.'');
        $row =$reponse->fetch(); 
        if(isset($_GET['valider'])){
            echo"suce";
            $a=$_GET["adresse_mail"];
            $b=$_GET["mdp"];
            $c=$_GET["prenom"];
            $d=$_GET["nom"];
            $e=$_GET["adresse"];
            $f=$_GET["complement"];
            $g=$_GET["code_postal"];
            $h=$_GET["ville"];
            $i=$_GET["pays"];
            $j=$_GET["telephone"];
            $bdd->query("UPDATE utilisateurs SET adresse_mail = '".$a."', mdp = '".$b."', prenom = '".$c."', nom = '".$d."', adresse = '".$e."' , complement = '".$f."', 
             code_postal = '".$g."' , ville = '".$h."' , pays = '".$i."' , telephone = '".$j."' WHERE ID = '".$num_dossier."'"); 

        } else {
 ?>
 <form method="GET" action="modif_utilisateur_stealmarket.php">
 Coordonnées: <br>
 <input type="text" name="adresse_mail" value="<?php echo $row['adresse_mail']?>">
 <input type="text" name="mdp" value="<?php echo $row['mdp']?>"><br>
 Coordonnées de livraison:<br>
 <input type="text" name="prenom" value="<?php echo $row['prenom']?>" >
 <input type="text" name="nom" value="<?php echo $row['nom']?>"><br>
 <input type="text" name="adresse" value="<?php echo $row['adresse']?>"><br>
 <input type="text" name="complement" value="<?php echo $row['complement']?>"><br>
 <input type="text" name="code_postal" value="<?php echo $row['code_postal']?>">
 <input type="text" name="ville" value="<?php echo $row['ville']?>">
 <select name="pays" value="pays">
     <option value="">Pays</option>
     <option value="france">france</option>
     <option value="belgique">belgique</option>
     <option value="suisse">suisse</option>
 </select><br>
 <input type="text" name="telephone" value="<?php echo $row['telephone']?>"><br> 
 <input type="hidden" name="dossier" value="<?php echo $num_dossier; ?>" ></input>
 valider la modification:<br>
            <input type="submit" value="valider" name='valider'>
        <?php };?>
 </form>
    </body>
</html>