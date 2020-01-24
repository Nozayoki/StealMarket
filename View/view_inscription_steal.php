<!doctype html utf8>

<html>
    <head>

    </head>

    <body>
        <h1>INDUMENTIS</h2>
        <?php
        include("../Control/Control_inscription.php")
        ?>

        <form method="POST" action="../View/view_inscription_steal.php">
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
                </form>
        <?php
            /*if(!isset($_POST['adresse_mail']) && !isset($_POST['mdp']) && !isset($_POST['prenom']) && !isset($_POST['nom']) && !isset($_POST['adresse']) && !isset($_POST['complement']) && !isset($_POST['code_postal']) && !isset($_POST['ville']) && !isset($_POST['pays']) && !isset($_POST['telephone'])){
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
            } else if ($_POST['adresse_mail'] == "" || $_POST['adresse'] == "" || $_POST['complement'] == "" || $_POST['code_postal'] == "" || $_POST['ville'] == "" || $_POST['pays'] == "" || $_POST['telephone'] == ""){
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
            
            }else if (strtolower($_POST['mdp']) == $_POST['mdp'] || strlen($_POST['prenom']) < 2 || strlen($_POST['nom']) < 2 ||  !preg_match('/[0-9]{10}/',$_POST['telephone']) || strlen($_POST['telephone']) !== 10 || !filter_var($_POST['adresse_mail'],FILTER_VALIDATE_EMAIL)){ /*penser à mettre un cas pour vérifier que l'adresse mail n'est pas enregistré
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
          
            } else  {*/
              /* $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
               $a=$_POST["adresse_mail"];
               $b=$_POST["mdp"];
               $c=$_POST["prenom"];
               $d=$_POST["nom"];
               $e=$_POST["adresse"];
               $f=$_POST["complement"];
               $g=$_POST["code_postal"];
               $h=$_POST["ville"];
               $i=$_POST["pays"];
               $j=$_POST["telephone"];
               if(!(try {/*$reponse = $bdd->query("INSERT INTO utilisateurs(adresse_mail, mdp, prenom, nom, adresse, complement, code_postal, ville, pays, telephone) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j');");//.$_POST['adresse_mail'].",'".$_POST['mdp']."','".$_POST['prenom']."','".$_POST['nom']."','".$_POST['adresse']."','".$_POST['complement']."',".$_POST['code_postal'].",'".$_POST['ville']."','".$_POST['pays']."',".$_POST['telephone'].");");//))
                   //echo'échec';
               //else {
               }catch(Exception $e){
                print_r($e);

               }
               echo'
               Félicitation ! Vous êtes maintenant inscrit sur Indumentis <br>
               Cliquez sur le lien ci-dessous pour revenir à la page d\'acceuil <br> ';*/
               //}//}
        ?>

        <a href="../View/View_accueil_stealmarket.php">Retour accueil</a> <br>   
    </body> 
</html>
   