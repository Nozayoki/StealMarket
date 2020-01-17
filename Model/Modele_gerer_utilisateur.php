 <?php 
    $bdd = new PDO("mysql:host=localhost;dbname=stealmarket","root","");
    if (isset($_GET['ban'])){
        $num_dossier = $_GET['dossier'];
        $bdd->query('UPDATE utilisateurs SET fonction = "bannie" WHERE ID = '.$num_dossier.''); 
        echo("Le compte à bien été bannie cliquer sur le lien ci-dessous pour revenir à la liste des dossiers <br>
            <a href='View_back_end.php'>Retour accueil</a>");  
    } else if (isset($_GET['deban'])) {
        $num_dossier = $_GET['dossier'];
        $bdd->query('UPDATE utilisateurs SET fonction = "utilisateur" WHERE ID = '.$num_dossier.''); 
         echo("Le compte à bien été débannie cliquer sur le lien ci-dessous pour revenir à la liste des dossiers <br>
        <a href='View_back_end.php'>Retour accueil</a>"); 
    } 
        $num_dossier = $_GET['dossier'];
        $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE ID = '.$num_dossier.''); 
        $row =$reponse->fetch(); 
?>