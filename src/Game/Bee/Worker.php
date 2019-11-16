<?php

namespace verheesj\KillTheBeesGame\Game\Bee;

use verheesj\KillTheBeesGame\Game\Bee;
use verheesj\KillTheBeesGame\Interfaces\BeeInterface;

class Worker extends Bee implements BeeInterface
{
    protected $type = 'Worker';
    protected $hp = 75;
    protected $damage = 10;
}
