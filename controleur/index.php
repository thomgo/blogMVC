<?php

include'../model/products.php';
include'../model/siteInfo.php';

$site_information = getSiteInfo();
$products = getAllArticles();

include'../vue/indexVue.php';

 ?>
