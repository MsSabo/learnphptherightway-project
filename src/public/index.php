<?php


declare(strict_types = 1);

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use App\Exceptions\RouteNotFoundException;
use App\Router;
use App\View;

$router = new Router();

try {
$router->get('/', [App\Controllers\Home::class, 'index'])
       ->post('/upload', [App\Controllers\Home::class, 'upload'])
       ->get('/invoices', [App\Controllers\Invoice::class, 'index'])
       ->get('/invoices/create', [App\Controllers\Invoice::class, 'create'])
       ->post('/invoices/create', [App\Controllers\Invoice::class, 'store']);
echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
}
catch (App\Exceptions\RouteNotFoundException $err) {
    header('HTTP/1.1 404 Not Found');
    echo (View::make('error/404'));
}

