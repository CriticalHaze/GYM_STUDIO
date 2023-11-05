<?php

    if($_SERVER['SERVER_NAME'] == 'localhost'){
        /** Database configuration */
        define('DBNAME', 'test');
        define('DBHOST', 'localhost');
        define('DBUSER', 'root');
        define('DBPASS', 'password');
        define('DBDRIVER', '');

        define('ROOT', 'http://localhost/MVC/public');
    }else{
        /** Database configuration */
        define('DBNAME', 'test');
        define('DBHOST', 'localhost');
        define('DBUSER', 'root');
        define('DBPASS', 'password');
        define('DBDRIVER', '');

        define('ROOT', 'http://localhost/MVC/public');
    }

    define('CSS', ROOT.'/assets/css');
    define('IMG', ROOT.'/assets/images');

    define('APP_NAME', "My MVC website");
    define('APP_DESCRIPTION', "best website of the planet");

    //  show errors
    define('DEBUG', true);
