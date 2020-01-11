 <?php $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
        $num_dossier = $_GET['dossier'];
        $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE ID = '.$num_dossier.'');
        $row =$reponse->fetch(); 
        if(isset($_GET['valider'])){
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
            echo"le compte du client a bien été modifié cliquer sur le lien ci dessous pour revenir sur le back end <br>
            <a href='View_back_end.php'>retour au back end</a>";
        } else {
?>