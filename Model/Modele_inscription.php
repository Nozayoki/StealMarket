<?php
     $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","",array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
      ));
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
     $d=preg_replace("/'/", "\'", $d);
     $c=preg_replace("/'/", "\'", $c);
    /* $ze=0;
     for ($y=0;$y<strlen($d);$y++){
            if($d[$y]=="'" && $ze==0){
                $azer=$d[$y];
                $d[$y]="/";
               /* for ($aze=$y+1;$aze<strlen($d)-$y;$aze++){
                    $d[$y+1]=$azer;
                    $d[$aze]=$d[$aze+1];*/
                //$d[$y+1]="'";
                //}
                /*$ze=1;
                echo $d;
                echo $az;
            }else if ($ze==1 && $y<strlen($d)+1){
            
            $d[$y]=$az;
            $az=$d[$y+1];*///}
      echo $d;
     /*if(!(*/try {/*$reponse =*/ $bdd->query("INSERT INTO utilisateurs(adresse_mail, mdp, prenom, nom, adresse, complement, code_postal, ville, pays, telephone) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j');");//.$_POST['adresse_mail'].",'".$_POST['mdp']."','".$_POST['prenom']."','".$_POST['nom']."','".$_POST['adresse']."','".$_POST['complement']."',".$_POST['code_postal'].",'".$_POST['ville']."','".$_POST['pays']."',".$_POST['telephone'].");");//))
         //echo'échec';
     //else {
     }catch(Exception $e){
      print_r($e);

     }
?>