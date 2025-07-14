<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="container p-4 shadow rounded" style="max-width: 400px; background: #23272b; color: #f8f9fa;">
        {if $login_do}{call $login_do}{/if}
    </div>
</div>

{function name=show_home}
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
{/function}