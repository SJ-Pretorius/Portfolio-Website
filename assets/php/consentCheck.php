<?php
session_start();

// Check if the user consented
if (!isset($_SESSION['consented'])) {
    // Redirect back to the consent page
    header('Location: /');
    exit;
}
?>