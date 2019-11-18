<?php

namespace verheesj\KillTheBeesGame\Tests\Game;

use PHPUnit\Framework\TestCase;
use verheesj\KillTheBeesGame\Game\Bee;

class BeeTest extends TestCase
{

    public function testDie()
    {
        $bee = new Bee();
        $bee->die();

        $this->assertEquals($bee->getHealth(), 0);
        $this->assertIsBool($bee->isAlive());
    }

    public function testGetType()
    {
        $bee = new Bee;
        $this->assertEquals($bee->getType(), 'Bee');
    }

    public function testAttack()
    {
        $bee = new Bee;
        $bee->attack();
        $this->assertEquals($bee->getHealth(), 0);
    }

    public function testGetHealth()
    {
        $bee = new Bee;
        $this->assertIsInt($bee->getHealth());
    }

    public function testIsAlive()
    {
        $bee = new Bee;
        $this->assertIsBool($bee->isAlive());
    }

    public function testGetHP()
    {
        $bee = new Bee;
        $this->assertIsInt($bee->getHP());
    }

    public function testGetKillAll()
    {
        $bee = new Bee;
        $this->assertIsBool($bee->getKillAll());
    }

    public function testGetDamage()
    {
        $bee = new Bee;
        $this->assertIsInt($bee->getDamage());
    }
}
