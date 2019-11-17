<?php

namespace verheesj\KillTheBeesGame\Game\Bee;

use verheesj\KillTheBeesGame\Game\Bee;
use verheesj\KillTheBeesGame\Game\BeeInterface;

class Queen extends Bee implements BeeInterface
{
    protected $type = 'Queen';
    protected $hp = 100;
    protected $damage = 8;

    public function __construct()
    {
        parent::__construct();

        $this->killAll = true;
    }
}
