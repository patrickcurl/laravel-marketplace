<?php

namespace Zvive\LaravelMarketplace\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zvive\LaravelMarketplace\LaravelMarketplace
 */
class LaravelMarketplace extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Zvive\LaravelMarketplace\LaravelMarketplace::class;
    }
}
