<?php

include 'index.php';

// testing Currency Endpoint
$nowPayment = new \Ay4t\NOWPayments\Client( $apiKey, $testMode);
$currency = $nowPayment->getBalance->get();

echo '<pre>';
print_r($currency);
echo '</pre>';