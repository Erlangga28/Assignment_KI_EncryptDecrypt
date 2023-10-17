<?php
// Generate a random key
$key = openssl_random_pseudo_bytes(16);
// Encrypt the data
$encrypted_data = openssl_encrypt($data, 'AES-128-CBC', $key);
// Store the encrypted data in a database or other secure location
// Decrypt the data when needed
$decrypted_data = openssl_decrypt($encrypted_data, 'AES-128-CBC', $key);
?>