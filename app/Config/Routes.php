<?php

namespace Config;

use CodeIgniter\Config\Services;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('home');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

$routes->get('/', 'Pages::home');
$routes->get('about', 'Pages::about');
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');

$routes->get('/', 'TaskController::index');
$routes->get('/tasks', 'TaskController::listAll');
$routes->get('/profile', 'TaskController::profile');
$routes->get('/about', 'TaskController::about');