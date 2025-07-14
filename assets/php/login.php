<?php
// Initialize an error message variable
$error = '';

if(isset($_POST['login'])){
    $password = $_POST['pWd'] ?? '';

    // Replace with actual validation and authentication logic
    if($password == '123'){
        $token = bin2hex(random_bytes(4));
        $_SESSION['OneTimeToken'] = $token;

        header('Location: /cv/full.php?token=' . urlencode($token));
        exit();
    } else {
        $error = 'Incorrect Token provided';
    }
}
?>