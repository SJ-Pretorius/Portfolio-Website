<?php
	$show_layout = false;
	
	if (empty($_GET['layout_do']) === false && $_SESSION['logged_in'] === true) {
		switch ($_GET['layout_do']) {
			case "show_layout":
				$show_layout = true;
				break;
			default:
				$show_layout = true;
		}
	}
	
	if ($show_layout === true) {
		$GLOBALS['smarty']->assign("layout_do", $_GET['layout_do']);
		$GLOBALS['smarty']->display("layout.tpl");
	}