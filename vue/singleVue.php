<?php
include'template/header.php';

if(isset($_GET["key"])) {
?>

<main class="container">
  <h2><?php echo $single_product["title"]; ?></h2>
  <img class="singleImage" <?php echo "src=../" . $single_product["img_path"] . $single_product["name"]; ?> />
  <p><?php echo $single_product["description"]; ?></p>
</main>

<?php
}
else {
  echo "<h2 class='text-center'>oups il y a une erreur, je ne reconnais pas ce produit</h2>";
}

include'template/footer.php';
?>
