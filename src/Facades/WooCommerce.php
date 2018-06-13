<?php

namespace DecolipAkira\Facades;

use Illuminate\Support\Facades\Facade;

class WooCommerce extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'woocommerce';
    }
}