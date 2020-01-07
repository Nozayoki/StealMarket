<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=stealmarket;charset=utf8", "root", "");
$articles = $bdd->query('SELECT * FROM articles WHERE categorie LIKE "Montre"');
?>