<?php

namespace DecolipAkira\WooCommerce;

use Illuminate\Support\ServiceProvider;
use Automattic\WooCommerce\Client;

class WooCommerceServiceProvider extends ServiceProvider
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
        $this->app->singleton('automattic.woocommerce', function ($app) {
            return new Client(
                config('woocommerce')["url"],
                config('woocommerce')["consumer_key"],
                config('woocommerce')["consumer_secret"],
                config('woocommerce')["options"]
            );
        });

        $this->app->singleton('woocommerce', function ($app) {
            return new WooCommerceClient($this->app['automattic.woocommerce']);
        });
    }

    public function provides()
    {
        return ['woocommerce'];
    }
}
