<?php
require_once('dbconnection.php');

$get_single_product = $bdd->prepare('SELECT * FROM Articles a INNER JOIN Images i ON i.id = a.img_id WHERE a.a_id = ' . $productiId);
$get_single_product->execute();
$single_product = $get_single_product->fetch(PDO::FETCH_ASSOC);

 ?>
