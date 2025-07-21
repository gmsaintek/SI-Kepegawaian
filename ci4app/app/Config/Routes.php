<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/employees', 'Employees::index', ['filter' => 'auth']);
$routes->get('/employees/create', 'Employees::create', ['filter' => 'auth']);
$routes->post('/employees/save', 'Employees::save', ['filter' => 'auth']);
$routes->get('/attendance', 'Attendance::index', ['filter' => 'auth']);
$routes->get('/attendance/create', 'Attendance::create', ['filter' => 'auth']);
$routes->post('/attendance/save', 'Attendance::save', ['filter' => 'auth']);
$routes->get('/cuti', 'Cuti::index', ['filter' => 'auth']);
$routes->get('/cuti/create', 'Cuti::create', ['filter' => 'auth']);
$routes->post('/cuti/save', 'Cuti::save', ['filter' => 'auth']);
$routes->get('/cuti/edit/(:num)', 'Cuti::edit/$1', ['filter' => 'auth']);
$routes->post('/cuti/update/(:num)', 'Cuti::update/$1', ['filter' => 'auth']);
$routes->get('/auth/callback', 'Auth::callback');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
