<?php


use proSrc\http\Request;
use proSrc\http\Response;
use proSrc\http\Route;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';


$route = new Route(new Request(), new Response());
$route->resolve();