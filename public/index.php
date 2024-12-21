<?php

require_once "../vendor/autoload.php";

use App\Core\Router;
use App\Core\Error;

// Register the error and exception handlers
set_exception_handler([Error::class, 'handleException']);
set_error_handler([Error::class, 'handleError']);

$router = new Router();
require_once "../routes/web.php";

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($url);