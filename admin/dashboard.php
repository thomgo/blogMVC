<?php
session_start();
include'../data/siteInfo.php';
include'../template/header.php';

if (!isset($_SESSION["userEmail"]) OR !isset($_SESSION["userPassword"])) {
  header("Location: login.php");
}
?>
<main class="container">
  <a href="logout.php">Se déconnecter</a>

  <form class="" action="../data/insertArticle.php" method="post">
    <div class="form-group">
        <label for="title" class="col-2 col-form-label">Article title</label>
        <input class="form-control" type="text" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="catcher" class="col-2 col-form-label">Catch sentence</label>
        <input class="form-control" type="text" id="catcher" name="catcher">
    </div>
    <div class="form-group">
        <label for="description" class="col-2 col-form-label">Description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <button type="submit" class="btn backgroundDark">Submit</button>
  </form>
</main>

<?php
include'../template/footer.php';
?>
