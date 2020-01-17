<?php 
$bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
$id = $_COOKIE['ID_connexion'];
if(isset($_GET['modif'])){
    $mdp=$_GET["mdp"];
    $bdd->query("UPDATE utilisateurs SET mdp = '".$mdp."' WHERE ID = ".$id."");
    
} else if(isset($_GET['suppr'])){
    $bdd->query("DELETE * FROM utilisateurs WHERE ID = ".$id."");
    echo"votre compte a été supprimé vous n'existez plus pour nous";
    echo"votre mot de passe a bien été modifié";
}
$reponse = $bdd->query("SELECT * from utilisateurs WHERE ID = ".$id."");
//echo($id);
$row = $reponse->fetch(); 



?>