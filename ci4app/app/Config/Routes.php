<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/employees', 'Employees::index');
$routes->get('/employees/create', 'Employees::create');
$routes->post('/employees/save', 'Employees::save');
$routes->get('/attendance', 'Attendance::index');
$routes->get('/attendance/create', 'Attendance::create');
$routes->post('/attendance/save', 'Attendance::save');
$routes->get('/cuti', 'Cuti::index');
$routes->get('/cuti/create', 'Cuti::create');
$routes->post('/cuti/save', 'Cuti::save');
