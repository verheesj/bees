<?php

namespace verheesj\KillTheBeesGame\Game;

use Exception;

/**
 * Class Hive
 * This class is responsible a BeeHive.
 *
 * @package verheesj\KillTheBeesGame\Game
 */
class Hive implements HiveInterface
{
    /**
     * Variable to store the the Bee objects
     * @var array
     */
    protected $bees = [];

    /**
     * Method which is responsible for adding $count of Bee.
     *
     * @param $type
     * @param $count
     *
     * @return array
     */
    public function add($type, $count): array
    {
        // Loop through given $count
        for ($i = 0; $i < $count; $i++) {
            // create the given object
            if ($bee = $this->create($type)) {
                // Add the new object to the Hive $bees array
                $this->bees[] = $bee;
            }
        }

        return $this->bees;
    }

    /**
     * Method which returns a new object of the given type
     * @param $type
     * @return object
     */
    public function create($type): object
    {
        try {
            $class = new $type();
            return $class;
        } catch (Exception $e) {
            return $e;
        }

    }

    /**
     * Method to check the health of the hive.
     * Loop through the Hive $bees array, on every iteration check the health of the Bee.
     * The health determines whether the Bee is alive or dead.
     * We unset the given Bee if it is dead so we know when they are all dead.
     * If the Bee is dead, we check $killAll, if TRUE, we invoke the function which kills all the Bee in the hive.
     *
     * @return int
     */
    public function checkHealth(): int
    {
        foreach ($this->bees as $key => $bee) {

            // If the Bee is dead
            if (!$bee->isAlive()) {

                // If the current type of Bee has the killAll flag (TRUE)
                if ($bee->getKillAll() === true) {

                    // We kill all the bees
                    $this->killAll();
                }

                // Remove the Bee from the Hive
                unset($this->bees[$key]);
            }
        }

        // Return the count of the Hive $bees array
        return count($this->bees);
    }

    /**
     * Kill all Bee within the Hive
     */
    public function killAll(): void
    {
        foreach ($this->bees as $bee) {
            // Kill the Bee
            $bee->die();
        }
    }

    /**
     * Get a random Bee from the Hive.
     * @return object
     */
    public function getRandomBee(): object
    {

        $randomKey = array_rand($this->bees);
        return $this->bees[$randomKey];
    }

    /**
     * Get all the Bee from the Hive
     * @return array
     */
    public function getBees(): array
    {
        return $this->bees;
    }

}
