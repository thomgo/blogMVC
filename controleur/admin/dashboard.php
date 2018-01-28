<?php
session_start();
require_once'../../model/siteInfo.php';
require_once '../../model/products.php';
require_once '../../services/logtreatment.php';

checkIfUserIsLogged();

if (!empty($_GET['status']) AND $_GET['status'] === "logout") {
  logOutUser();
}

if(!empty($_POST) || !empty($_FILES)) {
  insertArticle();
}

$site_information = getSiteInfo();

include "../../vue/admin/dashboardVue.php";

?>
