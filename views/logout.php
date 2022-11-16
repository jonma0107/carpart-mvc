<?php
  require_once('../controllers/load.php');
  if(!$session->logout()) {redirect("../index.php");}
?>
