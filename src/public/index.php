<?php


spl_autoload_register(function($class){
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class) . '.php');
    require $path;
    var_dump($path);
    echo '<br />Autoload <br />';
});

use App\PaymentGateway\Puddle\Transaction;

var_dump(new Transaction());