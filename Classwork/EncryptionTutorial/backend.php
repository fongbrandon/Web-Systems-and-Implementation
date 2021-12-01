<?php
    function encrypt($message,$encryption_key){
        $key=hex2bin($encryption_key);
        $nonceSize=openssl_cipher_iv_length('aes-256-ctr');
        $nonce=openssl_random_pseudo_bytes($nonceSize);
        $ciphertext=openssl_encrypt(
            $message,
            'aes-256-ctr',$encryption_key,OPENSSL_RAW_DATA,$nonce
        );
        return base64_encode($nonce.$ciphertext);
    }
    function decrypt($message,$encryption_key){
        $key=hex2bin($encryption_key);
        $message=base64_decode($message);
        $nonceSize=openssl_cipher_iv_length('aes-256-ctr');
        $nonce=mb_substr($message,0,$nonceSize,'8bit');
        $ciphertext=mb_substr($message,$nonceSize,NULL,'8bit');

        $plaintext=openssl_decrypt(
            $message,
            'aes-256-ctr',
            $key,
            OPENSSL_RAW_DATA,
            $nonce
        );
        return $plaintext;
    }
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
    }
    $hash_= sha1($name);
    $private_secret_key="484c663b747fa2138121d6ec192717e7";
    $encrypted=encrypt($name,$private_secret_key);
    $decrypted=decrypt($encrypted,$private_secret_key);
    echo "The decrypt value is :" .$name;
    echo "<br>";
    echo "The hashing value is :" .$hash_;
    echo "<br>";
    echo "The encrypt value is " .$encrypted;
    echo "<br>";
    echo "The decrypt value is " .$decrypted;
?>