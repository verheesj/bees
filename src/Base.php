<?php

namespace verheesj\KillTheBeesGame;

/**
 * This is the base game class. Like an abstract class without strictness in "abstract" status.
 *
 * @package verheesj\KillTheBeesGame
 */
class Base implements GameInterface
{
    /**
     * All output messages to the user are stored within the $messages array
     * @var array
     */
    protected $messages = [];

    /**
     * This is the score of number of hits
     * @var int
     */
    protected $score = 0;

    /**
     * This is the current game state. i.e. Gameover etc.
     * @var
     */
    protected $state;

    /**
     * Game constructor - start a new game by calling the start() method.
     */
    public function __construct()
    {
        $this->start();
    }

    /**
     * Start a new game, set the game state to const STATE_STARTED.
     */
    public function start(): void
    {
        $this->setGameState(SELF::STATE_STARTED);
    }

    /**
     * Method which sets the current games state
     * @param $state
     */
    public function setGameState($state): void
    {
        $this->state = $state;
    }

    /**
     * Increment the users score by one
     */
    public function score()
    {
        $this->score++;
    }

    /**
     * This function is when the game is over. It sets the Game state to const STATE_GAMEOVER
     */
    public function gameOver(): void
    {
        $this->setGameState(SELF::STATE_GAMEOVER);
    }

    /**
     * This is a callback for our game while loop. While you are "playing()"
     * This when this returns true, the game is in play, and when false; the game
     * is over
     * @return bool
     */
    public function playing(): bool
    {
        return $this->state !== SELF::STATE_GAMEOVER;
    }

    /**
     * Return the score of the player
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * Get the messages from the game
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * Get the current state of the game.
     * @return string
     */
    public function getGameState(): string
    {
        return $this->state;
    }

    /**
     * This method adds given $message to the $messages array for output to the player.
     * @param $message
     */
    public function message($message): void
    {
        $this->messages[] = $message;
    }

    /**
     * This method returns TRUE if the game is over.
     * @return bool
     */
    public function isGameOver(): bool
    {
        return $this->getGameState() === SELF::STATE_GAMEOVER;
    }

}
