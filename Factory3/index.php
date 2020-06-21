<?php

use App\PaymentFactory;

require 'Interface/AccountMethod.php';
require 'Interface/PaymentMethod.php';
require 'App/Bkash.php';
require 'App/Pay.php';
require 'App/PaymentFactory.php';


$factory = new PaymentFactory();
$factory = $factory->create('Bkash');
echo '<pre>';
print_r($factory->checkBalance()); exit;

