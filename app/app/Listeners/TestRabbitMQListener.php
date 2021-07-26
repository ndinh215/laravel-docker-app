<?php

namespace App\Listeners;

class TestRabbitMQListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param string $event
     * @param array $payload
     * @return bool
     */
    public function handle(array $payload)
    {
        var_dump($payload);
        return true;
    }
}
