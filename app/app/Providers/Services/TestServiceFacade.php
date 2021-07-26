<?php

namespace App\Providers\Services;

use App\Providers\Services\Contracts\TestContract;
use Illuminate\Support\Facades\Facade;

/**
 * @method static validate(\App\Events\TestEvent $event)
 */
class TestServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TestContract::class;
    }
}
