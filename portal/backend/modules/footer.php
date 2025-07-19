<?php
$GLOBALS['smarty']->assign("SCRIPTS", array(
    "/smarty/frontend/js/core.min.js",
    "/smarty/frontend/js/vendor_bundle.min.js",
    "/cms/frontend/core/toast.js",
    "/cms/frontend/core/login.js",
    "/portal/frontend/core/navbar.js",
    "/portal/frontend/core/printer.js",
));
$GLOBALS['smarty']->display("footer.tpl");