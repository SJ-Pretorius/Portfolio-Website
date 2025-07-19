<?php
header('Content-Type: application/json');
if (empty($_POST['login_do']) === false) {
    switch ($_POST['login_do']) {
        case "login":
            $c_password = new Password();
            $password = $c_password->getCMSPassword();
            if ($_POST['password'] == $password[0]['cms']) {
                $_SESSION['logged_in'] = true;
                echo json_encode([
                    'success' => true
                ]);
            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'Incorrect Password'
                ]);
            }
            break;
    }
}