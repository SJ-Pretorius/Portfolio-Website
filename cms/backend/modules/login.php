<?php
	$show_login = false;
	
	if (empty($_GET['login_do']) === false) {
		switch ($_GET['login_do']) {
			case "show_home":
				$show_login = true;
				break;
			case "logout":
				unset($_SESSION['logged_in']);
				http_response_code(204);
				exit;
			default:
				$show_login = true;
		}
	}
	
	if ($show_login === true) {
		$GLOBALS['smarty']->assign("login_do", $_GET['login_do']);
		$GLOBALS['smarty']->display("login.tpl");
	}