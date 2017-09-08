<?php

$get_single_product = $bdd->prepare('SELECT * FROM Articles a INNER JOIN Images i ON i.id = a.id WHERE a.id = ' . $productiId);
$get_single_product->execute();
$single_product = $get_single_product->fetch(PDO::FETCH_ASSOC);

 ?>
