<?php

namespace verheesj\KillTheBeesGame\Game;

use verheesj\KillTheBeesGame\Game as BaseGame;
use verheesj\KillTheBeesGame\GameInterface;

class Game extends BaseGame implements GameInterface
{
    protected $hive;

    public function __construct(Hive $hive)
    {
        parent::__construct();
        $this->hive = $hive;
        $this->start();
    }

    public function hit(): void
    {
        $this->getHive()->checkHealth();

        if ($bee = $this->getHive()->getRandomBee()) {

            $bee->attack();

            $this->message("Direct Hit! You took {$bee->getDamage()} hit points from a {$bee->getType()}!");

            if (!$bee->isAlive()) {
                $this->message("{$bee->getType()} bee has been killed!");

                if ($bee->getKillAll() === true) {
                    $this->gameOver();
                }

            }

            $this->score();
        }

        if ($this->isGameOver()) {
            $this->message("It took {$this->getScore()} hits to defeat the Hive!");
        }
    }

    public function getHive(): object
    {
        return $this->hive;
    }

    public function setHive($hive): void
    {
        $this->hive = $hive;
    }

    public function gameOver(): void
    {
        $this->getHive()->killAll();
        parent::gameOver();
    }

}
