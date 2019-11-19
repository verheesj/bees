<?php

namespace verheesj\KillTheBeesGame\Tests\Game\Bee;

use PHPUnit\Framework\TestCase;
use verheesj\KillTheBeesGame\Game\Bee\Queen;

class QueenTest extends TestCase
{
    /**
     * __construct
     */
    public function testInstantiateObject()
    {
        $drone = new Queen();
        $this->assertIsObject($drone);
    }
}