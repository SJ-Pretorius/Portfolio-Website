<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="/cms/frontend/core/business.png">
        <title>SJ Pretorius | CMS</title>
        {foreach $STYLES as $s}
        <link rel="stylesheet" href="{$s}" type="text/css">
        {/foreach}
    </head>

    <body class="layout-admin aside-sticky bg-black text-light">
      {if empty($SESSION['logged_in']) === false}
        <a href="#aside-main" class="btn btn-secondary btn-sidebar-toggle d-inline-block d-lg-none justify-content-center align-items-center p-2 mx-5 mt-3">
          <span>Open Sidebar</span>
        </a>
      {/if}
       