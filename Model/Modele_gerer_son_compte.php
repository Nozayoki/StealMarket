<?php 
$bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
$id = $_COOKIE['ID_connexion'];
function query2 ($bdd,$cat,$modif){
    $id = $_COOKIE['ID_connexion'];
    $bdd->query("UPDATE utilisateurs SET $cat = '".$modif."' WHERE ID = ".$id."");
}

if(isset($_POST['modif'])){
    if (isset($_POST['mdp'])AND !empty($_POST['mdp'])AND !(strtolower($_POST['mdp']) == $_POST['mdp']) ){
   query2($bdd,'mdp',$_POST['mdp']);
    }
     if (isset($_POST['tel'])AND !empty($_POST['tel'])AND !(!preg_match('/[0-9]{10}/',$_POST['tel'])AND (strlen($_POST['telephone']) !== 10))){
        query2($bdd,'telephone',$_POST['tel']);
        
         }
         if (isset($_POST['adesse_mail'])AND !empty($_POST['adresse_mail'])AND !(!filter_var($_POST['adresse_mail'],FILTER_VALIDATE_EMAIL))){
            query2($bdd,'adresse_mail',$_POST['adresse_mail']);
             }
              if (isset($_POST['nom'])AND !empty($_POST['nom'])AND !(strlen($_POST['nom']) < 2)){
                query2($bdd,'nom',$_POST['nom']);
                 }
                 if (isset($_POST['prenom'])AND !empty($_POST['prenom'])AND !( strlen($_POST['prenom']) < 2)){
                    query2($bdd,'prenom',$_POST['prenom']);
                     }
                     if (isset($_POST['adresse'])AND !empty($_POST['adresse'])){
                        query2($bdd,'adresse',$_POST['adresse']);
                         }
                         if (isset($_POST['code_postal'])AND !empty($_POST['code_postal'])){
                            query2($bdd,'code_postal',$_POST['code_postal']);
                             }
                             if (isset($_POST['ville'])AND !empty($_POST['ville'])){
                                query2($bdd,'ville',$_POST['ville']);
                                 }
                                 if (isset($_POST['pays'])AND !empty($_POST['pays'])){
                                    query2($bdd,'pays',$_POST['pays']);
                                     }
} else if(isset($_POST['suppr'])){
    $bdd->query("DELETE * FROM utilisateurs WHERE ID = ".$id."");
    echo"votre compte a été supprimé vous n'existez plus pour nous";
    echo"votre mot de passe a bien été modifié";
}
$reponse = $bdd->query("SELECT * from utilisateurs WHERE ID = ".$id."");
//echo($id);
$row = $reponse->fetch(); 



?>    