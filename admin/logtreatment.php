<?php
session_start();
require_once('../data/dbconnection.php');

$response = $bdd->prepare("SELECT * FROM Users WHERE mail ='". $_POST["userEmail"]."' ");
$response->execute();
$user = $response->fetch(PDO::FETCH_ASSOC);

if($user AND $_POST["userPassword"] === $user["password"]) {
  $_SESSION["userEmail"] = $user["mail"];
  $_SESSION["userPassword"] = $user["password"];
  header("Location: dashboard.php");
}
else {
  header("Location: login.php");
}

 ?>
