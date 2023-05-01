<?php

namespace Ay4t\NOWPayments;

/**
 * Class Authentication
 * @package Ay4t\NOWPayments
 * 
 * Class ini digunakan untuk mengotentikasi request webhook atau ipn yang dikirim oleh Nowpayments
 * Untuk memastikan data yang dikirim ke web Hook benar-benar dari pengirim yang sah
 * 
 * Contoh penggunaan pada controller Anda atau aplikasi anda sebagai berikut:
 
 *   $content        = file_get_contents('php://input');
 *   $receivedHmac   = $_SERVER['HTTP_X_NOWPAYMENTS_SIG'];
 *   $ipnSecret      = 'IPNsecret';
 *   $auth           = \Ay4t\NOWPayments\Authentication::authenticate($content, $receivedHmac, $ipnSecret);
 *   if ( !$auth ) {
 *       $return_status = false;
 *   }

 */
class Authentication
{
    /**
     * @param string $content
     * @param string $receivedHmac
     * @param string $ipnSecret
     * 
     * @return bool
     */
    public static function authenticate(string $content, string $receivedHmac, string $ipnSecret): bool
    {
        if (!empty($content) and !empty($receivedHmac) and !empty($ipnSecret)) {
            
            $data = json_decode($content, true);
            ksort($data);
            $json = json_encode($data);
            
            if ($json !== false and !empty($json)) {
                
                $hmac = hash_hmac('sha512', $json, $ipnSecret);
                
                if ($receivedHmac == $hmac) {
                    return true;
                }
                
            }
        }
        
        return false;
    }
}