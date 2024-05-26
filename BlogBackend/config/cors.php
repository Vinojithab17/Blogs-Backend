<?php
return [

/*
 |--------------------------------------------------------------------------
 | Laravel CORS Options
 |--------------------------------------------------------------------------
 |
 | The options for the CORS configuration are:
 |
 | - `supportsCredentials` (bool): Indicate whether to allow credentials.
 | - `allowedOrigins` (array): The origins that are allowed to make requests.
 | - `allowedOriginsPatterns` (array): Patterns to match origins against.
 | - `allowedHeaders` (array): The headers that are allowed to be sent.
 | - `allowedMethods` (array): The methods that are allowed to be used.
 | - `exposedHeaders` (array): The headers that are exposed to the browser.
 | - `maxAge` (int): The max age (in seconds) for the CORS request.
 |
 */

'paths' => ['*'],

'allowed_methods' => ['*'],

'allowed_origins' => ['http://localhost:3000'],

'allowed_origins_patterns' => [],

'allowed_headers' => ['*'],

'exposed_headers' => [],

'max_age' => 0,

'supports_credentials' => false,

];
