<?php
$bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","",array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ));
$ID_utilisateur=$_COOKIE["ID_connexion"];

//$abl=$bdd->query("SELECT ID FROM utilisateurs WHERE prenom ='$yu3' ");
$abs=$bdd->query("SELECT * FROM commandes WHERE ID_utilisateurs ='$ID_utilisateur' ");
$abs = $abs->fetchall();
//print_r($abs);
if ($abs!=NULL){
$abg=$abs[0]["ID"];
$abs=$abs[0]["total"];
//echo "/$abg";
//echo "/$abs";
$aaa = $bdd -> query("SELECT * FROM ligne_commandes WHERE ID_commandes ='$abg' ");
$donnees = $aaa -> fetchall();
//echo "yo";
    //$donnees = $reponse->fetchall();
    echo "<table><tr><td>ID</td><td>prix</td><td>ID_articles</td><td>ID_commandes</td>";
    for ($i=0;$i<count($donnees);$i++){
        echo "</tr><tr>";
        for ($j=0;$j<count($donnees[$i])/2;$j++){
            
            echo "<td>".$donnees[$i][$j]."</td>";
        }
    }
    echo "</tr></table><br>";}
    else {}
?>