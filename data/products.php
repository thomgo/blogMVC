<?php

require_once('dbconnection.php');

$response = $bdd->prepare('SELECT *  FROM Articles a INNER JOIN Images i WHERE i.id = a.id');
$response->execute();
$products = $response->fetchAll(PDO::FETCH_ASSOC);


$get_single_product = $bdd->prepare('SELECT * FROM Articles WHERE id = ' . $productiId);
$get_single_product->execute();
$single_product = $get_single_product->fetch(PDO::FETCH_ASSOC);

 ?>
