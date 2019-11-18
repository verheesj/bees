<?php

namespace verheesj\KillTheBeesGame\Game;

/**
 * Interface HiveInterface
 * @package verheesj\KillTheBeesGame\Game
 */
interface HiveInterface
{
    public function add($type, $count);
    public function create($type);
}