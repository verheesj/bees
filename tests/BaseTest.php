<?php

namespace verheesj\KillTheBeesGame\Tests;

use PHPUnit\Framework\TestCase;
use verheesj\KillTheBeesGame\Base as Game;

class BaseTest extends TestCase
{

    public function testInstantiateObject()
    {
        $game = new Game();
        $this->assertIsObject($game);
    }

    public function testStart()
    {
        $game = new Game();
        $game->start();

        $this->assertSame($game->getGameState(), Game::STATE_STARTED);
    }

    public function testSetGameState()
    {
        $game = new Game();
        $game->setGameState('TEST');
        $this->assertSame($game->getGameState(), 'TEST');
    }

    public function testGetGameState()
    {
        $game = new Game();
        $this->assertSame($game->getGameState(), Game::STATE_STARTED);
    }

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

    public function testGameOver()
    {
        $game = new Game();
        $game->gameOver();

        $this->assertIsBool($game->isGameOver(), true);
    }

    public function testPlaying()
    {
        $game = new Game();
        $game->playing();

        $this->assertNotEquals($game->getGameState(), Game::STATE_GAMEOVER);
    }

    public function testGetScore()
    {
        $game = new Game();

        $this->assertIsInt($game->getScore());
    }

    public function testGetMessages()
    {
        $game = new Game();
        $this->assertIsArray($game->getMessages());
    }

    public function testMessage()
    {
        $game = new Game();
        $game->message('test');
        $this->assertArrayHasKey(0, $game->getMessages());
    }

    public function testIsGameOver()
    {
        $game = new Game();
        $game->setGameState(Game::STATE_GAMEOVER);
        $this->assertIsBool($game->isGameOver(), true);
    }

}