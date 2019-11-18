<?php

namespace verheesj\KillTheBeesGame\Tests\Game;

use PHPUnit\Framework\TestCase;
use verheesj\KillTheBeesGame\Game\Bee\Drone;
use verheesj\KillTheBeesGame\Game\Bee\Queen;
use verheesj\KillTheBeesGame\Game\Bee\Worker;
use verheesj\KillTheBeesGame\Game\Game;
use verheesj\KillTheBeesGame\Game\Hive;

/**
 * Class Game
 * @package verheesj\KillTheBeesGame\Game
 */
class GameTest extends TestCase
{

    public function testHit()
    {

        $hive = new Hive();
        $hive->add( Queen::class, 1);
        $hive->add(Worker::class, 10);
        $hive->add(Drone::class, 10);

        $game = new Game($hive);

        while($game->playing())
        {
            $game->hit();
        }

        $this->assertIsBool($game->isGameOver(), TRUE);
    }

    public function testGetHive()
    {
        $hive = new Hive();
        $game = new Game($hive);

        $this->assertIsObject($game->getHive());
    }

    /**
     * @param $hive
     */
    public function testSetHive()
    {
        $hive = new Hive();
        $game = new Game($hive);
        $hive2 = new Hive();
        $game->setHive($hive2);
        $this->assertIsObject($game->getHive());
    }

    public function testGameOver()
    {
        $hive = new Hive;

        $hive->add( Queen::class, 1);
        $hive->add(Worker::class, 10);
        $hive->add(Drone::class, 10);

        $game = new Game($hive);

        $this->assertIsBool($game->isGameOver(), false);

        $game->gameOver();

        $this->assertIsBool($game->isGameOver(), true);
    }

}
