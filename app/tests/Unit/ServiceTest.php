<?php

namespace App\Providers\Services;

use App\Events\TestEvent;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testValidate()
    {
        $event = new TestEvent('test', 'test data');
        $service = new TestRabbitMQService();

        $this->assertTrue($service->validate($event));
    }
}
