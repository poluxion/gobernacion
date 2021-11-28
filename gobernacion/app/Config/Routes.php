<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('mainControllers');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'mainControllers::index');
$routes->get('login', 'mainControllers::login');
$routes->get('userLogin', 'mainControllers::userLogin');
$routes->get('registerUser', 'mainControllers::registerUser');
$routes->get('crearReporte', 'mainControllers::crearReporte'); 
$routes->get('crearFrecuencias', 'mainControllers::crearFrecuencias'); 
$routes->get('crearDiaNoHabil', 'mainControllers::crearDiaNoHabil'); 
$routes->get('tableUser', 'mainControllers::tableUser');
$routes->get('/obtenerUser/(:any)', 'mainControllers::obtenerUser/$1');
$routes->get('/obtenerReporte/(:any)', 'mainControllers::obtenerReporte/$1');
$routes->get('/obtenerFrecuencia/(:any)', 'mainControllers::obtenerFrecuencia/$1');
$routes->get('/obtenerFrecuencia', 'mainControllers::obtenerFrecuencia');
$routes->get('/obtenerUser', 'mainControllers::obtenerUser');
$routes->get('/obtenerDiaNoHabil', 'mainControllers::obtenerDiaNoHabil');
$routes->get('/obtenerDiaNoHabil/(:any)', 'mainControllers::obtenerDiaNoHabil/$1');
$routes->get('reportList', 'mainControllers::reportList'); 
$routes->get('frecuenceList', 'mainControllers::frecuenceList'); 
$routes->get('noHabilesList', 'mainControllers::noHabilesList'); 
$routes->get('/obtenerUsuario', 'mainControllers::obtenerUsuario');
$routes->get('/eliminar/(:any)', 'mainController::eliminar/$1');
$routes->get('/editUser', 'mainControllers::editUser');
$routes->get('/editReport', 'mainControllers::editReport');
$routes->get('/editFrecuence', 'mainControllers::editFrecuence');
$routes->post('registerUser', 'mainControllers::registerUser');
$routes->post('/crearReporte', 'mainControllers::crearReporte'); 
$routes->post('/crearFrecuencia', 'mainControllers::crearFrecuencia'); 
$routes->post('/crearDiaNoHabil', 'mainControllers::crearDiaNoHabil'); 


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
