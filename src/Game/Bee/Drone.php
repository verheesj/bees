<?php

namespace verheesj\KillTheBeesGame\Game\Bee;

use verheesj\KillTheBeesGame\Game\Bee;
use verheesj\KillTheBeesGame\Game\BeeInterface;

/**
 * Class Drone
 * @package verheesj\KillTheBeesGame\Game\Bee
 */
class Drone extends Bee implements BeeInterface
{
    /**
     * The "friendly" name of the type of Bee
     * @var string
     */
    protected $type = 'Drone';

    /**
     * The starting health points
     * @var int
     */
    protected $hp = 50;

    /**
     * The number of points of damaged when attacked
     * @var int
     */
    protected $damage = 12;
}
