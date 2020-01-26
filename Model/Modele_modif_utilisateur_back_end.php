 <?php $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
        $num_dossier = $_POST['dossier'];
        $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE ID = '.$num_dossier.'');
        $row =$reponse->fetch(); 
        if(isset($_POST['valider'])){
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
            $bdd->query("UPDATE utilisateurs SET adresse_mail = '".$a."', mdp = '".$b."', prenom = '".$c."', nom = '".$d."', adresse = '".$e."' , complement = '".$f."', 
             code_postal = '".$g."' , ville = '".$h."' , pays = '".$i."' , telephone = '".$j."' WHERE ID = '".$num_dossier."'"); 
            echo"le compte du client a bien été modifié cliquer sur le lien ci dessous pour revenir sur le back end <br>
            <a href='View_back_end.php'>retour au back end</a>";
        } 
?>