<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Profil::home');
$routes->get('/matkul/(:num)', 'Profil::matkul/$1');

$routes->get('pemweb', 'Profil::pemweb');
$routes->get('mbd', 'Profil::mbd');
$routes->get('mjk', 'Profil::mjk');
$routes->get('mpsi', 'Profil::mpsi');
$routes->get('rpl', 'Profil::rpl');
