<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index'); // Sekarang mengarah ke Dashboard kamu
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login'); // Ini untuk memproses form loginnya nanti
$routes->get('/register', 'Auth::register');