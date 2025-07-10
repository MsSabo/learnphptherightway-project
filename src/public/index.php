<?php

declare(strict_types=1);

//require_once '../App/PaymentGateway/Paddle/CustomerProfile.php';
//require_once '../App/PaymentGateway/Paddle/Transaction.php';
//require_once '../App/PaymentGateway/Stripe/Transaction.php';

spl_autoload_register(function($class) {
    var_dump($class);
});


use App\PaymentGateway\Paddle\Transaction;
var_dump(new Transaction());

