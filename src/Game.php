<?php

namespace verheesj\KillTheBeesGame;

class Game implements GameInterface
{
    protected $messages = [];
    protected $score = 0;
    protected $state;

    public function __construct()
    {
        $this->start();
    }

    public function start(): void
    {
        $this->setGameState(SELF::STATE_STARTED);
    }

    public function setGameState($state): void
    {
        $this->state = $state;
    }

    public function score()
    {
        $this->score++;
    }

    public function gameOver(): void
    {
        $this->setGameState(SELF::STATE_GAMEOVER);
    }

    public function playing(): bool
    {
        return $this->state !== SELF::STATE_GAMEOVER;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getGameState(): string
    {
        return $this->state;
    }

    public function message($message): void
    {
        $this->messages[] = $message;
    }

    public function isGameOver(): bool
    {
        return $this->getGameState() === SELF::STATE_GAMEOVER;
    }

}
