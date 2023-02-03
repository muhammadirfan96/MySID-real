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
$routes->get('/info_desa', 'InfoDesa::index');
$routes->get('/kependudukan', 'Kependudukan::index');
$routes->get('/statistik', 'Statistik::index');
$routes->get('/layanan_surat', 'LayananSurat::index');
$routes->get('/sekretariat', 'Sekretariat::index');
$routes->get('/keuangan', 'Keuangan::index');
$routes->get('/analisis', 'Analisis::index');
$routes->get('/bantuan', 'Bantuan::index');
$routes->get('/pertanahan', 'Pertanahan::index');
$routes->get('/pembangunan', 'Pembangunan::index');
$routes->get('/lapak', 'Lapak::index');
$routes->get('/pemetaan', 'Pemetaan::index');
$routes->get('/admin_web', 'AdminWeb::index');
$routes->get('/layanan_mandiri', 'LayananMandiri::index');

// ADMIN WEB
$routes->get('/agama', 'AdminWeb\Agama::index');

// API
$routes->get('/agama/pageGetData/(:num)', 'Api\Agama::pageGetData/$1'); // ok
$routes->get('/agama/perPageGetData', 'Api\Agama::perPageGetData'); // ok
$routes->get('/agama/getData/(:num)/(:num)', 'Api\Agama::getData/$1/$2'); // ok

$routes->get('/agama/pageSrchData/(:any)/(:num)', 'Api\Agama::pageSrchData/$1/$2');
$routes->get('/agama/perPageSrchData/(:any)', 'Api\Agama::perPageSrchData/$1');
$routes->get('/agama/srchData/(:any)/(:num)/(:num)', 'Api\Agama::srchData/$1/$2/$3');

$routes->post('/agama/addData', 'Api\Agama::addData');
$routes->post('/agama/editData', 'Api\Agama::editData');
$routes->delete('/agama/deleteData/(:num)', 'Api\Agama::deleteData/$1');


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
