<?php

namespace verheesj\KillTheBeesGame\Tests;

use PHPUnit\Framework\TestCase;
use verheesj\KillTheBeesGame\Base as Game;

/**
 * Class BaseTest
 * @package verheesj\KillTheBeesGame\Tests
 */
class BaseTest extends TestCase
{

    /**
     * __construct
     */
    public function testInstantiateObject()
    {
        $game = new Game();
        $this->assertIsObject($game);
    }

    /**
     *  start
     */
    public function testStart()
    {
        $game = new Game();
        $game->start();

        $this->assertSame($game->getGameState(), Game::STATE_STARTED);
    }

    /**
     *  setGameState
     */
    public function testSetGameState()
    {
        $game = new Game();
        $game->setGameState('TEST');
        $this->assertSame($game->getGameState(), 'TEST');
    }

    /**
     * getGameState
     */
    public function testGetGameState()
    {
        $game = new Game();
        $this->assertSame($game->getGameState(), Game::STATE_STARTED);
    }

    /**
     * score
     */
    public function testScore()
    {
        $game = new Game();

        // TODO: What a mess.
        // 0
        $game->score(); // + 1
        $game->score(); // + 1
        $game->score(); // + 1
        $game->score(); // + 1
        $game->score(); // + 1
        // = 5

        $this->assertIsInt($game->getScore(), 5);
    }

    /**
     * gameOver
     */
    public function testGameOver()
    {
        $game = new Game();
        $game->gameOver();

        $this->assertIsBool($game->isGameOver(), true);
    }

    /**
     * playing
     */
    public function testPlaying()
    {
        $game = new Game();
        $game->playing();

        $this->assertNotEquals($game->getGameState(), Game::STATE_GAMEOVER);
    }

    /**
     * getScore
     */
    public function testGetScore()
    {
        $game = new Game();

        $this->assertIsInt($game->getScore());
    }

    /**
     * getMessages
     */
    public function testGetMessages()
    {
        $game = new Game();
        $this->assertIsArray($game->getMessages());
    }

    /**
     * message
     */
    public function testMessage()
    {
        $game = new Game();
        $game->message('test');
        $this->assertArrayHasKey(0, $game->getMessages());
    }

    /**
     * isGameOver
     */
    public function testIsGameOver()
    {
        $game = new Game();
        $game->setGameState(Game::STATE_GAMEOVER);
        $this->assertIsBool($game->isGameOver(), true);
    }

}