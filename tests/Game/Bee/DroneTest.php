<?php

namespace verheesj\KillTheBeesGame\Tests\Game\Bee;

use PHPUnit\Framework\TestCase;
use verheesj\KillTheBeesGame\Game\Bee\Drone;

class DroneTest extends TestCase
{
    /**
     * __construct
     */
    public function testInstantiateObject()
    {
        $drone = new Drone();
        $this->assertIsObject($drone);
    }
}