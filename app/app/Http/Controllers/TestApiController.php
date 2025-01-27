<?php

namespace App\Http\Controllers;

use App\Events\PublishedTestEvent;
use App\Events\TestEvent;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TestApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()
    {
        TestEvent::dispatch('test', 'test data');
    }

    /**
     * @throws \Throwable
     */
    public function testQueue()
    {
        $data = ['name' => 'John Doe', 'email' => 'email@example.com'];
        PublishedTestEvent::publish($data);
    }
}
