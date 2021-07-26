<?php

namespace App\Providers;

use App\Listeners\TestRabbitMQListener;

class RabbitEventsServiceProvider extends \Nuwber\Events\RabbitEventsServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'test_event' => [
            TestRabbitMQListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
    }
}
