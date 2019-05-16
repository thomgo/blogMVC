<?php include'../../vue/template/header.php';?>
<main class="container">
  <?php
    if(isset($_GET["message"]) AND !empty($_GET["message"])) {
      echo "<div class='alert alert-danger w-50 my-2' role='alert'>" . htmlspecialchars($_GET["message"]) . "</div>";
    }
  ?>
  <form class="" action="" method="post">
    <div class="form-group">
        <label for="userEmail" class="col-2 col-form-label">Your email</label>
        <input class="form-control" type="email" id="userEmail" name="userEmail">
    </div>
    </div>
    <div class="form-group">
      <label for="userPass">Password</label>
      <input type="password" class="form-control" id="UserPass" name="userPassword">
    </div>
    <button type="submit" class="btn backgroundDark">Submit</button>
  </form>
</main>

<?php include'../../vue/template/footer.php'; ?>
