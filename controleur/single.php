<?php
if(isset($_GET["key"])) {
  $productiId = (int)htmlspecialchars($_GET["key"]);
  require_once('../model/products.php');
  $single_product = getSingleArticle($productiId);
}
require_once('../model/siteInfo.php');

$site_information = getSiteInfo();


include'../vue/singleVue.php';

 ?>
