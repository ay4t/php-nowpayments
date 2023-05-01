<?php

namespace Ay4t\NOWPayments\Endpoint;

/**
 * Class Status
 * @package Ay4t\NOWPayments\Endpoint
 */
class Status extends AbstractEndpoint
{
    const RESOURCE = 'status';
    
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