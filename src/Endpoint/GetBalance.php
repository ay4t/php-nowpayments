<?php

namespace Ay4t\NOWPayments\Endpoint;

class GetBalance extends AbstractEndpoint
{
    const RESOURCE = 'balance';
    
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
        return $this->request(parent::METHOD_GET, null);
    }
}