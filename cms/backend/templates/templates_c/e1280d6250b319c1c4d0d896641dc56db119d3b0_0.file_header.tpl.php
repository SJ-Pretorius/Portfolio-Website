<?php
/* Smarty version 5.5.1, created on 2025-07-14 16:12:10
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6875103acdb130_42517275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1280d6250b319c1c4d0d896641dc56db119d3b0' => 
    array (
      0 => 'header.tpl',
      1 => 1751738957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6875103acdb130_42517275 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Apache24\\htdocs\\cms\\backend\\templates';
?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="/cms/frontend/core/business.png">
        <title>SJ Pretorius | CMS</title>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('STYLES'), 's');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach0DoElse = false;
?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('s');?>
" type="text/css">
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </head>

    <body class="layout-admin aside-sticky bg-black text-light">
      <?php if (( !true || empty($_smarty_tpl->getValue('SESSION')['logged_in'])) === false) {?>
        <a href="#aside-main" class="btn btn-secondary btn-sidebar-toggle d-inline-block d-lg-none justify-content-center align-items-center p-2 mx-5 mt-3">
          <span>Open Sidebar</span>
        </a>
      <?php }?>
       <?php }
}
