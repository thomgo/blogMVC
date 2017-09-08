<?php

require_once('dbconnection.php');

$response = $bdd->prepare('SELECT *  FROM Articles a INNER JOIN Images i WHERE i.id = a.id');
$response->execute();
$products = $response->fetchAll(PDO::FETCH_ASSOC);

// $response = $bdd->prepare('SELECT * FROM Articles');
// $response->execute();
// $products = $response->fetchAll(PDO::FETCH_ASSOC);

 ?>
