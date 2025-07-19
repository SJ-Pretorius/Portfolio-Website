<?php
require_once("config.php");
include_once("backend/modules/header.php");
if (empty($_SESSION['logged_in']) === false) {
    $_GET['layout_do'] = "show_home";
    include_once("backend/modules/layout.php");
    $_GET['dashboard_do']="show_home";
    include_once("backend/modules/dashboard.php");
} else {
    $_GET['login_do'] = "show_home";
    include_once("backend/modules/login.php");
}
include_once("backend/modules/footer.php");