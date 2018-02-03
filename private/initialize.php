<?php

    define("PRIVATE_PATH", dirname(__FILE__));          // this files folder
    define("PROJECT_PATH", dirname(PRIVATE_PATH));      // finding PRIVATE_PATH  and thereafter finding its parent folder
    define("PUBLIC_PATH", PROJECT_PATH . '\public');    // finding PROJECT_PATH and thereafter /public child folder
    define("COMPONENTS_PATH", PRIVATE_PATH . '\components');    // finding PRIVATE_PATH and thereafter /shared child folder
    define('WWW_ROOT', 'http://localhost/hevento/');


    require_once('db/db_connection.php');
    require_once('db/db_queries.php');
    require_once('functions.php');

    // define("WWW_ROOT", 'C:/MAMP/htdocs/myPhpBoilerplate/public');   //dev
    // //define("WWW_ROOT", '');                                       // prod

    sessionStart();
?>
