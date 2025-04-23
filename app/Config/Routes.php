<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Home::login');

$routes->get('/register', 'Home::register');

$routes->get('inicio', 'Home::index');

$routes->get('contacto', 'Home::contacto');

$routes->get('comercializacion', 'Home::comercializacion');

$routes->get('quienes-somos', 'Home::quienesSomos');

$routes->get('terminos-y-condiciones', 'Home::terminosyCondiciones');
