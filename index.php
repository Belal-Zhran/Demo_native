<?php
require('functions.php');


//dd($_SERVER);
//$uri =parse_url( $_SERVER['REQUEST_URI'])['path'];
$uri = $_SERVER['REQUEST_URI'];

//dd(parse_url($uri));

if ($uri=="/laracast/"){

    require('controllers/index.php');

}elseif($uri=="/laracast/mission"){

    require ('controllers/mission.php');

}elseif($uri=="/laracast/about"){

    require ('controllers/about.php');

}elseif($uri=="/laracast/contact"){

    require ('controllers/contact.php');

}