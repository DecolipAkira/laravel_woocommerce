<?php

namespace DecolipAkira\WooCommerce\Facades;

use Illuminate\Support\Facades\Facade;

class WooCommerce extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'woocommerce';
    }
}