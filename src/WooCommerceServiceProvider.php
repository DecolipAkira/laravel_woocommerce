<?php

namespace DecolipAkira;

use Illuminate\Support\ServiceProvider;
use Automattic\WooCommerce\Client;

class WooCommerceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('woocommerce.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('woocommerce', function ($app) {
            return new Client(config('woocommerce'));
        });
    }

    public function provides()
    {
        return ['woocommerce'];
    }
}
