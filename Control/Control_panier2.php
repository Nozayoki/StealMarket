<?php if (isset($_POST["total"])){
    include("../Model/Modele_payer.php")
    ?>
    <?php
    if ($payer){
        header("location:../index.php");
    }else {
        echo "Vous n'avez pas assez d'argent sur votre compte!<br>";
        echo "<a href='../index.php'><input type='button' class='btn btn-primary' value='Retour'> ";    
    }
    
    //echo "la VIE c'est cool";
}
else if (isset($_COOKIE["ID_connexion"])){
    include("../Model/Modele_panier.php")
    ?>
    <?php
        if (isset($abg)){
echo "<form action='View_panier.php' method='POST'>
        <input type='hidden' value='$abs' name='total'>
        <input type='hidden' value='$ID_utilisateur' name='ID_utilisateurs'>
        <input type='hidden' value='$abg' name='ID_commandes'>
        <input type='submit' value='Payer'></form>";}
        else  {  
            echo "vous n'avez pas de panier<br><br>";
            echo "<a href='../index.php'><input type='button' value='Retour'> ";
        }}else {echo "vous n'êtes pas connecté";}
    ?>