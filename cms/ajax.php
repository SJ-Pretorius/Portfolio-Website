<?php
require_once("config.php");
if (empty($_GET['m']) === false) {
    include_once("backend/modules/" . $_GET['m'] . ".php");
} elseif (empty($_POST['m']) === false) {
    include_once("backend/controllers/" . $_POST['m'] . ".php");
}
?>