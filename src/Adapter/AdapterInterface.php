<?php

namespace Swoft\Http\Adapter;

use Psr\Http\Message\RequestInterface;
use Swoft\Http\HttpResultInterface;

/**
 * Http client adapter interface
 */
interface AdapterInterface
{

    /**
     * Send a http request
     *
     * @param RequestInterface $request
     * @param array            $options
     * @return HttpResultInterface
     */
    public function request(RequestInterface $request, array $options = []): HttpResultInterface;

    /**
     * Get the adapter default user agent
     *
     * @return string
     */
    public function getUserAgent(): string;
}
