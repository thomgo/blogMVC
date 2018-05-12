<?php

// Home page controller

// Get the functions to query the articles table and the site info table
require_once('../model/products.php');
require_once('../model/siteInfo.php');

// get the site informations as an associative array
$site_information = getSiteInfo();
// get all the articles as an associative array
$products = getAllArticles();

// Show the view of the home page to display the information on site and articles
include'../vue/indexVue.php';

 ?>
