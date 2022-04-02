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
$routes->setDefaultController('Home');
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
$routes->get('/', 'Main::main');
$routes->get('/login', 'Main::login');
$routes->get('/kiba', 'Home::kiba');
$routes->get('/main/dokumen-umum/menu1', 'DokumenUmum::menu1');
$routes->get('/main/dokumen-umum/menu2', 'DokumenUmum::menu2');
$routes->get('/main/dokumen-umum/menu3', 'DokumenUmum::menu3');
$routes->get('/main/dokumen-umum/menu4', 'DokumenUmum::menu4');
$routes->get('/main/dokumen-umum/menu5', 'DokumenUmum::menu5');
$routes->get('/main/dokumen-umum/menu6', 'DokumenUmum::menu6');
$routes->get('/main/pendataan-objek-pajak/menu1', 'PendataanObjekPajak::menu1');
$routes->get('/main/pendataan-objek-pajak/menu2', 'PendataanObjekPajak::menu2');
$routes->get('/main/pendataan-objek-pajak/menu3', 'PendataanObjekPajak::menu3');
$routes->get('/main/pendataan-objek-pajak/menu4', 'PendataanObjekPajak::menu4');
$routes->get('/main/pendataan-objek-pajak/menu5', 'PendataanObjekPajak::menu5');
$routes->get('/main/pendataan-objek-pajak/menu6', 'PendataanObjekPajak::menu6');
$routes->get('/main/pendataan-objek-pajak/menu7', 'PendataanObjekPajak::menu7');
$routes->get('/main/pendataan-objek-pajak/menu8', 'PendataanObjekPajak::menu8');
$routes->get('/main/pendataan-objek-pajak/menu9', 'PendataanObjekPajak::menu9');
$routes->get('/main/pendataan-objek-pajak/menu10', 'PendataanObjekPajak::menu10');
$routes->get('/main/pendataan-objek-pajak/menu11', 'PendataanObjekPajak::menu11');
$routes->get('/main/pendataan-objek-pajak/menu12', 'PendataanObjekPajak::menu12');

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
