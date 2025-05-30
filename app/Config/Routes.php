<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('monoplaza', 'Home::monoplaza');
$routes->get('pilotos', 'Home::pilotos');
$routes->get('contacto', 'Home::contacto');
$routes->post('login', 'Auth::login');
$routes->post('register', 'Auth::register');
$routes->get('logout', 'Auth::logout');