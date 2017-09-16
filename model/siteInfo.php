<?php

require_once('database/dbconnection.php');

function getSiteInfo() {
  $response = getPDO()->prepare('SELECT * FROM Site_informations');
  $response->execute();
  return $response->fetch(PDO::FETCH_ASSOC);

}

 ?>
