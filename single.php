<?php
include'data/products.php';
include'data/siteInfo.php';
include'header.php';
?>

<?php
if(isset($_GET["key"])) {
?>

<main class="container">
  <h2><?php echo $products[$_GET["key"]]["product_title"]; ?></h2>
  <img class="singleImage" <?php echo "src=" . $products[$_GET["key"]]["img_path"]; ?> />
  <p><?php echo $products[$_GET["key"]]["product_description"]; ?></p>
</main>

<?php
}
else {
  echo "<h2 class='text-center'>oups il y a une erreur, je ne reconnais pas ce produit</h2>";
}

include'footer.php';
?>
