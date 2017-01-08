<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'GlobalSerp',
    ['path' => '/search/'],
    function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'SerpMain', 'action' => 'index']);
    }
);

Router::scope('/', ['plugin' => 'GlobalSerp'], function (RouteBuilder $routes) {
    
    $routes->connect(
        '/:type-:category/', 
        ['controller' => 'SerpMain', 'action' => 'index'],
        ['type' => 'rumah', 'category' => 'dijual']
    );

    $routes->connect(
        '/:category-:type/', 
        ['controller' => 'SerpMain', 'action' => 'index'],
        ['category' => 'sewa', 'type' => 'rumah']
    );

});
