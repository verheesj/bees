<?php

namespace verheesj\KillTheBeesGame\Game;

use verheesj\KillTheBeesGame\Interfaces\BeeInterface;

class Bee implements BeeInterface
{
    public $killAll = false;
    protected $type = null;
    protected $life = false;
    protected $hp = 0;
    protected $damage = 0;
    protected $health = 0;

    public function __construct()
    {
        $this->health = $this->hp;
        $this->life = true;
    }

    public function attack(): void
    {
        $this->health -= $this->damage;

        if ($this->health <= 0) {
            $this->die();
        }
    }

    public function die(): void
    {
        $this->health = 0;
        $this->life = false;
    }

    public function isAlive(): bool
    {
        return $this->life;
    }

    public function getHP(): int
    {
        return $this->hp;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getKillAll(): bool
    {
        return $this->killAll;
    }
}
