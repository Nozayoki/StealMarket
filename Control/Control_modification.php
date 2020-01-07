<?php
    if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
   $edit_id = htmlspecialchars($_GET['edit']);
   $edit_article = $bdd->prepare('SELECT * FROM articles WHERE ID = ?');
   $edit_article->execute(array($edit_id));
   
   if($edit_article->rowCount() == 1) {
   
      $edit_article = $edit_article->fetch();
   
   } else {
   
      die('Erreur : l\'article n\'existe pas...');
   
   }
}

?>