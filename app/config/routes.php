<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 *
 * Copyright (c) 2020 Ronald M. Marasigan
 *
 * @package LavaLust
 * @author Ronald M. Marasigan
 * @since Version 1
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
*/

/** @var object $router **/

$router->get('/', 'Welcome::index');

$router->get('/student', 'StudentController::index');
$router->get('/student/access', 'StudentController::access');
$router->get('/student/logout', 'StudentController::logout');
$router->get('/student/profile', 'StudentController::profile')->middleware('student');


/*
| -------------------------------------------------------------------
| PRODUCT ROUTES
| -------------------------------------------------------------------
| All product management pages require authentication.
*/

$router->get('/products', 'ProductController::index')->middleware('auth');

$router->get('/products/create', 'ProductController::create')->middleware('auth');

$router->post('/products/store', 'ProductController::store')->middleware('auth');

$router->get('/products/edit/{id}', 'ProductController::edit')->middleware('auth');

$router->post('/products/update/{id}', 'ProductController::update')->middleware('auth');

$router->get('/products/delete/{id}', 'ProductController::delete')->middleware('auth');


/*
| -------------------------------------------------------------------
| AUTHENTICATION ROUTES
| -------------------------------------------------------------------
*/

$router->get('/login', 'AuthController::login');

$router->post('/login', 'AuthController::login');

$router->get('/logout', 'AuthController::logout');