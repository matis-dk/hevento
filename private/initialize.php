<?php

// ======================== FILE SYSTEM VARIABLES ========================
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');

    define("COMPONENTS_PATH", PRIVATE_PATH . '/components');



// ======================== CONFIGS AND FUNCTIONS ========================
    require_once('functions.php');
    require_once('db/db_connection.php');
    require_once('db/db_queries.php');



// ======================== DEV or PROD ========================
    if (checkEnv()) {
        define("WWW_ROOT", 'http://phpstack-127773-427084.cloudwaysapps.com/');
    } else {
        define("WWW_ROOT", 'http://hevento/');
    }


    sessionStart();
?>
