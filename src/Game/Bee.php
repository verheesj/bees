<?php

namespace verheesj\KillTheBeesGame\Game;

/**
 * Class Bee
 * @package verheesj\KillTheBeesGame\Game
 */
class Bee implements BeeInterface
{
    /**
     * Kill all flag
     * @var bool
     */
    public $killAll = false;

    /**
     * The friendly name of a Bee
     * @var string
     */
    protected $type = 'Bee';

    /**
     * Flag whether the bee is alive, true for alive, false for dead
     * @var bool
     */
    protected $life = false;

    /**
     * The health points of the Bee
     * @var int
     */
    protected $hp = 0;

    /**
     * The attack damage when attacked
     * @var int
     */
    protected $damage = 0;

    /**
     * The "current" health of the bee
     * @var int
     */
    protected $health = 0;

    /**
     * Bee constructor.
     * Called when the Bee is created
     */
    public function __construct()
    {
        // The health is set to HP when the Bee is created
        $this->health = $this->hp;

        // The bee has been created, thus the Bee is alive!
        $this->life = true;
    }

    /**
     * Method when the Bee is attacked
     */
    public function attack(): void
    {
        // We take the damage from the Bee's health
        $this->health -= $this->damage;

        // If the health of the Bee is zero or less
        if ($this->health <= 0) {

            // The bee has died:
            $this->die();
        }
    }

    /**
     * The method kills the Bee by setting the health to 0 and life flag to false
     */
    public function die(): void
    {
        $this->health = 0;
        $this->life = false;
    }

    /**
     * Method returns true if the Bee is alive and false if it's dead
     * @return bool
     */
    public function isAlive(): bool
    {
        return $this->life;
    }

    /**
     * Get the Bee HP
     * @return int
     */
    public function getHP(): int
    {
        return $this->hp;
    }

    /**
     * Get the attack damage points
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * Get the name of the type of Bee
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Get the current health of the bee
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * Return bool on whether the Bee has the killAll flag set
     * @return bool
     */
    public function getKillAll(): bool
    {
        return $this->killAll;
    }
}
