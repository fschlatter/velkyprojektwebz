<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/komponent/(:any)/(:num)','Home::komponenty/$1/$2');
$routes->get('komponenta/(:num)','Home::komponenta/$1');