<?php
     if(!isset($_POST['adresse_mail']) && !isset($_POST['mdp']) && !isset($_POST['prenom']) && !isset($_POST['nom']) && !isset($_POST['adresse']) && !isset($_POST['complement']) && !isset($_POST['code_postal']) && !isset($_POST['ville']) && !isset($_POST['pays']) && !isset($_POST['telephone'])){
            

    } else if ($_POST['adresse_mail'] == "" || $_POST['adresse'] == "" || $_POST['complement'] == "" || $_POST['code_postal'] == "" || $_POST['ville'] == "" || $_POST['pays'] == "" || $_POST['telephone'] == ""){
        echo'   
        erreur un ou plusieurs champ(s) sont vides <br> <br>';
    }else if (strtolower($_POST['mdp']) == $_POST['mdp'] || strlen($_POST['prenom']) < 2 || strlen($_POST['nom']) < 2 ||  !preg_match('/[0-9]{10}/',$_POST['telephone']) || strlen($_POST['telephone']) !== 10 || !filter_var($_POST['adresse_mail'],FILTER_VALIDATE_EMAIL)){ /*penser à mettre un cas pour vérifier que l'adresse mail n'est pas enregistré*/
        echo'
                erreur un ou plusieurs champ(s) sont incorrect <br> <br>
                ';      
    } else  {
        include ("../Model/Modele_inscription.php")
        ?>
        <?php
        echo'
        Félicitation ! Vous êtes maintenant inscrit sur Indumentis <br>
        Cliquez sur le lien ci-dessous pour revenir à la page d\'acceuil <br> ';
    header("location:../index.php");
    }
?>