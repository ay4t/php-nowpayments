<?php

namespace Ay4t\NOWPayments\Endpoint;

/**
 * Invoice endpoint
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * @copyright Onetoweb B.V.
 */
class Invoice extends AbstractEndpoint
{
    const RESOURCE = 'invoice';
    
    /**
     * @return string
     */
    public function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->request(parent::METHOD_POST, null, $data);
    }
}