<?php

namespace verheesj\KillTheBeesGame;

/**
 * Class Game
 * @package verheesj\KillTheBeesGame
 */
class Game implements GameInterface
{
    /**
     * @var array
     */
    protected $messages = [];
    /**
     * @var int
     */
    protected $score = 0;
    /**
     * @var
     */
    protected $state;

    /**
     * Game constructor.
     */
    public function __construct()
    {
        $this->start();
    }

    /**
     *
     */
    public function start(): void
    {
        $this->setGameState(SELF::STATE_STARTED);
    }

    /**
     * @param $state
     */
    public function setGameState($state): void
    {
        $this->state = $state;
    }

    /**
     *
     */
    public function score()
    {
        $this->score++;
    }

    /**
     *
     */
    public function gameOver(): void
    {
        $this->setGameState(SELF::STATE_GAMEOVER);
    }

    /**
     * @return bool
     */
    public function playing(): bool
    {
        return $this->state !== SELF::STATE_GAMEOVER;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @return string
     */
    public function getGameState(): string
    {
        return $this->state;
    }

    /**
     * @param $message
     */
    public function message($message): void
    {
        $this->messages[] = $message;
    }

    /**
     * @return bool
     */
    public function isGameOver(): bool
    {
        return $this->getGameState() === SELF::STATE_GAMEOVER;
    }

}
