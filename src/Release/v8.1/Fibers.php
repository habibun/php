<?php

namespace Php\Migration\Php80To81;

$response = $httpClient->request('https://example.com/');
print json_decode($response->getBody()->buffer())['code'];


