<?php

namespace App\PHPCrypto;

class PHPCrypto{

    public function __construct(){}

    public static function encrypt($string){
        GLOBAL $config;

        $phpCryptoSecretKey = hash( 'sha256', $config['secretKey']);
        $phpCryptoIvKey = substr( hash( 'sha256', $config['ivKey']), 0, 16 );

        return base64_encode(openssl_encrypt($string, "AES-256-CBC", $phpCryptoSecretKey, 0, $phpCryptoIvKey));
    }

    public static function decrypt($string){
        GLOBAL $config;

        $phpCryptoSecretKey = hash( 'sha256', $config['secretKey']);
        $phpCryptoIvKey = substr( hash( 'sha256', $config['ivKey']), 0, 16 );

        return openssl_decrypt(base64_decode($string), "AES-256-CBC", $phpCryptoSecretKey, 0, $phpCryptoIvKey);
    }
}