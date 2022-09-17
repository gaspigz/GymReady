<?php

namespace App;

use Illuminate\Http\Request;

class Crypt
{
    
    public function encrypt($string)
    {
        $ciphering = "AES-128-CTR";
        $encryption_iv = '1234567891011121';
        $encryption_key = "gymready";
        $options = 0;

        $encrypted_var = openssl_encrypt($string, $ciphering, $encryption_key, $options, $encryption_iv);

        return $encrypted_var;
    }

    public function decrypt($string)
    {
        $ciphering = "AES-128-CTR";
        $decryption_iv = '1234567891011121';
        $decryption_key = "gymready";
        $options = 0;

        $decrypted_var = openssl_decrypt($string, $ciphering, $decryption_key, $options, $decryption_iv);

        return $decrypted_var;
    }
}