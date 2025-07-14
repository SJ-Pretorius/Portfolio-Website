<?php
/* Smarty version 5.5.1, created on 2025-07-14 16:12:10
  from 'file:dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6875103aeef738_17120986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b18e8aae0f4b5b49fb39f75cef0780959e8bf8ab' => 
    array (
      0 => 'dashboard.tpl',
      1 => 1751753429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6875103aeef738_17120986 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Apache24\\htdocs\\cms\\backend\\templates';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'dashboard' => 
  array (
    'compiled_filepath' => 'C:\\Apache24\\htdocs\\cms\\backend\\templates\\templates_c\\b18e8aae0f4b5b49fb39f75cef0780959e8bf8ab_0.file_dashboard.tpl.php',
    'uid' => 'b18e8aae0f4b5b49fb39f75cef0780959e8bf8ab',
    'call_name' => 'smarty_template_function_dashboard_8326841196875103ae7b7c4_48086860',
  ),
));
?><h1>Dashboard</h1>
<?php if ($_smarty_tpl->getValue('dashboard_do') == 'show_home') {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dashboard', array(), true);?>

<?php } else { ?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, $_smarty_tpl->getValue('dashboard_do'), array(), true);?>

<?php }?>


<?php }
/* smarty_template_function_dashboard_8326841196875103ae7b7c4_48086860 */
if (!function_exists('smarty_template_function_dashboard_8326841196875103ae7b7c4_48086860')) {
function smarty_template_function_dashboard_8326841196875103ae7b7c4_48086860(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = 'C:\\Apache24\\htdocs\\cms\\backend\\templates';
$params = array_merge(array('name'=>'dashboard'), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <p>Graphs comes here!</p>
<?php
}}
/*/ smarty_template_function_dashboard_8326841196875103ae7b7c4_48086860 */
}
