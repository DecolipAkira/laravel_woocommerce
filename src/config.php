<?php

return [
    env('WOOCOMMERCE_URL'),
    env('WOOCOMMERCE_CONSUMER_KEY'),
    env('WOOCOMMERCE_CONSUMER_SECRET'),
    [
        'wp_api'            => env('WOOCOMMERCE_WP_API', null),
        'wp_api_prefix'     => env('WOOCOMMERCE_WP_API_PREFIX', null),
        'version'           => env('WOCOMMERCE_VERSION', 'v3'),
        'timeout'           => env('WOOCOMMERCE_TIMEOUT', 15),
        'verify_ssl'        => env('WOOCOMMERCE_VERIFY_SSL', true),
        'query_string_auth' => env('WOOCOMMERCE_QUERY_STRING_AUTH', false),
        'oauth_timestamp'   => env('WOOCOMMERCE_OAUTH_TIMESTAMP', time()),
        'user_agent'        => env('WOOCOMMERCE_USER_AGENT', 'WooCommerce API Client-PHP')
    ]
];