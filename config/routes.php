<?php
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::prefix('admin', function ($routes) {
    // All routes here will be prefixed with `/admin`
    // And have the prefix => admin route element added.
    $routes->fallbacks('InflectedRoute');
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'pages', 'action' => 'home']);

    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();
