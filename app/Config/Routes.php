<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

# Login CONTROLLER
$routes->get('login', 'AuthController::formulario_login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

# Register CONTROLLER
$routes->get('register', 'AuthController::formulario_registro');
$routes->post('register', 'AuthController::register');


# PRODUCTOS ROUTES
$routes->get('productos', 'ProductoController::lista_productos');
$routes->get('productos/crear', 'ProductoController::crear_producto');
$routes->post('productos/guardar', 'ProductoController::guardar_producto');
$routes->get('productos/editar/(:num)', 'ProductoController::editar_producto/$1');
$routes->post('productos/actualizar/(:num)', 'ProductoController::actualizar_producto/$1');
$routes->get('productos/eliminar/(:num)', 'ProductoController::eliminar_producto/$1');

# USUARIO ROUTES
$routes->get('usuarios', 'UsuarioController::lista_usuarios');
$routes->get('usuarios/crear', 'UsuarioController::crear_usuario');
$routes->post('usuarios/guardar', 'UsuarioController::guardar_usuario');
$routes->get('usuarios/editar/(:num)', 'UsuarioController::editar_usuario/$1');
$routes->post('usuarios/actualizar/(:num)', 'UsuarioController::actualizar_usuario/$1');
$routes->get('usuarios/eliminar/(:num)', 'UsuarioController::eliminar_usuario/$1');

# VENTAS ROUTES
$routes->get('ventas', 'VentaController::lista_ventas');
$routes->get('ventas/crear', 'VentaController::crear_venta');
$routes->post('ventas/guardar', 'VentaController::guardar_venta');
$routes->get('ventas/ver/(:num)', 'VentaController::detalle_venta/$1');
$routes->get('ventas/eliminar/(:num)', 'VentaController::eliminar_venta/$1');

# CONSULTA ROUTES
$routes->post('contacto', 'ConsultaController::agregar_consulta');
$routes->get('consultas', 'ConsultaController::lista_consultas');
$routes->get('consultas/ver/(:num)', 'ConsultaController::detalle_consulta/$1');
$routes->get('consultas/eliminar/(:num)', 'ConsultaController::eliminar_consulta/$1');

// View client routes
$routes->get('/', 'ClientController::index');
$routes->get('inicio', 'ClientController::index');
$routes->get('contacto', 'ClientController::contacto');
$routes->get('comercializacion', 'ClientController::comercializacion');
$routes->get('quienes-somos', 'ClientController::quienesSomos');
$routes->get('terminos-y-condiciones', 'ClientController::terminosyCondiciones');

// Admin route
$routes->get('admin_dashboard', 'AdminController::AdminDashboard');