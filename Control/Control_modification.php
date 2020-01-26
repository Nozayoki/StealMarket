<?php
    if(isset($_POST['edit']) AND !empty($_POST['edit'])) {
   $edit_id = htmlspecialchars($_POST['edit']);
   $edit_article = $bdd->prepare('SELECT * FROM articles WHERE ID = ?');
   $edit_article->execute(array($edit_id));
   
   if($edit_article->rowCount() == 1) {
   
      $edit_article = $edit_article->fetch();
   
   } else {
   
      die('Erreur : l\'article n\'existe pas...');
   
   }
}

?>