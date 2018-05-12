<?php
include'template/header.php';
?>
        <main class="container">
          <h2><?php echo $site_information["sub_title"]; ?></h2>

          <div class="row my-5">

            <!-- Loop trough the array of articles and display each one as a card -->
            <?php
              foreach ($articles as $article) {
            ?>
            <div class="col-lg-4 my-3">
              <div class="card">
                <img class="card-img-top img-fluid" src=<?php echo "../" . $article["img_path"]. $article["name"]; ?> alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><?php echo $article["title"]; ?></h4>
                  <p class="card-text"><?php echo $article["catcher"]; ?></p>
                  <a href=<?php echo "../controleur/single.php?key=" . $article["a_id"]; ?> class="btn backgroundDark">See more</a>
                </div>
              </div>
            </div>
            <?php
              }
            ?>

          </div>
        </main>

<?php  include'template/footer.php'; ?>
