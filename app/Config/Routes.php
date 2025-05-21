<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('monoplaza', 'Home::monoplaza');
// $routes->get('noticias', 'Home::noticias');