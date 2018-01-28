<?php
function getPDO() {
  try {
      $bdd = new PDO('mysql:host=localhost;dbname=;charset=utf8', '', '');
  }
  catch (Exception $error) {
          die('Erreur : ' . $error->getMessage());
  }
  return $bdd;
}
?>
