 <?php 
    $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
    $num_dossier = $_GET['dossier'];
    if (isset($_GET['ban'])){
        $bdd->query('UPDATE utilisateurs SET fonction = "bannie" WHERE ID = '.$num_dossier.''); 
        echo("Le compte à bien été bannie cliquer sur le lien ci-dessous pour revenir à la liste des dossiers <br>
            <a href='View_back_end.php'>Retour accueil</a>");  
    } else if (isset($_GET['deban'])) {
        $bdd->query('UPDATE utilisateurs SET fonction = "utilisateur" WHERE ID = '.$num_dossier.''); 
         echo("Le compte à bien été débannie cliquer sur le lien ci-dessous pour revenir à la liste des dossiers <br>
        <a href='View_back_end.php'>Retour accueil</a>"); 
    } else if(isset($_GET['ajouter'])){
        $a = $_GET['ajout_argent'];
        $bdd->query("UPDATE utilisateurs SET portefeuille = portefeuille + ".$a." WHERE ID = ".$num_dossier."");
        echo("vous avez bien ajouter l'argent dans le portefeuille de l'utilisateur cliquer sur le lien ci-dessous pour revenir à la liste des dossiers<br>
        <a href='View_back_end.php'>Retour accueil</a>");
    }   else if(isset($_GET['retirer'])){
        $a = $_GET['retirer_argent'];
        $bdd->query("UPDATE utilisateurs SET portefeuille = portefeuille - '".$a."' WHERE ID = '".$num_dossier."'");
        echo("vous avez bien retirer l'argent dans le portefeuille de l'utilisateur cliquer sur le lien ci-dessous pour revenir à la liste des dossiers<br>
        <a href='View_back_end.php'>Retour accueil</a>");
    }
        $num_dossier = $_GET['dossier'];
        $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE ID = '.$num_dossier.''); 
        $row =$reponse->fetch(); 
?>