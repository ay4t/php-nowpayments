<?php

namespace Ay4t\NOWPayments\Endpoint;
use Ay4t\NOWPayments\Authentication;
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
        // jika $data['email'] not exists throw exception
        if(!isset($data['email'])){
            throw new \Exception('Email not found');
        }

        // jika $data['password'] not exists throw exception
        if(!isset($data['password'])){
            throw new \Exception('Password not found');
        }

        $clientAuth = $this->client->auth->create([
            'email'     => $data['email'],
            'password'  => $data['password']
        ]);
        
        if(!empty($clientAuth['token'])){
            $headerToken = $clientAuth['token'];
        } else {
            throw new \Exception('Token not found');
        }

        $this->client->setHeaderToken($headerToken);

        return $this->request(parent::METHOD_POST, null, $data);
    }
}
