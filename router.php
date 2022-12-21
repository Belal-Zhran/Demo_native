<?php

$uri =parse_url( $_SERVER['REQUEST_URI'])['path'];

$routes =[
    "/laracast/"        => 'controllers/index.php',
    "/laracast/mission" => 'controllers/mission.php',
    "/laracast/about"   => 'controllers/about.php',
    "/laracast/contact" => 'controllers/contact.php'

];

function abort( $code = 404){

    http_response_code($code);
    require("views/{$code}.php");
    die();
}

function routeToController($uri, $routes){

    if (array_key_exists($uri, $routes)){
        require($routes[$uri]);
    }else{
       //Not find page
       abort();
    }
}

routeToController($uri, $routes);