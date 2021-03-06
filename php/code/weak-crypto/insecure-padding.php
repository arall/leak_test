<?php

$c01 = mcrypt_encrypt(MCRYPT_DES, $key, $plaintext, "ecb"); // Noncompliant: ECB doesn't provide serious message confidentiality
$c02 = mcrypt_encrypt(MCRYPT_DES_COMPAT, $key, $plaintext, "ecb"); // Noncompliant: ECB doesn't provide serious message confidentiality
$c03 = mcrypt_encrypt(MCRYPT_TRIPLEDES, $key, $plaintext, "ecb"); // Noncompliant: ECB doesn't provide serious message confidentiality
$c04 = mcrypt_encrypt(MCRYPT_3DES, $key, $plaintext, "ecb"); // Noncompliant: ECB doesn't provide serious message confidentiality
$c05 = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, $plaintext, "ecb"); // Noncompliant: ECB doesn't provide serious message confidentiality
$c06 = mcrypt_encrypt(MCRYPT_RC2, $key, $plaintext, "ecb"); // Noncompliant: ECB doesn't provide serious message confidentiality
$c07 = mcrypt_encrypt(MCRYPT_RC4, $key, $plaintext, "ecb"); // Noncompliant: ECB doesn't provide serious message confidentiality

function encrypt1($data, $key) {
 $crypted='';
  openssl_public_encrypt($data, $crypted, $key, OPENSSL_NO_PADDING); // Noncompliant: RSA without OAEP padding scheme is not recommanded
  return $crypted;
}

$c1 = openssl_encrypt($plaintext, "BF-ECB", $key, $options=OPENSSL_RAW_DATA, $iv); // Noncompliant: ECB doesn't provide serious message confidentiality
$c2 = openssl_encrypt($plaintext, "RC2-ECB", $key, $options=OPENSSL_RAW_DATA, $iv); // Noncompliant: ECB doesn't provide serious message confidentiality
$c3 = openssl_encrypt($plaintext, "bf-ecb", $key, $options=OPENSSL_RAW_DATA, $iv); // Noncompliant: ECB doesn't provide serious message confidentiality
$c4= openssl_encrypt($plaintext, "des-ecb", $key, $options=OPENSSL_RAW_DATA, $iv); // Noncompliant: ECB doesn't provide serious message confidentiality
$c5 = openssl_encrypt($plaintext, "rc2-ecb", $key, $options=OPENSSL_RAW_DATA, $iv); // Noncompliant: ECB doesn't provide serious message confidentiality