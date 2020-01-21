<?php 
$bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
$id = $_COOKIE['ID_connexion'];
$abs=$_POST["total"];
$ID_commandes=$_POST["ID_commandes"];
$ID_utilisateur=$_POST["ID_utilisateurs"];
require("../Control/Control_function.php")
?>
<?php
/*$solde = $bdd -> query("SELECT portefeuille FROM utilisateurs WHERE ID ='$ID_utilisateur' ");
$solde = $solde -> fetch();*/
$solde = select($bdd,'portefeuille','utilisateurs',"ID='$ID_utilisateur'");
if ($solde>=$abs){
    $agh=$solde-$abs;
    $bdd -> query("UPDATE utilisateurs SET portefeuille='$agh'  WHERE ID ='$ID_utilisateur'");
    $bdd -> query("DELETE FROM commandes WHERE ID_utilisateurs='$ID_utilisateur'");
    $bdd -> query("DELETE FROM ligne_commandes WHERE ID_commandes='$ID_commandes'");
}
?>