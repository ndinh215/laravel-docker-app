<?php

namespace App\Providers\Services;

use App\Events\TestEvent;
use App\Providers\Services\Contracts\TestContract;

class TestService implements TestContract
{
    /**
     * @inheritDoc
     */
    public function validate(TestEvent $event)
    {
        echo("{$event->getEventType()} v2: {$event->getEventData()} \n");
    }
}
