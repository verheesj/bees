<?php

namespace verheesj\KillTheBeesGame\Game;

use verheesj\KillTheBeesGame\Base as BaseGame;
use verheesj\KillTheBeesGame\GameInterface;

/**
 * Class Game
 * @package verheesj\KillTheBeesGame\Game
 */
class Game extends BaseGame implements GameInterface
{
    /**
     * This is where we store our hive.
     * @var Hive
     */
    protected $hive;

    /**
     * Game constructor.
     * We pass the Hive to the Game object on construct
     * @param Hive $hive
     */
    public function __construct(Hive $hive)
    {
        // Call our Base __constructor
        parent::__construct();

        // Set the hive
        $this->hive = $hive;

        // Start the game
        $this->start();
    }

    /**
     * Hit is the function which gets called when the user HITS
     */
    public function hit(): void
    {
        // Check the health of the Hive
        $this->getHive()->checkHealth();

        // Get a random Bee from the hive
        if ($bee = $this->getHive()->getRandomBee()) {

            // Attack the Bee
            $bee->attack();

            // Tell the user the amount of damage to the Bee and the Bee Type
            $this->message("Direct Hit! You took {$bee->getDamage()} hit points from a {$bee->getType()}!");

            // If the Bee is dead
            if (!$bee->isAlive()) {

                // Tell the user that they have killed the Bee
                $this->message("{$bee->getType()} bee has been killed!");

                // If the flag for killAll is true, the game is over.
                if ($bee->getKillAll() === true) {
                    $this->gameOver();
                }

            }

            // Increment the users score by 1
            $this->score();
        }

        // If the game is over
        if ($this->isGameOver()) {

            // Output the final message to the user informing them of the score
            $this->message("It took {$this->getScore()} hits to defeat the Hive!");
        }
    }

    /**
     * Get the Hive object
     * @return object
     */
    public function getHive(): object
    {
        return $this->hive;
    }

    /**
     * Set the Hive to the given Hive object
     * @param $hive
     */
    public function setHive($hive): void
    {
        $this->hive = $hive;
    }

    /**
     * Game Over :(
     */
    public function gameOver(): void
    {
        // On game over, kill all the bees!
        $this->getHive()->killAll();

        // Call the parent gameOver() method.
        parent::gameOver();
    }

}
