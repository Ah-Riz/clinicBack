<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('data', 'DataController::create');
$routes->get('test-db', 'TestController::index');
