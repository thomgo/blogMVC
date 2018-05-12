<?php

// Controller to handle the login page

// Start a session in order to store the user information
session_start();

// get the function to get the site information and handle the login
require_once'../../model/siteInfo.php';
require_once '../../services/logtreatment.php';

// Get an associative array with the site information
$site_information = getSiteInfo();

// If the form is submitted try to log the user
if(!empty($_POST)) {
  logUser($_POST["userEmail"], $_POST["userPassword"]);
}

// the login view with the form
include "../../vue/admin/loginVue.php";

?>
