<?php

// Controller to show an article

// if there is a parameter in the url
if(isset($_GET["key"])) {
  // Clear the parameter
  $articleId = (int)htmlspecialchars($_GET["key"]);
  // Get the information of the article with the corresponding id
  require_once('../model/articles.php');
  $single_article = getSingleArticle($articleId);
}

// get the site information
require_once('../model/siteInfo.php');
$site_information = getSiteInfo();

// Show the single article in the view
include'../vue/singleVue.php';

 ?>
