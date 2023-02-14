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
$routes->get('/adm_bantuan', 'AdminWeb\Bantuan::index');
$routes->get('/adm_kabupaten', 'AdminWeb\Kabupaten::index');
$routes->get('/adm_provinsi', 'AdminWeb\Provinsi::index');
$routes->get('/adm_kecamatan', 'AdminWeb\Kecamatan::index');
$routes->get('/adm_kelurahan', 'AdminWeb\Kelurahan::index');
$routes->get('/adm_pendidikan', 'AdminWeb\Pendidikan::index');
$routes->get('/adm_pekerjaan', 'AdminWeb\Pekerjaan::index');
$routes->get('/adm_kelompok_masyarakat', 'AdminWeb\KelompokMasyarakat::index');
$routes->get('/adm_data_kelompok_masyarakat', 'AdminWeb\DataKelompokMasyarakat::index');
$routes->get('/adm_data_bantuan', 'AdminWeb\DataBantuan::index');
$routes->get('/adm_data_penduduk', 'AdminWeb\DataPenduduk::index');

// API BANTUAN
$routes->get('/bantuan/pageGetData/(:num)', 'Api\Bantuan::pageGetData/$1');
$routes->get('/bantuan/perPageGetData', 'Api\Bantuan::perPageGetData');
$routes->get('/bantuan/getData/(:num)/(:num)', 'Api\Bantuan::getData/$1/$2');

$routes->get('/bantuan/pageSrchData/(:any)/(:num)', 'Api\Bantuan::pageSrchData/$1/$2');
$routes->get('/bantuan/perPageSrchData/(:any)', 'Api\Bantuan::perPageSrchData/$1');
$routes->get('/bantuan/srchData/(:any)/(:num)/(:num)', 'Api\Bantuan::srchData/$1/$2/$3');

$routes->post('/bantuan/addData', 'Api\Bantuan::addData');
$routes->post('/bantuan/editData', 'Api\Bantuan::editData');
$routes->delete('/bantuan/deleteData/(:num)', 'Api\Bantuan::deleteData/$1');

// API KABUPATEN
$routes->get('/kabupaten/pageGetData/(:num)', 'Api\Kabupaten::pageGetData/$1');
$routes->get('/kabupaten/perPageGetData', 'Api\Kabupaten::perPageGetData');
$routes->get('/kabupaten/getData/(:num)/(:num)', 'Api\Kabupaten::getData/$1/$2');

$routes->get('/kabupaten/pageSrchData/(:any)/(:num)', 'Api\Kabupaten::pageSrchData/$1/$2');
$routes->get('/kabupaten/perPageSrchData/(:any)', 'Api\Kabupaten::perPageSrchData/$1');
$routes->get('/kabupaten/srchData/(:any)/(:num)/(:num)', 'Api\Kabupaten::srchData/$1/$2/$3');

$routes->post('/kabupaten/addData', 'Api\Kabupaten::addData');
$routes->post('/kabupaten/editData', 'Api\Kabupaten::editData');
$routes->delete('/kabupaten/deleteData/(:num)', 'Api\Kabupaten::deleteData/$1');

// API PROVINSI
$routes->get('/provinsi/pageGetData/(:num)', 'Api\Provinsi::pageGetData/$1');
$routes->get('/provinsi/perPageGetData', 'Api\Provinsi::perPageGetData');
$routes->get('/provinsi/getData/(:num)/(:num)', 'Api\Provinsi::getData/$1/$2');

$routes->get('/provinsi/pageSrchData/(:any)/(:num)', 'Api\Provinsi::pageSrchData/$1/$2');
$routes->get('/provinsi/perPageSrchData/(:any)', 'Api\Provinsi::perPageSrchData/$1');
$routes->get('/provinsi/srchData/(:any)/(:num)/(:num)', 'Api\Provinsi::srchData/$1/$2/$3');

$routes->post('/provinsi/addData', 'Api\Provinsi::addData');
$routes->post('/provinsi/editData', 'Api\Provinsi::editData');
$routes->delete('/provinsi/deleteData/(:num)', 'Api\Provinsi::deleteData/$1');

// API KECAMATAN
$routes->get('/kecamatan/pageGetData/(:num)', 'Api\Kecamatan::pageGetData/$1');
$routes->get('/kecamatan/perPageGetData', 'Api\Kecamatan::perPageGetData');
$routes->get('/kecamatan/getData/(:num)/(:num)', 'Api\Kecamatan::getData/$1/$2');

$routes->get('/kecamatan/pageSrchData/(:any)/(:num)', 'Api\Kecamatan::pageSrchData/$1/$2');
$routes->get('/kecamatan/perPageSrchData/(:any)', 'Api\Kecamatan::perPageSrchData/$1');
$routes->get('/kecamatan/srchData/(:any)/(:num)/(:num)', 'Api\Kecamatan::srchData/$1/$2/$3');

$routes->post('/kecamatan/addData', 'Api\Kecamatan::addData');
$routes->post('/kecamatan/editData', 'Api\Kecamatan::editData');
$routes->delete('/kecamatan/deleteData/(:num)', 'Api\Kecamatan::deleteData/$1');

// API KALURAHAN
$routes->get('/kelurahan/pageGetData/(:num)', 'Api\Kelurahan::pageGetData/$1');
$routes->get('/kelurahan/perPageGetData', 'Api\Kelurahan::perPageGetData');
$routes->get('/kelurahan/getData/(:num)/(:num)', 'Api\Kelurahan::getData/$1/$2');

$routes->get('/kelurahan/pageSrchData/(:any)/(:num)', 'Api\Kelurahan::pageSrchData/$1/$2');
$routes->get('/kelurahan/perPageSrchData/(:any)', 'Api\Kelurahan::perPageSrchData/$1');
$routes->get('/kelurahan/srchData/(:any)/(:num)/(:num)', 'Api\Kelurahan::srchData/$1/$2/$3');

$routes->post('/kelurahan/addData', 'Api\Kelurahan::addData');
$routes->post('/kelurahan/editData', 'Api\Kelurahan::editData');
$routes->delete('/kelurahan/deleteData/(:num)', 'Api\Kelurahan::deleteData/$1');

// API PENDIDIKAN
$routes->get('/pendidikan/pageGetData/(:num)', 'Api\Pendidikan::pageGetData/$1');
$routes->get('/pendidikan/perPageGetData', 'Api\Pendidikan::perPageGetData');
$routes->get('/pendidikan/getData/(:num)/(:num)', 'Api\Pendidikan::getData/$1/$2');

$routes->get('/pendidikan/pageSrchData/(:any)/(:num)', 'Api\Pendidikan::pageSrchData/$1/$2');
$routes->get('/pendidikan/perPageSrchData/(:any)', 'Api\Pendidikan::perPageSrchData/$1');
$routes->get('/pendidikan/srchData/(:any)/(:num)/(:num)', 'Api\Pendidikan::srchData/$1/$2/$3');

$routes->post('/pendidikan/addData', 'Api\Pendidikan::addData');
$routes->post('/pendidikan/editData', 'Api\Pendidikan::editData');
$routes->delete('/pendidikan/deleteData/(:num)', 'Api\Pendidikan::deleteData/$1');

// API PEKERJAAN
$routes->get('/pekerjaan/pageGetData/(:num)', 'Api\Pekerjaan::pageGetData/$1');
$routes->get('/pekerjaan/perPageGetData', 'Api\Pekerjaan::perPageGetData');
$routes->get('/pekerjaan/getData/(:num)/(:num)', 'Api\Pekerjaan::getData/$1/$2');

$routes->get('/pekerjaan/pageSrchData/(:any)/(:num)', 'Api\Pekerjaan::pageSrchData/$1/$2');
$routes->get('/pekerjaan/perPageSrchData/(:any)', 'Api\Pekerjaan::perPageSrchData/$1');
$routes->get('/pekerjaan/srchData/(:any)/(:num)/(:num)', 'Api\Pekerjaan::srchData/$1/$2/$3');

$routes->post('/pekerjaan/addData', 'Api\Pekerjaan::addData');
$routes->post('/pekerjaan/editData', 'Api\Pekerjaan::editData');
$routes->delete('/pekerjaan/deleteData/(:num)', 'Api\Pekerjaan::deleteData/$1');

// API KELOMPOK MASYARAKAT
$routes->get('/kelompok_masyarakat/pageGetData/(:num)', 'Api\KelompokMasyarakat::pageGetData/$1');
$routes->get('/kelompok_masyarakat/perPageGetData', 'Api\KelompokMasyarakat::perPageGetData');
$routes->get('/kelompok_masyarakat/getData/(:num)/(:num)', 'Api\KelompokMasyarakat::getData/$1/$2');

$routes->get('/kelompok_masyarakat/pageSrchData/(:any)/(:num)', 'Api\KelompokMasyarakat::pageSrchData/$1/$2');
$routes->get('/kelompok_masyarakat/perPageSrchData/(:any)', 'Api\KelompokMasyarakat::perPageSrchData/$1');
$routes->get('/kelompok_masyarakat/srchData/(:any)/(:num)/(:num)', 'Api\KelompokMasyarakat::srchData/$1/$2/$3');

$routes->post('/kelompok_masyarakat/addData', 'Api\KelompokMasyarakat::addData');
$routes->post('/kelompok_masyarakat/editData', 'Api\KelompokMasyarakat::editData');
$routes->delete('/kelompok_masyarakat/deleteData/(:num)', 'Api\KelompokMasyarakat::deleteData/$1');

// API DATA KELOMPOK MASYARAKAT
$routes->get('/data_kelompok_masyarakat/pageGetData/(:num)', 'Api\DataKelompokMasyarakat::pageGetData/$1');
$routes->get('/data_kelompok_masyarakat/perPageGetData', 'Api\DataKelompokMasyarakat::perPageGetData');
$routes->get('/data_kelompok_masyarakat/getData/(:num)/(:num)', 'Api\DataKelompokMasyarakat::getData/$1/$2');

$routes->get('/data_kelompok_masyarakat/pageSrchData/(:any)/(:num)', 'Api\DataKelompokMasyarakat::pageSrchData/$1/$2');
$routes->get('/data_kelompok_masyarakat/perPageSrchData/(:any)', 'Api\DataKelompokMasyarakat::perPageSrchData/$1');
$routes->get('/data_kelompok_masyarakat/srchData/(:any)/(:num)/(:num)', 'Api\DataKelompokMasyarakat::srchData/$1/$2/$3');

$routes->post('/data_kelompok_masyarakat/addData', 'Api\DataKelompokMasyarakat::addData');
$routes->post('/data_kelompok_masyarakat/editData', 'Api\DataKelompokMasyarakat::editData');
$routes->delete('/data_kelompok_masyarakat/deleteData/(:num)', 'Api\DataKelompokMasyarakat::deleteData/$1');

// API DATA BANTUAN
$routes->get('/data_bantuan/pageGetData/(:num)', 'Api\DataBantuan::pageGetData/$1');
$routes->get('/data_bantuan/perPageGetData', 'Api\DataBantuan::perPageGetData');
$routes->get('/data_bantuan/getData/(:num)/(:num)', 'Api\DataBantuan::getData/$1/$2');

$routes->get('/data_bantuan/pageSrchData/(:any)/(:num)', 'Api\DataBantuan::pageSrchData/$1/$2');
$routes->get('/data_bantuan/perPageSrchData/(:any)', 'Api\DataBantuan::perPageSrchData/$1');
$routes->get('/data_bantuan/srchData/(:any)/(:num)/(:num)', 'Api\DataBantuan::srchData/$1/$2/$3');

$routes->post('/data_bantuan/addData', 'Api\DataBantuan::addData');
$routes->post('/data_bantuan/editData', 'Api\DataBantuan::editData');
$routes->delete('/data_bantuan/deleteData/(:num)', 'Api\DataBantuan::deleteData/$1');

// API DATA PENDUDUK
$routes->get('/data_penduduk/pageGetData/(:num)', 'Api\DataPenduduk::pageGetData/$1');
$routes->get('/data_penduduk/perPageGetData', 'Api\DataPenduduk::perPageGetData');
$routes->get('/data_penduduk/getData/(:num)/(:num)', 'Api\DataPenduduk::getData/$1/$2');

$routes->get('/data_penduduk/pageSrchData/(:any)/(:num)', 'Api\DataPenduduk::pageSrchData/$1/$2');
$routes->get('/data_penduduk/perPageSrchData/(:any)', 'Api\DataPenduduk::perPageSrchData/$1');
$routes->get('/data_penduduk/srchData/(:any)/(:num)/(:num)', 'Api\DataPenduduk::srchData/$1/$2/$3');

$routes->post('/data_penduduk/addData', 'Api\DataPenduduk::addData');
$routes->post('/data_penduduk/editData', 'Api\DataPenduduk::editData');
$routes->delete('/data_penduduk/deleteData/(:num)', 'Api\DataPenduduk::deleteData/$1');

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
