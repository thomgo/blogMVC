<?php
// Start the session because the user needs to be logged
session_start();

// Require the site information, the article model and the function to treat the login
require_once'../../model/siteInfo.php';
require_once '../../model/articles.php';
require_once '../../services/logtreatment.php';

// Function to check if the user is authentificated, otherwise redirection to the login page
checkIfUserIsLogged();

// If the user has clicked on the logout link, log out the user
if (!empty($_GET['status']) AND $_GET['status'] === "logout") {
  logOutUser();
}

// If an article is submitted with and image, save the image and the article
if(!empty($_POST) || !empty($_FILES)) {
  insertArticle($_FILES["articleImage"], $_POST);
}

// Get the site information
$site_information = getSiteInfo();

// Show the dashboard with the article form
include "../../vue/admin/dashboardVue.php";

?>
