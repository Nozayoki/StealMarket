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
    if($donnees[$i][5]===$_GET["adresse_mail"]&&$donnees[$i][4]===$_GET["mdp"]){
        $trouve=true;
        $reponse2 = $donnees[$i][2];
        if ($donnees[$i][3]=="administrateur"){
            $niquetamere=true;
        }
    }
    
}
if ($trouve){
    
    //echo "<input type='hidden' name='prenom_connexion' method='GET' value='$reponse2'>";
    setcookie("prenom_connexion", $reponse2, time()+3600,"/");
    
    echo "c'est cool";
    $aze="View_femme.php";
    if ($niquetamere){$aze="View_back_end.php";}
    header ("location:$aze");
}else {echo "pas cool t'existe pas";}
?>      