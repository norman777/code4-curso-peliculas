<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


//$routes->get('/', 'Home::index');
//$routes->get('/pelicula', 'pelicula::index');
//$routes->get('pelicula/new', 'pelicula::create');

$routes->presenter('pelicula');
$routes->presenter('categoria');


// $routes->get('/', 'Home::index');//listado

// $routes->get('/new', 'Home::new');//pintar el form
// $routes->get('/create', 'Home::create');//procesar el from

// $routes->get('/edit/(:num)', 'Home::edit/$1');//pintar el form
// $routes->get('/ubdate/(:num)', 'Home::ubdate/$1');//procesar el from edicion

// $routes->get('/delete/(:num)', 'Home::delete/$1');

// $routes->presenter('home');

// $routes->resource('home');