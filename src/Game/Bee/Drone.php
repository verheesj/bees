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
     * @var string
     */
    protected $type = 'Drone';
    /**
     * @var int
     */
    protected $hp = 50;
    /**
     * @var int
     */
    protected $damage = 12;
}
