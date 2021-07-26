<?php

namespace App\Events;

use Nuwber\Events\Event\Publishable;
use Nuwber\Events\Event\ShouldPublish;

class PublishedTestEvent implements ShouldPublish
{
    use Publishable;

    /**
     * @var array
     */
    private $array;
    /**
     * @var string
     */
    private $string;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function toPublish(): array
    {
        return [
            $this->array
        ];
    }

    public function publishEventKey(): string
    {
        return $this->publishEventName();
    }

    public function publishEventName(): string
    {
        return 'test_event';
    }
}
