<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('mahasiswa', function($routes) {
    $routes->get('/', 'MahasiswaController::index');          
    $routes->get('(:num)', 'MahasiswaController::show/$1');    
    $routes->post('/', 'MahasiswaController::create');        
    $routes->put('(:num)', 'MahasiswaController::update/$1'); 
    $routes->delete('(:num)', 'MahasiswaController::delete/$1'); 
});

$routes->group('dosen', function($routes) {
    $routes->get('/', 'DosenController::index');          
    $routes->get('(:num)', 'DosenController::show/$1');    
    $routes->post('/', 'DosenController::create');        
    $routes->put('(:num)', 'DosenController::update/$1'); 
    $routes->delete('(:num)', 'DosenController::delete/$1'); 
});