<?php

namespace Ay4t\NOWPayments\Endpoint;

/**
 * Class Estimate
 * @package Ay4t\NOWPayments\Endpoint
 */
class Estimate extends AbstractEndpoint
{
    const RESOURCE = 'estimate';
    
    /**
     * @return string
     */
    public function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @param array $query
     * 
     * @return array
     */
    public function get(array $query): array
    {
        return $this->request(parent::METHOD_GET, null, [], $query);
    }
}