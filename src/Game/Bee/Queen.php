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
     * @var string
     */
    protected $type = 'Queen';
    /**
     * @var int
     */
    protected $hp = 100;
    /**
     * @var int
     */
    protected $damage = 8;

    /**
     * Queen constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->killAll = true;
    }
}
