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
$routes->setDefaultController('Controller');
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
$routes->get('home/(:segment)', 'Home::index/$1');
$routes->get('home', 'Home::index');
$routes->get('helloworld', '\App\Controllers\Helloworld::getindex');
// $routes->get('user', 'UserController::index');

/*
* CRUD - User data
*/
// $routes->get('/', 'UserController::index');
$routes->get('users/(:segment)', 'UserController::getUser/$1');
$routes->get('users', 'UserController::getUsers');
// $routes->get('users/::id', 'UserController::getOne');
$routes->match(['get','post'],'/', 'UserController::index', ['filter' => "NoAuthFilter"]);
$routes->match(['get','post'],'register', 'UserController::register', ['filter' => "NoAuthFilter"]);
$routes->get('logout', 'UserController::logout');

// User profile board 
$routes->get('board', 'UserController::board', ['filter' => "AuthFilter"]);
$routes->match(['get','post'],'board/workout', 'UserController::workout', ['filter' => "AuthFilter"]);
$routes->match(['get','post'],'board/progression', 'UserController::progression', ['filter' => "AuthFilter"]);
$routes->match(['get','post'],'board/inbox', 'UserController::inbox', ['filter' => "AuthFilter"]);
$routes->match(['get','post'],'board/account', 'UserController::account', ['filter' => "AuthFilter"]);

// Dashboard admin routes
$routes->get('dashboard', 'DashboardController::index', ['filter' => "AuthAdminFilter"]);
$routes->match(['get','post'],'dashboard/login', 'DashboardController::login', ['filter' => "NoAuthAdminFilter"]);
$routes->match(['get','post'],'dashboard/profile', 'DashboardController::profile', ['filter' => "AuthAdminFilter"]);
$routes->get('dashboard/logout', 'DashboardController::logout');

// Users tab
$routes->match(['get','post'],'dashboard/users', 'DashboardController::users', ['filter' => "AuthAdminFilter"]);

// Activities tab 
$routes->match(['get','post'],'dashboard/activities', 'DashboardController::activities', ['filter' => "AuthAdminFilter"]);

// News tab 
$routes->match(['get','post'],'dashboard/news', 'DashboardController::news', ['filter' => "AuthAdminFilter"]);

// Clubs tab 
$routes->match(['get','post'],'dashboard/clubs', 'DashboardController::clubs', ['filter' => "AuthAdminFilter"]);

// Formules tab 
$routes->match(['get','post'],'dashboard/formules', 'DashboardController::formules', ['filter' => "AuthAdminFilter"]);

// Settings tab 
$routes->match(['get','post'],'dashboard/settings', 'DashboardController::settings', ['filter' => "AuthAdminFilter"]);

// routes dashboard

// Activites route
// $routes->get('activities', 'ActivitiesController::index');
$routes->get('activities/(:segment)', 'ActivitiesController::getActivity/$1');
$routes->get('activities', 'ActivitiesController::getActivities');
// News route
$routes->get('news', 'NewsController::index');

// Clubs route
$routes->get('clubs', 'ClubsController::index');

// Coaching route
$routes->get('coaching', 'CoachingController::index');

// formules route
$routes->get('formules', 'FormulesController::index');


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
