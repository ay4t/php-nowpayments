<?php

namespace Ay4t\NOWPayments;

use Ay4t\NOWPayments\Endpoint;

class Client
{
    /**
     * API endpoint
     */
    const API_ENDPOINT          = 'https://api.nowpayments.io';
    const API_SANDBOX_ENDPOINT  = 'https://api-sandbox.nowpayments.io';
    
    /**
     * API version
     */
    const API_VERSION = 'v1';
    
    /**
     * @var string
     */
    private $apiKey;
    
    /**
     * @var bool
     */
    private $testModus;

    /**
     * @var \Ay4t\NOWPayments\Endpoint\Status
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     */
    public $status;

    /**
     * @var \Ay4t\NOWPayments\Endpoint\Currency
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     */
    public $currency;

    /**
     * @var \Ay4t\NOWPayments\Endpoint\Payment
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     */
    public $payment;
    
    /**
     * @var \Ay4t\NOWPayments\Endpoint\Estimate
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     */
    public $estimate;

    /**
     * @var \Ay4t\NOWPayments\Endpoint\Invoice
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     */
    public $invoice;

    /**
     * @var \Ay4t\NOWPayments\Endpoint\MinAmount
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     */
    public $minAmount;

    /**
     * @var \Ay4t\NOWPayments\Endpoint\GetBalance
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     */
    public $getBalance;

    /**
     * @var string
     * @author Ayatulloh Ahad R <ayatulloh@indiega.net>
     */
    public $headerToken;


    /**
     * @param string $apiKey
     * @param bool $testModus = false
     */
    public function __construct(string $apiKey, bool $testModus = false)
    {
        $this->apiKey = $apiKey;
        $this->testModus = $testModus;
        
        $this->initializeEndpoints();
    }
    
    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }
    
    /**
     * @return string
     */
    public function getApiEndpoint(): string
    {
        if ($this->testModus) {
            return self::API_SANDBOX_ENDPOINT;
        }
        
        return self::API_ENDPOINT;
    }

    /**
     * @return string
     */
    public function getHeaderToken()
    {
        return $this->headerToken;
    }

    /**
     * @param string $headerToken
     */
    public function setHeaderToken($headerToken)
    {
        $this->headerToken = $headerToken;
    }
    
    /**
     * Initialize endpoints.
     */
    private function initializeEndpoints()
    {
        $this->status       = new Endpoint\Status($this);
        $this->currency     = new Endpoint\Currency($this);
        $this->payment      = new Endpoint\Payment($this);
        $this->estimate     = new Endpoint\Estimate($this);
        $this->invoice      = new Endpoint\Invoice($this);
        $this->minAmount    = new Endpoint\MinAmount($this);
        $this->getBalance   = new Endpoint\GetBalance($this);
    }
}