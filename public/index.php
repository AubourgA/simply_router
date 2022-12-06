<?php

use App\Routing\Router;
use App\Routing\Routers;
use App\Controllers\HomeController;
use App\Controllers\ContactController;
use App\Routing\RouteNotFoundException;

require './../vendor/autoload.php';

define('ROOT', dirname(__DIR__));



$Router = new Routers;
try {

    $Router->run($_SERVER['REQUEST_URI']);
    
} catch(RouteNotFoundException $e) {
    http_response_code(404);
    echo $e->getMessage();

}



