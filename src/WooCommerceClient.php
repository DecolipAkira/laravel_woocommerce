<?php

namespace DecolipAkira\WooCommerce;

use Automattic\WooCommerce\Client;

class WooCommerceClient
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function get($endpoint, $parameters = [])
    {
        return $this->client->get($endpoint, $parameters);
    }

    public function post($endpoint, $data)
    {
        return $this->client->get($endpoint, $data);
    }

    public function put($endpoint, $data)
    {
        return $this->client->put($endpoint, $data);
    }

    public function delete($endpoint, $parameters = [])
    {
        return $this->client->delete($endpoint, $parameters);
    }

    public function options($endpoint)
    {
        return $this->client->options($endpoint);
    }
    
    public function httpGetRequest()
    {
        return $this->client->http->getRequest();
    }

    public function httpGetResponse()
    {
        return $this->client->http->getResponse();
    }
}