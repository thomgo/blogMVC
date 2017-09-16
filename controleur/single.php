<?php
if(isset($_GET["key"])) {
  $productiId = (int)htmlspecialchars($_GET["key"]);
  include'../model/singleproduct.php';
}
include'../model/siteInfo.php';


include'../vue/singleVue.php';

 ?>
