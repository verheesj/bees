<?php

namespace verheesj\KillTheBeesGame\Game;

/**
 * Class Hive
 * @package verheesj\KillTheBeesGame\Game
 */
class Hive implements HiveInterface
{
    /**
     * @var array
     */
    protected $bees = [];

    /**
     * @param $type
     * @param $count
     * @return array
     */
    public function add($type, $count): array
    {

        for ($i = 0; $i < $count; $i++) {

            if ($bee = $this->create($type)) {
                $this->bees[] = $bee;
            }
        }

        return $this->bees;
    }

    /**
     * @param $type
     * @return object
     */
    public function create($type): object
    {
        return new $type();
    }

    /**
     * @return int
     */
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

    /**
     *
     */
    public function killAll(): void
    {
        foreach ($this->bees as $bee) {
            $bee->die();
        }

    }

    /**
     * @return object
     */
    public function getRandomBee(): object
    {
        return $this->bees[array_rand($this->bees)];
    }

    /**
     * @return array
     */
    public function getBees(): array
    {
        return $this->bees;
    }

}
