<?php

namespace Ay4t\NOWPayments\Endpoint;

/**
 * Class Currency
 * @package Ay4t\NOWPayments\Endpoint
 */
class Currency extends AbstractEndpoint
{
    const RESOURCE = 'currencies';
    
    /**
     * @return string
     */
    public function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @return array
     */
    public function get(): array
    {
        return $this->request(parent::METHOD_GET);
    }
}