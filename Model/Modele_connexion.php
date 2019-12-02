<!doctype html utf8>

<html>
    <head>

    </head>

    <body>
        <h1>INDUMENTIS</h2>
        <?php
$bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
$reponse = $bdd->query("SELECT * from utilisateurs");
$donnees = $reponse->fetchall();
$trouve=false;
//print_r ($donnees);
for ($i=0;$i<count($donnees);$i++){
    if($donnees[$i][4]===$_GET["adresse_mail"]&&$donnees[$i][5]===$_GET["mdp"]){
        $trouve=true;
    }
}
if ($trouve){
    echo "c'est cool";
}else {echo "pas cool t'existe pas";}
?>      