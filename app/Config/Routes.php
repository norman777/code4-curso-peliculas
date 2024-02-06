<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


//$routes->get('/', 'Home::index');
//$routes->get('/pelicula', 'pelicula::index');
//$routes->get('pelicula/new', 'pelicula::create');

$routes->group('dashboard', function ($routes) {
    $routes->presenter('pelicula', ['controller' => 'Dashboard\pelicula']);
    //$routes->presenter('categoria', ['only' => ['index', 'new', 'create', 'edit', 'update', 'delete', 'show']]);
    //$routes->presenter('categoria', ['except' => ['index']]);
    $routes->presenter('categoria', ['except' => ['show'], 'controller' => 'Dashboard\categoria']);
});


// $routes->get('/', 'Home::index');//listado

// $routes->get('/new', 'Home::new');//pintar el form
// $routes->get('/create', 'Home::create');//procesar el from

// $routes->get('/edit/(:num)', 'Home::edit/$1');//pintar el form
// $routes->get('/ubdate/(:num)', 'Home::ubdate/$1');//procesar el from edicion

// $routes->get('/delete/(:num)', 'Home::delete/$1');

// $routes->presenter('home');

// $routes->resource('home');