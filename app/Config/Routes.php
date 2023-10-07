<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * get se usa para obtener datos del sv . POST se usa para enviar datos al sv--------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/registro', 'usuario_controller::create'); // Ruta para registro
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/acerca', 'Home::acerca');
$routes->get('/login', 'Home::login'); // Ruta para la página de inicio de sesión

// Rutas del registro de usuario
$routes->post('/enviar-form', 'usuario_controller::formValidation');
$routes->get('/registro', 'usuario_controller/create'); 
$routes->post('/registro', 'usuario_controller/formValidation'); 

// Rutas del inicio de sesión
$routes->post('/enviarlogin', 'Login_controller::auth');
$routes->get('/login', 'Login_controller');
$routes->get('/panel_controller', 'Panel_controller::index');

$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');
// Rutas de Recuperación de Contraseña








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