<?php
$GLOBALS['smarty']->assign("SCRIPTS", array(
    "/cms/frontend/assets/js/core.min.js",
    "/cms/frontend/assets/js/vendor_bundle.min.js",
    "/cms/frontend/core/toast.js",
    "/cms/frontend/core/login.js",
    "/portal/frontend/core/navbar.js"
));
$GLOBALS['smarty']->display("footer.tpl");