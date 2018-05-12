<?php

// Get the connexion to the database
require_once('database/dbconnection.php');

// Function to launch a select query on Site_informations table
// Returns an associative array with all the site information 
function getSiteInfo() {
  $response = getPDO()->prepare('SELECT * FROM Site_informations');
  $response->execute();
  return $response->fetch(PDO::FETCH_ASSOC);

}

 ?>
