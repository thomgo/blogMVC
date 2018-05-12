<?php
include'template/header.php';

// If there is an id in the url
if(isset($single_product)) {
?>

<main class="container">
  <h2><?php echo $single_product["title"]; ?></h2>
  <!-- Show the single article -->
  <img class="singleImage" <?php echo "src=../" . $single_product["img_path"] . $single_product["name"]; ?> />
  <p><?php echo $single_product["description"]; ?></p>
</main>

<?php
}
//Otherwise show a message to the user
else {
  echo "<h2 class='text-center'>oups il y a une erreur, je ne reconnais pas ce produit</h2>";
}

include'template/footer.php';
?>
