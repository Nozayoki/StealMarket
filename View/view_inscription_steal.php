<!doctype html utf8>

<html>
    <head>

    </head>

    <body>
        <h1>INDUMENTIS</h2>
        <?php
            if(!isset($_GET['adresse_mail']) && !isset($_GET['mdp']) && !isset($_GET['prenom']) && !isset($_GET['nom']) && !isset($_GET['adresse']) && !isset($_GET['complement']) && !isset($_GET['code_postal']) && !isset($_GET['ville']) && !isset($_GET['pays']) && !isset($_GET['telephone'])){
                echo'
                <form method="GET" action="../View/view_inscription_steal.php">
                Coordonnées: <br>
                <input type="text" name="adresse_mail" placeholder="Adresse email">
                <input type="text" name="mdp" placeholder="Mot de passe"><br>
                Coordonnées de livraison:<br>
                <input type="text" name="prenom" placeholder="Prénom">
                <input type="text" name="nom" placeholder="Nom"><br>
                <input type="text" name="adresse" placeholder="Adresse"><br>
                <input type="text" name="complement" placeholder="Complément d\'adresse"><br>
                <input type="text" name="code_postal" placeholder="Code postal">
                <input type="text" name="ville" placeholder="Ville">
                <select name="pays" value="pays">
                    <option value="">Pays</option>
                    <option value="france">france</option>
                    <option value="belgique">belgique</option>
                    <option value="suisse">suisse</option>
                </select><br>
                <input type="text" name="telephone" placeholder="Numéro de téléphone"><br> 
                <input type="submit" value="Création de compte"><br>
                </form>';
            } else if ($_GET['adresse_mail'] == "" || $_GET['adresse'] == "" || $_GET['complement'] == "" || $_GET['code_postal'] == "" || $_GET['ville'] == "" || $_GET['pays'] == "" || $_GET['telephone'] == ""){
                echo'
                erreur un ou plusieurs champ(s) sont vides <br> <br>
                <form method="GET" action="view_inscription_steal.php">
                Coordonnées: <br>
                <input type="text" name="adresse_mail" placeholder="Adresse email">
                <input type="text" name="mdp" placeholder="Mot de passe"><br>
                Coordonnées de livraison:<br>
                <input type="text" name="prenom" placeholder="Prénom">
                <input type="text" name="nom" placeholder="Nom"><br>
                <input type="text" name="adresse" placeholder="Adresse"><br>
                <input type="text" name="complement" placeholder="Complément d\'adresse"><br>
                <input type="text" name="code_postal" placeholder="Code postale">
                <input type="text" name="ville" placeholder="Ville">
                <select name="pays" value="pays">
                    <option value="">Pays</option>
                    <option value="france">france</option>
                    <option value="belgique">belgique</option>
                    <option value="suisse">suisse</option>
                </select><br>
                <input type="text" name="telephone" placeholder="Numéro de téléphone"><br> 
                <input type="submit" value="Création de compte"><br>
                </form>';
            
            }else if (strtolower($_GET['mdp']) == $_GET['mdp'] || strlen($_GET['prenom']) < 2 || strlen($_GET['nom']) < 2 ||  !preg_match('/[0-9]{10}/',$_GET['telephone']) || strlen($_GET['telephone']) !== 10 || !filter_var($_GET['adresse_mail'],FILTER_VALIDATE_EMAIL)){ /*penser à mettre un cas pour vérifier que l'adresse mail n'est pas enregistré*/
                echo'
                erreur un ou plusieurs champ(s) sont incorrect <br> <br>
                <form method="GET" action="view_inscription_steal.php">
                Coordonnées: <br>
                <input type="text" name="adresse_mail" placeholder="Adresse email">
                <input type="text" name="mdp" placeholder="Mot de passe"><br>
                Coordonnées de livraison:<br>
                <input type="text" name="prenom" placeholder="Prénom">
                <input type="text" name="nom" placeholder="Nom"><br>
                <input type="text" name="adresse" placeholder="Adresse"><br>
                <input type="text" name="complement" placeholder="Complément d\'adresse"><br>
                <input type="text" name="code_postal" placeholder="Code postal">
                <input type="text" name="ville" placeholder="Ville">
                <select name="pays" value="pays">
                    <option value="">Pays</option>
                    <option value="france">france</option>
                    <option value="belgique">belgique</option>
                    <option value="suisse">suisse</option>
                </select><br>
                <input type="text" name="telephone" placeholder="Numéro de téléphone"><br> 
                <input type="submit" value="Création de compte"><br>
                </form>';
          
            } else  /*if (isset($bdd))*/ {
               $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
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
               /*if(!(*/try {/*$reponse =*/ $bdd->query("INSERT INTO utilisateurs(adresse_mail, mdp, prenom, nom, adresse, complement, code_postal, ville, pays, telephone, portefeuille) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j',0);");//.$_GET['adresse_mail'].",'".$_GET['mdp']."','".$_GET['prenom']."','".$_GET['nom']."','".$_GET['adresse']."','".$_GET['complement']."',".$_GET['code_postal'].",'".$_GET['ville']."','".$_GET['pays']."',".$_GET['telephone'].");");//))
                   //echo'échec';
               //else {
               }catch(Exception $e){
                print_r($e);

               }
               echo'
               Félicitation ! Vous êtes maintenant inscrit sur Indumentis <br>
               Cliquez sur le lien ci-dessous pour revenir à la page d\'acceuil <br> ';
               }//}
        ?>

        <a href="../View/View_accueil_stealmarket.php">Retour accueil</a> <br>   
    </body> 
</html>
   