<?php

// use App\Controllers\DataController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('data', 'DataController::create');
$routes->get('test-db', 'TestController::index');

$routes->resource('posts');

$routes->group('api', function ($routes) {
    $routes->group('v1', function ($routes) {
        // $routes->get('users', 'DataController::index');
        // $routes->post('users', 'DataController::create');
        $routes->get('user', 'DataController::index');
    });
});

$routes->get('test', function() {
    return 'API is working';
});
