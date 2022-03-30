<?php 

namespace Ismail1k\LaravelCart\Facades;

use Illuminate\Support\Facades\Facade;

class WishlistFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'wishlist';
    }
}