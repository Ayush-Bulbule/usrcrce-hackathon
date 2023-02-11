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
$routes->get('/', 'AuthController::login_view');

// Auth Routes ------------------

$routes->get('/auth/login', 'AuthController::login_view');
$routes->post('/auth/login', 'AuthController::login');
$routes->get('/auth/register', 'AuthController::register_view');
$routes->post('/auth/register', 'AuthController::register');

$routes->get('/auth/logout', 'AuthController::logout');



// Client Routes ---------------------
$routes->get('client/dashboard','ClientController::index');
$routes->get('client/workers','ClientController::workers');
$routes->get('client/tasks', 'ClientController::get_tasks');
$routes->get('client/addtask', 'ClientController::add_req');
$routes->post('client/addtask', 'ClientController::add_req');
$routes->get('client/profile', 'ClientController::profile_view');
$routes->post('client/profile', 'AuthController::profile');




//Worker Routes
$routes->get('worker/dashboard','WorkerController::index');
$routes->get('worker/profile', 'WorkerController::profile_view');
$routes->post('worker/profile', 'AuthController::profile');
$routes->get('worker/request', 'WorkerController::request_view');



//Admin Routes
$routes->get('admin/dashboard','AdminController::index');
$routes->get('admin/login','AdminController::login_view');
$routes->post('admin/login', 'AdminController::login');
$routes->get('admin/workers', 'AdminController::workers_view');
$routes->get('admin/clients', 'AdminController::clients_view');
$routes->get('admin/requests', 'AdminController::requests_view');
$routes->post('admin/requests', 'AdminController::requests');
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