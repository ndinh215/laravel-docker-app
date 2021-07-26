<?php

namespace App\Providers\Services\Contracts;

use App\Events\TestEvent;

interface TestContract
{

    /**
     * @param TestEvent $event
     * @return mixed
     */
    public function validate(TestEvent $event);
}
