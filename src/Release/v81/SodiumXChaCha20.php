<?php

namespace Php\Release\v81;

class SodiumXChaCha20
{
    public function test()
    {
        $key = sodium_crypto_stream_xchacha20_keygen();
        $nonce = random_bytes(SODIUM_CRYPTO_STREAM_XCHACHA20_NONCEBYTES);

        $stream = sodium_crypto_stream_xchacha20(8, $nonce, $key);
        bin2hex($stream); // "27fa21568e076f7"

        $stream = sodium_crypto_stream_xchacha20(11, $nonce, $key);
        bin2hex($stream); // "727fa21568e076f7f496e4"

        $stream = sodium_crypto_stream_xchacha20(12, $nonce, $key);
        bin2hex($stream); // "727fa21568e076f7f496e4e9"
    }
}

$result = new SodiumXChaCha20();
$result->test();
