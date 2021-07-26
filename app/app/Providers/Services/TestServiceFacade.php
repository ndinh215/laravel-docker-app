<?php

namespace App\Providers\Services;

use App\Providers\Services\Contracts\TestContract;
use Illuminate\Support\Facades\Facade;

class TestServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TestContract::class;
    }
}
