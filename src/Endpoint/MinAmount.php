<?php

namespace Ay4t\NOWPayments\Endpoint;

/**
 * Class MinAmount
 * @package Ay4t\NOWPayments\Endpoint
 */
class MinAmount extends AbstractEndpoint
{
    const RESOURCE = 'min-amount';
    
    /**
     * @return string
     */
    public function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @param array $query
     */
    public function get(array $query): array
    {
        return $this->request(parent::METHOD_GET, null, [], $query);
    }
}