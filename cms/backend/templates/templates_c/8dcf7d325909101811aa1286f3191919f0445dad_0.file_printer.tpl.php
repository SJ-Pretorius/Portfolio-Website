<?php
/* Smarty version 5.5.1, created on 2025-07-14 20:12:28
  from 'file:printer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6875488c30d842_56212052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dcf7d325909101811aa1286f3191919f0445dad' => 
    array (
      0 => 'printer.tpl',
      1 => 1752058938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6875488c30d842_56212052 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Apache24\\htdocs\\cms\\backend\\templates';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'printer' => 
  array (
    'compiled_filepath' => 'C:\\Apache24\\htdocs\\cms\\backend\\templates\\templates_c\\8dcf7d325909101811aa1286f3191919f0445dad_0.file_printer.tpl.php',
    'uid' => '8dcf7d325909101811aa1286f3191919f0445dad',
    'call_name' => 'smarty_template_function_printer_3202584686875488c2b78f1_09435541',
  ),
));
?><h1>Thermal Printer</h1>
<?php if ($_smarty_tpl->getValue('printer_do') == 'show_home') {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'printer', array(), true);?>

<?php } else { ?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, $_smarty_tpl->getValue('printer_do'), array(), true);?>

<?php }?>


<?php }
/* smarty_template_function_printer_3202584686875488c2b78f1_09435541 */
if (!function_exists('smarty_template_function_printer_3202584686875488c2b78f1_09435541')) {
function smarty_template_function_printer_3202584686875488c2b78f1_09435541(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = 'C:\\Apache24\\htdocs\\cms\\backend\\templates';
$params = array_merge(array('name'=>'printer'), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <textarea id="printer_text" class="form-control bg-dark text-light" placeholder="Enter text to print"></textarea>
    <button class="btn btn-sm mt-3 btn-primary" onclick="printer.print()">Print</button>
<?php
}}
/*/ smarty_template_function_printer_3202584686875488c2b78f1_09435541 */
}
