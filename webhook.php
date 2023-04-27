<?php

require 'vendor/autoload.php';

use Ay4t\NOWPayments\Authentication;

$ipnSecret = 'ipn secret';

// example handling webhooks using the symfony http kernel
// https://symfony.com/doc/current/components/http_kernel.html
// requires symfony http kernel: (composer require symfony/http-kernel)

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
if(Authentication::authenticate($request->getContent(), $request->headers->get('x-nowpayments-sig'), $ipnSecret)) {
    
    // webhook authenticated
    
}


// alternatively example using basic php

$contents = file_get_contents('php://input');

if(Authentication::authenticate($contents, $_SERVER['HTTP_X_NOWPAYMENTS_SIG'], $ipnSecret)) {
    
    // webhook authenticated
    
}