<?php

use SilverStripe\Control\Middleware\HTTPMiddleware;
use SilverStripe\Control\HTTPRequest;

class CrossOriginMiddleware implements HTTPMiddleware
{
    public function process(HTTPRequest $request, callable $delegate)
    {
        // If you want normal behaviour to occur, make sure you call $delegate($request)
        $response = $delegate($request);

        // You can modify the response after it has been generated
        $response->addHeader('Access-Control-Allow-Origin', '*');

        // Don't forget to the return the response!
        return $response;
    }
}
