<?php
    $GLOBALS['smarty']->assign("STYLES", array(
            "/smarty/frontend/css/core.css",
            "/smarty/frontend/css/vendor_bundle.css",
        ));
            
    $GLOBALS['smarty']->display("header.tpl");
?>