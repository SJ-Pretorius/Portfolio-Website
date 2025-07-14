<?php
/* Smarty version 5.5.1, created on 2025-07-14 16:12:06
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68751036bdb787_53446936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '777bf61e91fcffbe251fc1e4049a7ac117c21ca1' => 
    array (
      0 => 'login.tpl',
      1 => 1752060416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68751036bdb787_53446936 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Apache24\\htdocs\\cms\\backend\\templates';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'show_home' => 
  array (
    'compiled_filepath' => 'C:\\Apache24\\htdocs\\cms\\backend\\templates\\templates_c\\777bf61e91fcffbe251fc1e4049a7ac117c21ca1_0.file_login.tpl.php',
    'uid' => '777bf61e91fcffbe251fc1e4049a7ac117c21ca1',
    'call_name' => 'smarty_template_function_show_home_43761431568751036a38cc0_00506039',
  ),
));
?><div class="d-flex justify-content-center align-items-center vh-100">
    <div class="container p-4 shadow rounded" style="max-width: 400px; background: #23272b; color: #f8f9fa;">
        <?php if ($_smarty_tpl->getValue('login_do')) {
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, $_smarty_tpl->getValue('login_do'), array(), true);
}?>
    </div>
</div>

<?php }
/* smarty_template_function_show_home_43761431568751036a38cc0_00506039 */
if (!function_exists('smarty_template_function_show_home_43761431568751036a38cc0_00506039')) {
function smarty_template_function_show_home_43761431568751036a38cc0_00506039(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = 'C:\\Apache24\\htdocs\\cms\\backend\\templates';
$params = array_merge(array('name'=>'show_home'), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

<h1 class="h4 mb-2 text-center">SJ Pretorius | CMS</h1>
<form class="js-ajax bs-validate" novalidate
    action="ajax.php"
    method="POST"
    data-ajax-container="#ajax_response_container"
    data-ajax-update-url="false"
    data-ajax-show-loading-icon="true"

    data-error-toast-text="<i class='fi fi-circle-spin fi-spin float-start'></i> Please, complete all required fields!"
    data-error-toast-delay="3000"
    data-error-toast-position="top-right"

    data-ajax-callback-function="login.check">
    <input type="hidden" name="m" value="login">
    <input type="hidden" name="login_do" value="login">
    <div class="form-group mb-3">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control bg-dark text-light" required>
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-2">Login</button>
</form>
<?php
}}
/*/ smarty_template_function_show_home_43761431568751036a38cc0_00506039 */
}
