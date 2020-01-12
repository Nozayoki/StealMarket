<?php
    session_start();
    include('Modele_connexion.php');
 
    if (!isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }
 
    // On récupère les informations de l'utilisateur connecté
    $afficher_profil = $DB->query("SELECT * 
        FROM utilisateur 
        WHERE id = ?",
        array($_SESSION['id']));
    $afficher_profil = $afficher_profil->fetch();
 
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
 
        if (isset($_POST['modification'])){
            $nom = htmlentities(trim($nom));
            $prenom = htmlentities(trim($prenom));
            $mail = htmlentities(strtolower(trim($mail)));
 
            if(empty($nom)){
                $valid = false;
                $er_nom = "Il faut mettre un nom";
            }
 
            if(empty($prenom)){
                $valid = false;
                $er_prenom = "Il faut mettre un prénom";
            }
 
            if(empty($mail)){
                $valid = false;
                $er_mail = "Il faut mettre un mail";
 
            }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
                $valid = false;
                $er_mail = "Le mail n'est pas valide";
 
            }else{
                $req_mail = $DB->query("SELECT mail 
                    FROM utilisateur 
                    WHERE mail = ?",
                    array($mail));
                $req_mail = $req_mail->fetch();
 
                if ($req_mail['mail'] <> "" && $_SESSION['mail'] != $req_mail['mail']){
                    $valid = false;
                    $er_mail = "Ce mail existe déjà";
                }
            }
 
            if ($valid){
 
                $DB->insert("UPDATE utilisateur SET prenom = ?, nom = ?, mail = ? 
                    WHERE id = ?", 
                    array($prenom, $nom,$mail, $_SESSION['id']));
 
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['mail'] = $mail;
 
                header('Location:  profil.php');
                exit;
            }   
        }
    }
?>
