<?php

namespace App\Providers;

use App\Events\TestEvent;

class TestService implements \App\Providers\TestContract
{
    /**
     * @inheritDoc
     */
    public function validate(TestEvent $event)
    {
        echo("{$event->getEventType()}: {$event->getEventData()} \n");
    }
}
