<?php 
$bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
$id = $_COOKIE['ID_connexion'];
$table='UTILISATEURS';
function modif($bdd,$table,$column_modif,$modification,$id){
    $bdd->query("UPDATE $table SET $column_modif = '".$modification."' WHERE ID = ".$id."");
}
if (isset($_GET['mdp'])AND !empty($_GET['mdp'])){
    $column_modif='mdp';
    $modification=$_GET['mdp'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_GET['nom'])AND !empty($_GET['nom'])){
    $column_modif='nom';
    $modification=$_GET['nom'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_GET['prenom'])AND !empty($_GET['prenom'])){
    $column_modif='prenom';
    $modification=$_GET['prenom'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_GET['telephone'])AND !empty($_GET['telephone'])){
    $column_modif='telephone';
    $modification=$_GET['telephone'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_GET['code_postal'])AND !empty($_GET['code_postal'])){
    $column_modif='code_postal';
    $modification=$_GET['code_postal'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_GET['pays'])AND !empty($_GET['pays'])){
    $column_modif='pays';
    $modification=$_GET['pays'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_GET['adresse'])AND !empty($_GET['adresse'])){
    $column_modif='adresse';
    $modification=$_GET['adresse'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_GET['complement'])AND !empty($_GET['complement'])){
    $column_modif='complement';
    $modification=$_GET['complement'];
    modif ($bdd,$table,$column_modif,$modification,$id);
}
if (isset($_GET['ville'])AND !empty($_GET['ville'])){
    $column_modif='ville';
    $modification=$_GET['ville'];
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