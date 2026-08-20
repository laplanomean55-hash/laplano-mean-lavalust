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
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @since Version 1
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
*/

$router->get('/', 'Welcome::index');

// Student Dashboard / Home Page
$router->get('/student', 'StudentController::index');

// Protected Student Profile
$router->get(
    '/student/profile',
    'StudentController::profile',
    ['middleware' => 'student']
);

// Open Protected Profile
$router->get(
    '/student/open-profile',
    'StudentController::openProfile'
);

// Optional Alias: /profile -> Protected Student Profile
$router->get(
    '/profile',
    'StudentController::profile',
    ['middleware' => 'student']
);