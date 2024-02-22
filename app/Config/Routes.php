<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
//$routes->get('/pelicula', 'pelicula::index');
//$routes->get('pelicula/new', 'pelicula::create');

$routes->group('api', ['namespace' => 'App\Controllers\Api' ], function ($routes) {
    $routes->resource('pelicula');
    $routes->resource('categoria');
});

$routes->group('dashboard', function ($routes) {
    //test user
    //$routes->get('usuario/crear', '\App\Controllers\Web\Usuario::crear_usuario');
    //$routes->get('usuario/probar/contrasena', '\App\Controllers\Web\Usuario::probar_contrasena');
    //$routes->presenter('categoria', ['only' => ['index', 'new', 'create', 'edit', 'update', 'delete', 'show']]);
    //$routes->presenter('categoria', ['except' => ['index']]);
    $routes->get('pelicula/etiqueta/(:num)', 'Dashboard\Pelicula::etiquetas/$1', ['as' => 'pelicula.etiquetas']);
    $routes->post('pelicula/etiqueta/(:num)', 'Dashboard\Pelicula::etiquetas_post/$1', ['as' => 'pelicula.etiquetas']);
    $routes->post('pelicula/(:num)/etiqueta/(:num)/delete', 'Dashboard\Pelicula::etiqueta_delete/$1/$2', ['as' => 'pelicula.etiqueta_delete']);

    $routes->presenter('pelicula', ['controller' => 'Dashboard\pelicula']);
    $routes->presenter('etiqueta', ['controller' => 'Dashboard\etiqueta']);
    $routes->presenter('categoria', ['except' => ['show'], 'controller' => 'Dashboard\categoria']);
});

$routes->get('login','\App\Controllers\Web\Usuario::login',['as' => 'usuario.login']);
$routes->post('login_post','\App\Controllers\Web\Usuario::login_post',['as' => 'usuario.login_post']);

$routes->get('register','\App\Controllers\Web\Usuario::register',['as' => 'usuario.register']);
$routes->post('register_post','\App\Controllers\Web\Usuario::register_post',['as' => 'usuario.register_post']);

$routes->get('logout','\App\Controllers\Web\Usuario::logout',['as' => 'usuario.logout']);

// $routes->get('/', 'Home::index');//listado

// $routes->get('/new', 'Home::new');//pintar el form
// $routes->get('/create', 'Home::create');//procesar el from

// $routes->get('/edit/(:num)', 'Home::edit/$1');//pintar el form
// $routes->get('/ubdate/(:num)', 'Home::ubdate/$1');//procesar el from edicion

// $routes->get('/delete/(:num)', 'Home::delete/$1');

// $routes->presenter('home');

// $routes->resource('home');