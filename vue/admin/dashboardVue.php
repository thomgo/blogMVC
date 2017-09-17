<?php
include'../../vue/template/header.php';
?>
<main class="container">
  <a href="dashboard.php?status=logout">Se déconnecter</a>

  <form class="" action="dashboard.php" method="post" enctype="multipart/form-data">
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
    <div class="form-group">
      <label for="articleImage">Your image</label>
      <input type="file" class="form-control-file" id="articleImage" aria-describedby="load your image" name="articleImage">
    </div>
    <button type="submit" class="btn backgroundDark">Submit</button>
  </form>
</main>

<?php
include'../../vue/template/footer.php';
?>
