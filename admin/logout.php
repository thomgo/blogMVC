<?php

session_start();

$_SESSION["userEmail"] = "";
$_SESSION["userPassword"] = "";

session_destroy();
header("Location: login.php");

 ?>
