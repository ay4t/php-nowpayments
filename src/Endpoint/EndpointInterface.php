<?php

namespace Ay4t\NOWPayments\Endpoint;

/**
 * Class EndpointInterface
 * @package Ay4t\NOWPayments\Endpoint
 */
interface EndpointInterface
{
    /**
     * @return string
     */
    public function getResource(): string;
}