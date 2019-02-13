<?php

use Symfony\Component\Routing;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('home_page', new Routing\Route('/', [
    '_controller' => 'Application\Controllers\Home::index'
]));
$routes->add('jsondata', new Routing\Route('/jsondata', [
    '_controller' => 'Application\Controllers\Home::jsondata'
]));
return $routes;
?>