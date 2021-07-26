<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TestEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /** @var string */
    private $eventType;

    /** @var string */
    private $eventData;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($eventType, $eventData)
    {
        $this->eventType = $eventType;
        $this->eventData = $eventData;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * @return string
     */
    public function getEventData(): string
    {
        return $this->eventData;
    }
}
