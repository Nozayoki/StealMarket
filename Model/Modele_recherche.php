<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8','root','');

$articles = $bdd->query('SELECT * FROM articles ORDER BY id DESC');
//q pour query 
if(isset($_POST['q']) AND !empty($_POST['q'])) {
   $qa = htmlspecialchars($_POST['q']);
   $articles = $bdd->query('SELECT * FROM articles WHERE articles LIKE "%'.$qa.'%" ORDER BY id DESC');
   if($articles->rowCount() == 0) {
      $articles = $bdd->query('SELECT * FROM articles WHERE CONCAT(articles, categorie) LIKE "%'.$qa.'%" ORDER BY id DESC');
   }
}
?>