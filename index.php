<?php

    //This is our controller

    // Turn on error reporting - this is critical!
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Require the autoload file
    require_once('vendor/autoload.php');

    //Create an instance of the base class
    $f3 = Base::instance();

    //Define a default route
    $f3->route('GET /', function (){
        $view = new Template();
        echo $view->render('views/home.html');
    });

    //Run fat free
    $f3->run();