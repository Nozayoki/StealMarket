<?php 
$bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
$id = $_COOKIE['ID_connexion'];
$abs=$_GET["total"];
$abg=$_GET["ID_commandes"];
$yu3=$_GET["ID_utilisateurs"];
$basss = $bdd -> query("SELECT portefeuille FROM utilisateurs WHERE ID ='$yu3' ");
$basss = $basss -> fetch();
$basss = $basss[0];
if ($basss>=$abs){
    $agh=$basss-$abs;
    $bdd -> query("UPDATE utilisateurs SET portefeuille='$agh'  WHERE ID ='$yu3'");
    $bdd -> query("DELETE FROM commandes WHERE ID_utilisateurs='$yu3'");
    $bdd -> query("DELETE FROM ligne_commandes WHERE ID_commandes='$abg'");
}
?>