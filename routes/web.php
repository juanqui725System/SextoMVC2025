<?php
$routes = [
    'home' => ['controller' => 'HomeController','method' => 'index'],
    '' => ['controller' => 'HomeController', 'method' => 'index'], /* por default ingresa a home*/
];

//devolver la vista si existe, de lo contrario, cargar 404
function resolveRoute($route,$routes)
{
   return $routes[$route] ?? '404'; 
}
