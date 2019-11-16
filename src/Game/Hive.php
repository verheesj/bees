<?php

namespace verheesj\KillTheBeesGame\Game;

use verheesj\KillTheBeesGame\Interfaces\HiveInterface;

class Hive implements HiveInterface
{
    protected $bees = [];

    public function add($type, $count): array
    {

        for ($i = 0; $i < $count; $i++) {

            if ($bee = $this->create($type)) {
                $this->bees[] = $bee;
            }
        }

        return $this->bees;
    }

    public function create($type): object
    {
        return new $type();
    }

    public function checkHealth(): int
    {
        foreach ($this->bees as $key => $bee) {
            if (!$bee->isAlive()) {

                if ($bee->getKillAll() === true) {
                    $this->killAll();
                }

                unset($this->bees[$key]);
            }
        }

        return count($this->bees);
    }

    public function killAll(): void
    {
        foreach ($this->bees as $bee) {
            $bee->die();
        }

    }

    public function getRandomBee(): object
    {
        return $this->bees[array_rand($this->bees)];
    }

    public function getBees(): array
    {
        return $this->bees;
    }

}
