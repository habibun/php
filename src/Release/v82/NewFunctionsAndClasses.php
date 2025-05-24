<?php

namespace Php\Release\v82;

/**
 * Parse INI quantity values: ini_parse_quantity
 * ini_parse_quantity function parses any data size recognized by PHP INI values (such as 56K, 256M, or 1G) and returns the data size in bytes.
 */
ini_parse_quantity('256M'); // 268435456



/**
 * Maintain a Curl connection alive: curl_upkeep
 * curl_upkeep function in the PHP 8.2 Curl extension triggers the underlying Curl library to run necessary tasks to keep a Curl connection alive. The most common use case of this function is to keep an HTTP persistent connection (Keep-Alive) alive by periodically calling the curl_upkeep function.
 */


/**
 * Retrieve Cipher Key Length: openssl_cipher_key_length
 * In PHP 8.2 OpenSSL, there is a new function named openssl_cipher_key_length that returns the required length of the key (in bytes) for any supported OpenSSL cipher.
 *
 * This function eliminates the need of hard-coding the required key's length for OpenSSL cipher operations.
 */
openssl_cipher_key_length("CHACHA20-POLY1305"); // 32
openssl_cipher_key_length("AES-128-GCM"); // 16
openssl_cipher_key_length("AES-256-GCM"); // 32


/**
 * Reset recorded peak memory usage: memory_reset_peak_usage
 * PHP 8.2 adds a new function named memory_reset_peak_usage that resets the peak memory usage returned by the memory_get_peak_usage function.
 *
 * This can be helpful in applications that invoke or iterate an action multiple times, and need to record the peak memory usage of each invocation. Without the ability to reset the memory usage with the new memory_reset_peak_usage function, the memory_get_peak_usage returns the absolute peak memory usage throughout the entire run.
 */