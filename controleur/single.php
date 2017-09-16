<?php
if(isset($_GET["key"])) {
  $productiId = (int)htmlspecialchars($_GET["key"]);
  include'../model/products.php';
}
include'../model/siteInfo.php';

$site_information = getSiteInfo();
$single_product = getSingleProduct($productiId);


include'../vue/singleVue.php';

 ?>
