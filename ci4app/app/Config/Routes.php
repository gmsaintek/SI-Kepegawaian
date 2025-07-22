<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/employees', 'Employees::index', ['filter' => 'hr']);
$routes->get('/employees/create', 'Employees::create', ['filter' => 'hr']);
$routes->post('/employees/save', 'Employees::save', ['filter' => 'hr']);
$routes->get('/employees/edit/(:num)', 'Employees::edit/$1', ['filter' => 'hr']);
$routes->post('/employees/update/(:num)', 'Employees::update/$1', ['filter' => 'hr']);
$routes->get('/attendance', 'Attendance::index', ['filter' => 'hr']);
$routes->get('/attendance/create', 'Attendance::create', ['filter' => 'hr']);
$routes->post('/attendance/save', 'Attendance::save', ['filter' => 'hr']);
$routes->get('/attendance/edit/(:num)', 'Attendance::edit/$1', ['filter' => 'hr']);
$routes->post('/attendance/update/(:num)', 'Attendance::update/$1', ['filter' => 'hr']);
$routes->get('/cuti', 'Cuti::index', ['filter' => 'auth']);
$routes->get('/cuti/create', 'Cuti::create', ['filter' => 'auth']);
$routes->post('/cuti/save', 'Cuti::save', ['filter' => 'auth']);
$routes->get('/cuti/edit/(:num)', 'Cuti::edit/$1', ['filter' => 'hr']);
$routes->post('/cuti/update/(:num)', 'Cuti::update/$1', ['filter' => 'hr']);
$routes->get('/auth/callback', 'Auth::callback');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
