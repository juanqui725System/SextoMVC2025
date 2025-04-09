<?php
$routes = [
    'home' => ['controller' => 'HomeController',
                'method' => 'index'],
];

//devolver la vista si existe, de lo contrario, cargar 404
function resolveRoute($route,$routes)
{
   return $routes[$route] ?? '404'; 
}
