<?php

namespace Ay4t\NOWPayments\Endpoint;

/**
 * Class Auth
 * @package Ay4t\NOWPayments\Endpoint
 */
class Auth extends AbstractEndpoint
{
    /**
     * @var string
     */
    private $token = '';

    const RESOURCE = 'auth';

    /**
     * @return string
     */
    public function getResource(): string
    {
        return self::RESOURCE;
    }

    /**
     * @return array
     * @param $data['email'], $data['password']
     */
    public function create( array $data = [] ): array
    {
        $request = $this->request(parent::METHOD_POST, null, $data);
        $this->setToken($request['token']);

        return $request;
    }

	/**
	 * 
	 * @return string
	 */
	public function getToken() {
		return $this->token;
	}
	
	/**
	 * 
	 * @param string $token 
	 * @return self
	 */
	public function setToken($token): self {
		$this->token = $token;
		return $this;
	}
}
