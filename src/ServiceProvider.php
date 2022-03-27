<?php

namespace Ismail1k\LaravelApiCart;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('cart', function(){
            return new Services\Cart;
        });
        $this->app->bind('wishlist', function(){
            return new Services\Wishlist;
        });
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}