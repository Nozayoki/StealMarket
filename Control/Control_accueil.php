<?php
  if (isset($_POST["connexion"])) {
  include("../View/View_connexion.php");
  }
  else {
  include("../View/view_inscription_steal.php");
  }
  ?>