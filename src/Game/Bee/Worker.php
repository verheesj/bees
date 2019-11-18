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
     * @var string
     */
    protected $type = 'Worker';
    /**
     * @var int
     */
    protected $hp = 75;
    /**
     * @var int
     */
    protected $damage = 10;
}
