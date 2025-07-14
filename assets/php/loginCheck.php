<?php
session_start();
 
if (!isset($_SESSION['OneTimeToken']) || empty($_GET['token']) || $_SESSION['OneTimeToken'] !== $_GET['token']) {
    header('Location: /cv/limited.php');
    exit();
}
 
// Token is valid, now unset it
// unset($_SESSION['OneTimeToken']);
?>