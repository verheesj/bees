<?php

namespace verheesj\KillTheBeesGame\Tests\Game;

use PHPUnit\Framework\TestCase;
use verheesj\KillTheBeesGame\Game\Bee;
use verheesj\KillTheBeesGame\Game\Hive;

class HiveTest extends TestCase
{

    /**
     * __construct
     */
    public function testInstantiateObject()
    {
        $hive = new Hive();
        $this->assertIsObject($hive);
    }

    public function testCreate()
    {
        $hive = new Hive();
        $this->assertIsObject($hive->create(new Bee()));
    }

    public function testGetRandomBee()
    {
        $hive = new Hive();
        $hive->add( Bee::class, 10);
        $this->assertIsObject($hive->getRandomBee());
    }

    public function testKillAll()
    {
        $hive = new Hive;
        $hive->killAll();
        $this->assertIsBool(empty($hive->getBees()));
    }

    public function testGetBees()
    {
        $hive = new Hive;
        $this->assertIsArray($hive->getBees());
    }

    public function testAdd()
    {
        $hive = new Hive;
        $hive->add(Bee::class, 5);
        $hive->add(Bee::class, 5);
        $hive->add(Bee::class, 5);
        $this->assertArrayHasKey(2, $hive->getBees());


    }

    public function testCheckHealth()
    {
        $hive = new Hive;
        $hive->add(Bee::class, 5);
        $hive->add(Bee::class, 5);
        $hive->add(Bee::class, 5);
        $this->assertIsInt($hive->checkHealth());
    }
}
