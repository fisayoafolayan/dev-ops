<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    protected $proxies = '*';

    /**
     * The headers that should be used to detect proxies.
     *
     * @var string
     */
    protected $headers = [
        Request::HEADER_CLIENT_IP => 'X_FORWARDED_FOR',
        Request::HEADER_FORWARDED    => null,
        Request::HEADER_CLIENT_HOST  => null,
        Request::HEADER_CLIENT_HOST  => 'X_FORWARDED_HOST',
        Request::HEADER_CLIENT_PROTO => 'X_FORWARDED_PROTO',
        Request::HEADER_CLIENT_PORT  => 'X_FORWARDED_PORT'
    ];
}
