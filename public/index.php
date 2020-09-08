<?php

require_once("../vendor/autoload.php");
$config = parse_ini_file("../config.ini");

use App\PHPCrypto\PHPCrypto;

/**
 * Example of encrypting a string
 */
echo PHPCrypto::encrypt("I am now decrypted!"); //generated encrypted string SkRXeWF1Nnh6TndRUHNTMmNzR2F1OXRvbXhzR05VMk5iOFZGaW5rZER2az0=

/**
 * Example of decrypting the encrypted string
 */
echo PHPCrypto::decrypt("SkRXeWF1Nnh6TndRUHNTMmNzR2F1OXRvbXhzR05VMk5iOFZGaW5rZER2az0=");