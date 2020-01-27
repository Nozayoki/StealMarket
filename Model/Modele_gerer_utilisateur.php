 <?php 
    $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
    $num_dossier = $_POST['dossier'];
    if (isset($_POST['ban'])){
        $bdd->query('UPDATE utilisateurs SET fonction = "bannie" WHERE ID = '.$num_dossier.''); 
        echo("Le compte à bien été bannie cliquer sur le lien ci-dessous pour revenir à la liste des dossiers <br>
            <a href='View_back_end.php'>Retour accueil</a>");  
    } else if (isset($_POST['deban'])) {
        $bdd->query('UPDATE utilisateurs SET fonction = "utilisateur" WHERE ID = '.$num_dossier.''); 
         echo("Le compte à bien été débannie cliquer sur le lien ci-dessous pour revenir à la liste des dossiers <br>
        <a href='View_back_end.php'>Retour accueil</a>"); 
    } else if(isset($_POST['ajouter'])){
        $a = $_POST['ajout_argent'];
        $bdd->query("UPDATE utilisateurs SET portefeuille = portefeuille + ".$a." WHERE ID = ".$num_dossier."");
        echo("vous avez bien ajouter l'argent dans le portefeuille de l'utilisateur cliquer sur le lien ci-dessous pour revenir à la liste des dossiers<br>
        <a href='View_back_end.php'>Retour accueil</a>");
    }   else if(isset($_POST['retirer'])){
        $a = $_POST['retirer_argent'];
        $bdd->query("UPDATE utilisateurs SET portefeuille = portefeuille - '".$a."' WHERE ID = '".$num_dossier."'");
        echo("vous avez bien retirer l'argent dans le portefeuille de l'utilisateur cliquer sur le lien ci-dessous pour revenir à la liste des dossiers<br>
        <a href='View_back_end.php'>Retour accueil</a>");
    }
        $num_dossier = $_POST['dossier'];
        $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE ID = "'.$num_dossier.'"'); 
        $row =$reponse->fetch(); 
?>