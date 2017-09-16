<?php

require_once('database/dbconnection.php');

function getAllArticles() {
  $response = getPDO()->prepare('SELECT * FROM Articles a INNER JOIN Images i ON i.id = a.img_id');
  $response->execute();
  return $response->fetchAll(PDO::FETCH_ASSOC);
}

function getSingleProduct($productiId) {
  $response = getPDO()->prepare('SELECT * FROM Articles a INNER JOIN Images i ON i.id = a.img_id WHERE a.a_id = ' . $productiId);
  $response->execute();
  return $response->fetch(PDO::FETCH_ASSOC);
}

 ?>
