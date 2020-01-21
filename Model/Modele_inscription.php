<?php
     $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
     $a=$_POST["adresse_mail"];
     $b=$_POST["mdp"];
     $c=$_POST["prenom"];
     $d=$_POST["nom"];
     $e=$_POST["adresse"];
     $f=$_POST["complement"];
     $g=$_POST["code_postal"];
     $h=$_POST["ville"];
     $i=$_POST["pays"];
     $j=$_POST["telephone"];
     /*if(!(*/try {/*$reponse =*/ $bdd->query("INSERT INTO utilisateurs(adresse_mail, mdp, prenom, nom, adresse, complement, code_postal, ville, pays, telephone) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j');");//.$_POST['adresse_mail'].",'".$_POST['mdp']."','".$_POST['prenom']."','".$_POST['nom']."','".$_POST['adresse']."','".$_POST['complement']."',".$_POST['code_postal'].",'".$_POST['ville']."','".$_POST['pays']."',".$_POST['telephone'].");");//))
         //echo'échec';
     //else {
     }catch(Exception $e){
      print_r($e);

     }
?>