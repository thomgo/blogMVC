<?php
session_start();
include'../data/siteInfo.php';
include'../template/header.php';

if (!isset($_SESSION["userEmail"]) OR !isset($_SESSION["userPassword"])) {
  header("Location: login.php");
}
?>

<a href="logout.php">Se déconnecter</a>

<?php
include'../template/footer.php';
?>
