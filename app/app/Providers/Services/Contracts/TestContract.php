<?php

namespace App\Providers;

use App\Events\TestEvent;

interface TestContract {

    /**
     * @param TestEvent $event
     * @return mixed
     */
    public function validate(TestEvent $event);
}
