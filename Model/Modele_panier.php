<?php
$bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","",array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ));
$ID_utilisateur=$_COOKIE["ID_connexion"];
require("../Control/Control_function.php")
?>
<?php
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
//select($bdd,'articles','articles','ID='.$donnees[2]);
//echo "yo";
    //$donnees = $reponse->fetchall();
    echo "<table><tr><td>Nombre d'articles</td><td>prix unitaire</td><td>prix de la commande</td><td>nom de l'article</td>";
    for ($i=0;$i<count($donnees);$i++){
        echo "</tr><tr>";
        for ($j=0;$j<(count($donnees[$i])/2);$j++){
            $bg=$donnees[$i][$j];
            if ($j==0){$prix=select($bdd,'prix','articles','ID='.$donnees[$i][2]);
                
            $bg=$donnees[$i][1]/$prix;}
            if ($j==1){$bg=$prix;}
            if ($j==2){$bg=$donnees[$i][1];}
            if ($j==3){$bg=select($bdd,'articles','articles','ID='.$donnees[$i][2]);
                       
            /*echo "yo";*/}
            echo "<td>".$bg."</td>";
        }
    }
    echo "<div class='right'> total du panier $abs €  </div><br>";}
    else {}
?>