<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// AUTH ROUTES

#USUARIO CONTROLLER (GET)
$routes->get('login', 'AuthController::showLogin');
$routes->get('register', 'AuthController::showRegister');

#USUARIO CONTROLLER (POST)
$routes->post('login', 'AuthController::login');
$routes->post('register', 'AuthController::register');

// CLIENT ROUTES

// HOME ROUTES
$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::index');
$routes->get('contacto', 'Home::contacto');
$routes->post('contacto', 'Usuarios_controller::add_consulta');
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('quienes-somos', 'Home::quienesSomos');
$routes->get('terminos-y-condiciones', 'Home::terminosyCondiciones');

// ADMIN ROUTES
$routes->get('admin_dashboard', 'AdminController::AdminDashboard');