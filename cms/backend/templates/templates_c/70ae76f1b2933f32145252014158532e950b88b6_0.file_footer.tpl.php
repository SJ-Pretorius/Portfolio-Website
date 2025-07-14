<?php
/* Smarty version 5.5.1, created on 2025-07-14 20:12:26
  from 'file:footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6875488a8fddd9_28066638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70ae76f1b2933f32145252014158532e950b88b6' => 
    array (
      0 => 'footer.tpl',
      1 => 1751725791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6875488a8fddd9_28066638 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Apache24\\htdocs\\cms\\backend\\templates';
?>            </main>
        </div>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('SCRIPTS'), 's');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach1DoElse = false;
?>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('s');?>
"><?php echo '</script'; ?>
>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        <div id="ajax_response_container"></div>
    </body>
</html><?php }
}
