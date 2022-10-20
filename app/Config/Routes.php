<?php

namespace Config;

use App\Models\Departamento;

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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

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
//EDITORIALES
$routes->get('gerentes', 'Restaurantes::listarGerentes');
$routes->get('ingresar_gerente', 'Restaurantes::agregarEditoriales');
$routes->get('ingresar_mesero', 'Restaurantes::agregarEditoriales');
$routes->get('eliminar_editorial/(:num)', 'Editoriales::eliminarEditorial/$1,0');
$routes->get('datos_editorial/(:num)', 'Editoriales::verDatosEditorial/$1,0');
$routes->get('actualizar_editorial', 'Editoriales::actualizarEditorial');
$routes->post('sesion_gerente', 'Gerentes::iniciarSesion');

$routes->get('meseros', 'Meseros::buscarMeseros');
$routes->post('guardar_mesero', 'Meseros::guardarMeseros');
$routes->get('eliminar_mesero/(:num)', 'Meseros::eliminarMesero/$1,0');
$routes->post('actualizar_mesero1', 'Meseros::actualizarMesero');
$routes->get('actualizar_mesero/(:num)', 'Meseros::verMesero/$1,0');

$routes->get('cocineros', 'Cocineros::buscarCocineros');
$routes->post('guardar_cocinero', 'Cocineros::guardarCocineros');
$routes->get('eliminar_cocinero/(:num)', 'Cocineros::eliminarCocinero/$1,0');
$routes->post('actualizar_cocinero1', 'Cocineros::actualizarCocinero');
$routes->get('actualizar_cocinero/(:num)', 'Cocineros::verCocinero/$1,0');

$routes->get('estados', 'Estados::buscarEstado');
$routes->post('guardar_estado', 'Estados::guardarEstado');
$routes->get('eliminar_estado/(:num)', 'Estados::eliminarEstado/$1,0');
$routes->post('actualizar_estado1', 'Estados::actualizarEstado');
$routes->get('actualizar_estado/(:num)', 'Estados::verEstado/$1,0');

$routes->get('especialidades', "Especialidades::buscarEspecialidad");
$routes->post('guardar_especialidad', 'Especialidades::guardarEspecialidad');
$routes->get('eliminar_especialidad/(:num)', 'Especialidades::eliminarEspecialidad/$1,0');
$routes->post('actualizar_especialidad1', 'Especialidades::actualizarEspecialidad');
$routes->get('actualizar_especialidad/(:num)', 'Especialidades::verEspecialidad/$1,0');
