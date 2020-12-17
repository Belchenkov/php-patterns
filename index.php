<?php


use Adapter\PaymentAdapter;
use Adapter\WebMoney;

require "functions.php";

spl_autoload_register('project_autoload');

$adapter = new PaymentAdapter(new WebMoney(['key' => 'secret']));
$adapter->pay(1000);