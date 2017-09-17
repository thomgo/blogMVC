<?php
session_start();
require_once'../../model/siteInfo.php';
require_once '../../services/logtreatment.php';

$site_information = getSiteInfo();

if(!empty($_POST)) {
  logUser($_POST["userEmail"], $_POST["userPassword"]);
}

include "../../vue/admin/loginVue.php";

?>
