<?php

namespace verheesj\KillTheBeesGame;

class Game
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
        $this->setGameState('START');
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
        $this->setGameState('GAMEOVER');
    }

    public function reset(): void
    {
        $this->setGameState('RESET');
        $this->resetScore();
        $this->clearMessages();
    }

    public function resetScore(): void
    {
        $this->score = 0;
    }

    public function clearMessages(): void
    {
        $this->messages = [];
    }

    public function playing(): bool
    {
        return $this->state !== 'GAMEOVER';
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function message($message): void
    {
        $this->messages[] = $message;
    }

    public function isGameOver(): bool
    {
        return $this->getGameState() === 'GAMEOVER';
    }

    public function getGameState(): string
    {
        return $this->state;
    }
}
