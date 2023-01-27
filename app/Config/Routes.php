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
$routes->get('/', 'Halaman\Home::index');
$routes->get('/info_desa', 'Halaman\InfoDesa::index');
$routes->get('/kependudukan', 'Halaman\Kependudukan::index');
$routes->get('/statistik', 'Halaman\Statistik::index');
$routes->get('/layanan_surat', 'Halaman\LayananSurat::index');
$routes->get('/sekretariat', 'Halaman\Sekretariat::index');
$routes->get('/keuangan', 'Halaman\Keuangan::index');
$routes->get('/analisis', 'Halaman\Analisis::index');
$routes->get('/bantuan', 'Halaman\Bantuan::index');
$routes->get('/pertanahan', 'Halaman\Pertanahan::index');
$routes->get('/pembangunan', 'Halaman\Pembangunan::index');
$routes->get('/lapak', 'Halaman\Lapak::index');
$routes->get('/pemetaan', 'Halaman\Pemetaan::index');
$routes->get('/admin_web', 'Halaman\AdminWeb::index');
$routes->get('/layanan_mandiri', 'Halaman\LayananMandiri::index');

$routes->get('/agama/getData', 'Agama::getData');
$routes->post('/agama/addData', 'Agama::addData');


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
