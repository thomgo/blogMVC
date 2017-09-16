<?php
  try {
      $bdd = new PDO('mysql:host=localhost;dbname=simplon_php;charset=utf8', 'root', 'ThomAdmin12');
  }
  catch (Exception $error)
  {
          die('Erreur : ' . $error->getMessage());
  }
?>
