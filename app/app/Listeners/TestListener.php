<?php

namespace App\Listeners;

use App\Events\TestEvent;
use App\Providers\TestContract;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestListener implements ShouldQueue
{
    public $connection = 'redis';
    public $queue = 'events';

    /**
     * @var TestContract
     */
    private $testService;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(TestContract $testService)
    {
        $this->testService = $testService;
    }

    /**
     * Handle the event.
     *
     * @param  TestEvent  $event
     * @return void
     */
    public function handle(TestEvent $event)
    {
        $this->testService->validate($event);
    }
}
