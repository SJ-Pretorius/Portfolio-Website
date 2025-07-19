<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require __DIR__ . '/../smarty/backend/libs/Smarty.class.php';
use Smarty\Smarty;
$GLOBALS['smarty'] = new Smarty();
$GLOBALS['smarty']->setTemplateDir("backend/templates");	
$GLOBALS['smarty']->setCompileDir(__DIR__ . "/../cms/backend/templates/templates_c");
$GLOBALS['smarty']->force_compile = true; //effectively disables caching of template files

spl_autoload_register(function ($class) {
	include __DIR__ . "/../classes/" . strtolower($class) . ".php";
});

require __DIR__ . '/../vendor/autoload.php';

$GLOBALS['database'] = new Database();

$GLOBALS['smarty']->assign('SESSION', $_SESSION);
