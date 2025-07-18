<?php
	$show_dashboard = false;
	
	if (empty($_GET['dashboard_do']) === false && isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
		switch ($_GET['dashboard_do']) {
			case "show_home":
				$show_dashboard = true;
				break;
			default:
				$show_dashboard = true;
		}
	}
	
	if ($show_dashboard === true) {
		$GLOBALS['smarty']->assign("dashboard_do", $_GET['dashboard_do']);
		$GLOBALS['smarty']->display("dashboard.tpl");
	}