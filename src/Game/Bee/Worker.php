<?php

namespace verheesj\KillTheBeesGame\Game\Bee;

use verheesj\KillTheBeesGame\Game\Bee;
use verheesj\KillTheBeesGame\Game\BeeInterface;

/**
 * Class Worker
 * @package verheesj\KillTheBeesGame\Game\Bee
 */
class Worker extends Bee implements BeeInterface
{
    /**
     * The "friendly" name of the type of Bee
     * @var string
     */
    protected $type = 'Worker';

    /**
     * The starting health points
     * @var int
     */
    protected $hp = 75;

    /**
     * The number of points of damaged when attacked
     * @var int
     */
    protected $damage = 10;
}
