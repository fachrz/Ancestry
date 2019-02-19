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
$routes->add('edit_page', new Routing\Route('/edit/{email}', [
    '_controller' => 'Application\Controllers\Home::edit'
]));
$routes->add('delete', new Routing\Route('/delete/{user_id}', [
    '_controller' => 'Application\Controllers\Home::delete'
]));

return $routes;
?>