<?php
    ini_set('display_errors', 1);

    define('ABSPATH', __DIR__);
    define('ADMIN_PATH', ABSPATH.'/admin');
    define('ADMIN_SCRIPT_PATH', ADMIN_PATH.'/scripts');

    //echo ABSPATH;
    //exit;

    //ini_set('display_errors', 1);
    require_once ABSPATH.'/config/database.php';
    require_once ADMIN_SCRIPT_PATH.'/read.php';
    require_once ADMIN_SCRIPT_PATH.'/login.php';

