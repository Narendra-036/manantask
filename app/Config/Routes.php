<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'LoginController::index');
$routes->post('login', 'LoginController::login');
$routes->get('signup', 'LoginController::signup');
$routes->post('signup', 'LoginController::createUser');
$routes->get('logout', 'LoginController::logout');
$routes->get('dash', 'Dashboard::index'); 
