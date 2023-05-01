<?php

namespace Ay4t\NOWPayments\Endpoint;
use Ay4t\NOWPayments\Endpoint\AbstractEndpoint;

/**
 * Class Payouts
 * @package Ay4t\NOWPayments\Endpoint
 */
class Payouts extends AbstractEndpoint
{
    const RESOURCE = 'payout';
    
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
    public function create( array $data = [] ): array
    {
        return $this->request(parent::METHOD_POST, null, $data);
    }
}
