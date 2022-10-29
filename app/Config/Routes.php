<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::inicio');
$routes->get('/inicioUser', 'Home::inicioUser');
$routes->post('/login', 'Home::login');
$routes->get('/salir', 'Home::salir');
$routes->get('/clientes', 'clientesController::index');
$routes->get('/bancos', 'bancosController::index');
$routes->get('/cuentas', 'cuentasController::index');
$routes->post('/crearcliente', 'clientesController::crearcliente');
$routes->post('/crearbanco', 'bancosController::crearbanco');
$routes->post('/crearcuenta', 'cuentasController::crearcuenta');
$routes->get('/eliminarcliente/(:any)', 'clientesController::eliminarcliente/$1');
$routes->get('/eliminarbanco/(:any)(:any)', 'bancosController::eliminarbanco/$1');
$routes->get('/eliminarcuenta/(:any)', 'cuentasController::eliminarcuenta/$1');
$routes->get('/obtenercliente/(:any)', 'clientesController::obtenercliente/$1');
$routes->get('/obtenerbanco/(:any)', 'bancosController::obtenerbanco/$1');
$routes->get('/obtenercuenta/(:any)', 'cuentasController::obtenercuenta/$1');
$routes->post('/actualizarcliente', 'clientesController::modificarcliente');
$routes->post('/actualizarbanco', 'bancosController::modificarbanco');
$routes->post('/actualizarcuenta', 'cuentasController::modificarcuenta');
$routes->get('/misCuentas/(:any)', 'cuentasController::obtenercuentaTodo/$1');
$routes->get('/cuentascliente/(:any)', 'cuentasController::cuentascliente/$1');
$routes->get('/listarBancos', 'bancosController::obtenerTodos');
$routes->get('/listarclientes/(:any)', 'cuentasController::obtenercuentaBanco/$1');
$routes->get('/sucursales/(:any)', 'bancosController::obtenerSucursales/$1');
$routes->post('/cuentastipo', 'cuentasController::obtenercuentaTipo');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
