<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('komponent/(:any)','Home::komponenty/$1');
$routes->get('komponenta/(:num)','Home::komponenta/$1');
$routes->get('taby','Home::taby');