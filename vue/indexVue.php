<?php
include'template/header.php';
?>
        <!-- Add your site or application content here -->
        <main class="container">
          <h2><?php echo $site_information["sub_title"]; ?></h2>

          <div class="row my-5">

            <?php
              foreach ($products as $product) {
            ?>
            <div class="col-lg-4 my-3">
              <div class="card">
                <img class="card-img-top img-fluid" src=<?php echo "../" . $product["img_path"]. $product["name"]; ?> alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><?php echo $product["title"]; ?></h4>
                  <p class="card-text"><?php echo $product["catcher"]; ?></p>
                  <a href=<?php echo "../controleur/single.php?key=" . $product["a_id"]; ?> class="btn backgroundDark">See more</a>
                </div>
              </div>
            </div>
            <?php
              }
            ?>

          </div>
        </main>

<?php  include'template/footer.php'; ?>
