<?php

require_once('dbconnection.php');

$response = $bdd->prepare('SELECT * FROM Articles');
$response->execute();
$products = $response->fetchAll(PDO::FETCH_ASSOC);

 ?>
