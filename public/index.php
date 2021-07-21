<?php
include "../vendor/autoload.php";
include_once '../src/config.php';
//include_once '../src/swiftmailer.php';

use Base\Router;


$router = new Router();

$router->process();

