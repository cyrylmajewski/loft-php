<?php
include "../vendor/autoload.php";
include_once '../src/config.php';

use Base\Router;


$router = new Router();

$router->process();

