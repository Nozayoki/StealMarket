<?php 
$bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
$id = $_COOKIE['ID_connexion'];
$table='UTILISATEURS';
function modif($bdd,$table,$column_modif,$modification,$id){
    $bdd->query("UPDATE $table SET $column_modif = '".$modification."' WHERE ID = ".$id."");
}
if (isset($_POST['mdp'])AND !empty($_POST['mdp'])){
    $column_modif='mdp';
    $modification=$_POST['mdp'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_POST['nom'])AND !empty($_POST['nom'])){
    $column_modif='nom';
    $modification=$_POST['nom'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_POST['prenom'])AND !empty($_POST['prenom'])){
    $column_modif='prenom';
    $modification=$_POST['prenom'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_POST['telephone'])AND !empty($_POST['telephone'])){
    $column_modif='telephone';
    $modification=$_POST['telephone'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_POST['code_postal'])AND !empty($_POST['code_postal'])){
    $column_modif='code_postal';
    $modification=$_POST['code_postal'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_POST['pays'])AND !empty($_POST['pays'])){
    $column_modif='pays';
    $modification=$_POST['pays'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_¨POST['adresse'])AND !empty($_POST['adresse'])){
    $column_modif='adresse';
    $modification=$_POST['adresse'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_POST['complement'])AND !empty($_POST['complement'])){
    $column_modif='complement';
    $modification=$_POST['complement'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_POST['ville'])AND !empty($_POST['ville'])){
    $column_modif='ville';
    $modification=$_POST['ville'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
/*if(isset($_GET['modif'])){
    $mdp=$_GET["mdp"];
    $bdd->query("UPDATE utilisateurs SET mdp = '".$mdp."' WHERE ID = ".$id."");
    echo"votre mot de passe a bien été modifié";
} else if(isset($_GET['suppr'])){
    $bdd->query("DELETE * FROM utilisateurs WHERE ID = ".$id."");
    echo"votre compte a été supprimé vous n'existez plus pour nous";
    
}*/
$reponse = $bdd->query("SELECT * from utilisateurs WHERE ID = ".$id."");
//echo($id);
$row = $reponse->fetch(); 
    
?>