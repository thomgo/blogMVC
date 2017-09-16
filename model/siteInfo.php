<?php

require_once('dbconnection.php');

$response = $bdd->prepare('SELECT * FROM Site_informations');
$response->execute();
$site_information = $response->fetch(PDO::FETCH_ASSOC);

 ?>
