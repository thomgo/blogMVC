<?php

require_once('../model/products.php');
require_once('../model/siteInfo.php');

$site_information = getSiteInfo();
$products = getAllArticles();

include'../vue/indexVue.php';

 ?>
