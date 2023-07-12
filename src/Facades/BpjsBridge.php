<?php

namespace Hanzoasashi\BpjsBridge\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hanzoasashi\BpjsBridge\BpjsBridge
 */
class BpjsBridge extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Hanzoasashi\BpjsBridge\BpjsBridge::class;
    }
}
