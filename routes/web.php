<?php

use App\Core\Router;
use App\Controllers\HomeController;

$router = new Router();

// Define routes
$router->get('/', [HomeController::class, 'index']);
$router->get('/about', [HomeController::class, 'about']);