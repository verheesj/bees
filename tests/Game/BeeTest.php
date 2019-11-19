<?php

namespace verheesj\KillTheBeesGame\Tests\Game;

use PHPUnit\Framework\TestCase;
use verheesj\KillTheBeesGame\Game\Bee;

/**
 * Class BeeTest
 * @package verheesj\KillTheBeesGame\Tests\Game
 */
class BeeTest extends TestCase
{

    /**
     * __construct
     */
    public function testInstantiateObject()
    {
        $bee = new Bee();
        $this->assertIsObject($bee);
    }

    /**
     * die
     */
    public function testDie()
    {
        $bee = new Bee();
        $bee->die();

        $this->assertEquals($bee->getHealth(), 0);
        $this->assertIsBool($bee->isAlive());
    }

    /**
     * getType
     */
    public function testGetType()
    {
        $bee = new Bee;
        $this->assertEquals($bee->getType(), 'Bee');
    }

    /**
     * attack
     */
    public function testAttack()
    {
        $bee = new Bee;
        $bee->attack();
        $this->assertEquals($bee->getHealth(), 0);
    }

    /**
     * getHealth
     */
    public function testGetHealth()
    {
        $bee = new Bee;
        $this->assertIsInt($bee->getHealth());
    }

    /**
     * isAlive
     */
    public function testIsAlive()
    {
        $bee = new Bee;
        $this->assertIsBool($bee->isAlive());
    }

    /**
     * getHP
     */
    public function testGetHP()
    {
        $bee = new Bee;
        $this->assertIsInt($bee->getHP());
    }

    /**
     * getKillAll
     */
    public function testGetKillAll()
    {
        $bee = new Bee;
        $this->assertIsBool($bee->getKillAll());
    }

    /**
     * getDamage
     */
    public function testGetDamage()
    {
        $bee = new Bee;
        $this->assertIsInt($bee->getDamage());
    }
}
