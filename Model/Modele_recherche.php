<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8','root','');

$articles = $bdd->query('SELECT * FROM articles ORDER BY id DESC');
//q pour query 
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $articles = $bdd->query('SELECT * FROM articles WHERE articles LIKE "%'.$q.'%" ORDER BY id DESC');
   if($articles->rowCount() == 0) {
      $articles = $bdd->query('SELECT * FROM articles WHERE CONCAT(articles, categorie) LIKE "%'.$q.'%" ORDER BY id DESC');
   }
}
?>