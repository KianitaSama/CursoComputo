<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Users');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('./', 'Users::index');
$routes->get('intento', 'Prueba::intento');
//$routes->get('borrar', 'Dashboard::Borrar');
$routes->get('listaUsuario', 'Dashboard::mostrarlista');
$routes->post('Buscador', 'Dashboard::listas');
//$routes->get('listas', 'Dashboard::listas');
//$routes->get('busqueda', 'Prueba::busqueda');
//$routes->get('buscar', 'Prueba::buscar');
//$routes->get('buscador', 'Prueba:: buscador');
//$routes->get('registro', 'Dashboard::registro');
//$routes->match(['get','post'],'buscador',  'Prueba:: buscador');
//$routes->match(['get','post'],'listas',  'Dashboard::listas');
$routes->match(['get','post'],'busqueda',  'Prueba::busqueda');
$routes->match(['get','post'],'borrar',  'Dashboard::Borrar');
$routes->match(['get','post'],'rgrupos',  'Prueba::Fgrupos');
$routes->match(['get','post'],'cursos',  'Prueba::Ggrupos');
$routes->match(['get','post'],'registro',  'Dashboard::Guadar');
$routes->match(['get','post'],'actualizar',  'Dashboard::actualizar');
$routes->match(['get','post'],'inicio', 'Users::index');
$routes->match(['get','post'],'dashboard', 'Dashboard::index');
$routes->match(['get','post'],'logout', 'Users::logout');
$routes->match(['get','post'],'register', 'Users::register');
$routes->match(['get','post'],'profile', 'Users::profile');
$routes->match(['get','post'],'Editar',  'Dashboard::editarR');


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
