<?php

namespace verheesj\KillTheBeesGame\Game\Bee;

use verheesj\KillTheBeesGame\Game\Bee;
use verheesj\KillTheBeesGame\Game\BeeInterface;

class Drone extends Bee implements BeeInterface
{
    protected $type = 'Drone';
    protected $hp = 50;
    protected $damage = 12;
}
