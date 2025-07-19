<?php
    $GLOBALS['smarty']->assign("STYLES", array(
            "/cms/frontend/assets/css/core.css",
            "/cms/frontend/assets/css/vendor_bundle.css",
        ));
            
    $GLOBALS['smarty']->display("header.tpl");
?>