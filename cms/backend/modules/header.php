<?php
    $GLOBALS['smarty']->assign("STYLES", array(
            "frontend/assets/css/core.css",
            "frontend/assets/css/vendor_bundle.css",
        ));
            
    $GLOBALS['smarty']->display("header.tpl");
?>