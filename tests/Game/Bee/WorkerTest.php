<?php

namespace verheesj\KillTheBeesGame\Tests\Game\Bee;

use PHPUnit\Framework\TestCase;
use verheesj\KillTheBeesGame\Game\Bee\Worker;

class WorkerTest extends TestCase
{
    /**
     * __construct
     */
    public function testInstantiateObject()
    {
        $drone = new Worker();
        $this->assertIsObject($drone);
    }
}