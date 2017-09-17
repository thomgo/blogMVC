<?php
require_once('../../model/database/dbconnection.php');

function logUser($userEmail, $userPassword) {
  $response = getPDO()->prepare("SELECT * FROM Users WHERE mail ='". $userEmail."' ");
  $response->execute();
  $user = $response->fetch(PDO::FETCH_ASSOC);

  if($user AND $userPassword === $user["password"]) {
    $_SESSION["userEmail"] = $user["mail"];
    $_SESSION["userPassword"] = $user["password"];
    header("Location: dashboard.php");
  }
  else {
    header("Location: login.php");
  }
}

function checkIfUserIsLogged() {
  if (!isset($_SESSION["userEmail"]) OR !isset($_SESSION["userPassword"])) {
    header("Location: login.php");
  }
}

function logOutUser() {
  $_SESSION["userEmail"] = "";
  $_SESSION["userPassword"] = "";
  session_destroy();
  header("Location: login.php");
}
 ?>
