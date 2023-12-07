<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('create-db', function () {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('Laundry4 ')) {
        echo 'Database created!';
    }
});


$routes->setAutoRoute(true);


$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('/', 'Home');

$routes->get('/admin', 'admin::index');
$routes->get('/admin/pesanan', 'pesanan::index');
$routes->get('/admin/jasa', 'jasa::index');
$routes->get('/admin/admin', 'admin::index');
$routes->get('/admin/register', 'register::index');
$routes->get('/admin/kasir', 'kasir::index');

$routes->get('edit_jasa/(:num)', 'admin::edit_jasa/$1');

$routes->get('/kasir', 'kasir::index');
$routes->get('/admin/addkasir', 'admin::Create');
$routes->get('/admin/jasa', 'admin::Create');

$routes->get('/admin/addjasa', 'admin::jasa');



$routes->post('/admin/save_kasir', 'admin::simpan_kasir');
$routes->delete('/admin/:segment ', 'admin::destroy/$1');
$routes->delete('admin/(:num)', 'admin::delete/$1');
$routes->put('admin/(:num)', 'admin::update/$1');

$routes->get('admin/(:num)', 'admin::update/$1');
$routes->get('admin/editjasa/(:segment)', 'Admin::editjasa/$1');
$routes->post('admin/updatejasa/(:segment)', 'Admin::updatejasa/$1');




$routes->get('admin/edit/(:any)', 'admin::edit/$1');
$routes->post('admin/logout', 'Login::logout');


$routes->get('/jasa', 'jasa::index');
$routes->get('/pesanan', 'Admin::list_pesananadm');

$routes->get('/login', 'Login::index');
$routes->get('/login_kasir', 'Login_kasir::index');

$routes->post('/login/auth', 'Login::auth');
$routes->post('/logout', 'Login::logout');

$routes->get('/register', 'Register::index');
$routes->post('/register/save', 'Register::save');
$routes->get('auth/logout', 'AuthController::logout');

$routes->get('/login_kasir', 'Login_kasir::index');
$routes->post('/login_kasir/auth', 'Login_kasir::auth');
$routes->post('/logout_kasir', 'Login_kasir::logout');

$routes->get('/kasir_dashboard', 'Kasir::dashboard');
$routes->post('/logoutsir', 'Login_kasir::logout');

$routes->get('list_jasa', 'List_jasa::index');
$routes->get('list_pesanan', 'Admin::list_pesanan');
$routes->get('pesanan/form/(:num)', 'Pesanan::form/$1');
$routes->post('pesanan/simpan', 'Pesanan::simpan');




$routes->get('admin/form_pesanan/(:num)', 'Admin::form_pesanan/$1');
$routes->post('admin/simpan_pesanan', 'Admin::simpan_pesanan');

$routes->group('admin', ['namespace' => 'App\Controllers'], function ($routes) {
    // ... other routes

    // Pesanan routes
    $routes->get('list_pesanan', 'Admin::list_pesanan');
    $routes->get('edit_pesanan/(:num)', 'Admin::edit_pesanan/$1');
    $routes->post('update_pesanan/(:num)', 'Admin::update_pesanan/$1');
    $routes->delete('delete_pesanan/(:num)', 'Admin::delete_pesanan/$1');
});
$routes->get('edit_pesanan/(:num)', 'admin::edit_pesanan/$1');
$routes->get('edit_pesananadm/(:num)', 'admin::edit_pesananadm/$1');

$routes->get('print_nota/(:num)', 'Print_nota::nota/$1');
$routes->get('admin/add_custom_pesanan/(:num)', 'Admin::add_custom_pesanan/$1');
$routes->get('admin/add_custom_pesanan/(:num)', '\App\Controllers\Admin::add_custom_pesanan/$1');
