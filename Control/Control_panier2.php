<?php if (isset($_GET["total"])){
    include("../Model/Modele_payer.php")
    ?>
    <?php
    header("location:../index.php");
    //echo "la VIE c'est cool";
}
else if (isset($_COOKIE["ID_connexion"])){
    include("../Model/Modele_panier.php")
    ?>
    <?php
        
echo "<form action='View_panier.php'>
        <input type='hidden' value='$abs' name='total'>
        <input type='hidden' value='$yu3' name='ID_utilisateurs'>
        <input type='hidden' value='$abg' name='ID_commandes'>
        <input type='submit' value='Payer'>";}
    ?>