

<?php
  
  // On démarre la session
  session_start();

  if isset($_SESSION['ta_variable_de_connexion']) { // Si tu es connecté on te déconnecte et on te redirige vers une page.

      // Supression des variables de session et de la session
      $_SESSION = array();
      session_destroy();

      /* Supression des cookies de connexion automatique
      setcookie('login', '');
      setcookie('pass_hache', '');*/
        
      header('Location: index.php?deco=1');

  }else{ // Dans le cas contraire on t'empêche d'accéder à cette page en te redirigeant vers la page que tu veux.

      header('Location: Modele_connexion.php');

  }

        

?>

