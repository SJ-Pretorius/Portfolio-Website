<?php
	$show_printer = false;
	
	if (empty($_GET['printer_do']) === false && $_SESSION['logged_in'] === true) {
		switch ($_GET['printer_do']) {
			case "show_home":
				$show_printer = true;
				break;
			default:
				$show_printer = true;
		}
	}
	
	if ($show_printer === true) {
		$GLOBALS['smarty']->assign("printer_do", $_GET['printer_do']);
		$GLOBALS['smarty']->display("printer.tpl");
	}