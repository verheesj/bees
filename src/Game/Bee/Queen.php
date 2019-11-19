<?php

namespace verheesj\KillTheBeesGame\Game\Bee;

use verheesj\KillTheBeesGame\Game\Bee;
use verheesj\KillTheBeesGame\Game\BeeInterface;

/**
 * Class Queen
 * @package verheesj\KillTheBeesGame\Game\Bee
 */
class Queen extends Bee implements BeeInterface
{
    /**
     * The "friendly" name of the type of Bee
     * @var string
     */
    protected $type = 'Queen';

    /**
     * The starting health points
     * @var int
     */
    protected $hp = 100;

    /**
     * The number of points of damaged when attacked
     * @var int
     */
    protected $damage = 8;

    /**
     * On creation of the Queen type of Bee
     */
    public function __construct()
    {

        // We need to call this to ensure the parent Bee class is called, else it will be overriden
        parent::__construct();

        // Set the killAll flag to TRUE, so when the Queen dies our method in the Hive can kill all the Bee
        $this->killAll = true;
    }
}
