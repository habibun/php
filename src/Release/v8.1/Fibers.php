<?php

namespace Php\Release\v81;

$response = $httpClient->request('https://example.com/');
print json_decode($response->getBody()->buffer())['code'];


