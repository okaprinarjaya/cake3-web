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
        '/:tp-:trx/', 
        ['controller' => 'SerpMain', 'action' => 'index'],
        ['tp' => 'rumah', 'trx' => 'dijual']
    );

});
