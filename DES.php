<?php
// Generate a random key
$key = openssl_random_pseudo_bytes(8);
// Encrypt the data
$encrypted_data = des_encrypt($data, $key);
// Store the encrypted data in a database or other secure location
// Decrypt the data when needed
$decrypted_data = des_decrypt($encrypted_data, $key);
?>
