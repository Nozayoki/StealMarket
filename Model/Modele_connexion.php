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
    if($donnees[$i][5]===$_POST["adresse_mail"]&&$donnees[$i][4]===$_POST["mdp"]){
        $trouve=true;
        $reponse2 = $donnees[$i][0];
        if ($donnees[$i][3]=="administrateur"){
            $niquetamere=true;
        }
    }
    
}
if ($trouve){
    
    //echo "<input type='hidden' name='ID_connexion' method='POST' value='$reponse2'>";
    setcookie("ID_connexion", $reponse2, time()+3600,"/");
    
    echo "c'est cool";
    $aze="../index.php";
    if ($niquetamere){$aze="View_back_end.php";
    setcookie("Admin","",time()+3600,"/")}
    header ("location:$aze");
}else {echo "pas cool t'existe pas";}
?>      