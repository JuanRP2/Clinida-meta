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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::inicio');
$routes->post('/login', 'Home::login',['as'=>'login']);
$routes->get('/salir', 'Home::salir',['as'=>'salir']);
$routes->get('/turnos', 'turnosController::turnos');
$routes->post('/cambioturno', 'turnosController::registro',['as' => 'cambioturno']);
$routes->get('/listarturno','turnosController::listar',['as' => 'listarturno']); 
$routes->get('/permisos', 'permisosController::permisos');
$routes->post('/solpermiso', 'permisosController::registro',['as' => 'solpermiso']);
$routes->get('/listarpermiso','permisosController::listar',['as' => 'listarpermiso']); 


$routes->get('/radicar', 'radicarController::radicar');
$routes->post('/radicarva', 'radicarController::registro',['as' => 'radicarva']);
$routes->get('/listarradicar','radicarController::listar',['as' => 'listarradicar']);
$routes->get('/cuadroturno', 'cuadroturnoController::cuadroturno');
$routes->post('/prueba', 'Home::prueba',['as' => 'prueba']);
$routes->get('/horasextras','horasextrasController::horasextras' );
$routes->get('/registrarhoras','horasextrasController::listar',['as' => 'registrarhoras}']); 
$routes->post('/horas', 'horasextrasController::registro',['as' => 'horas']);
$routes->post('/cantidad', 'horasextrasController::registro',['as' => 'cantidad']);
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
