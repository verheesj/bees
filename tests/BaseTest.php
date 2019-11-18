<?php
namespace verheesj\KillTheBeesGame\Tests;

use verheesj\KillTheBeesGame\Base;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{

    public function testGetScore()
    {
        $game = new Base;
        $this->assertIsInt($game->getScore());
    }

    public function testScore()
    {
        $game = new Base;

        for($i = 0; $i < 10; $i++)
            $game->score();

        $this->assertEquals($game->getScore(), 10);
    }

    public function testMessage()
    {
        $game = new Base;
        $game->message('This is a test message');

        $this->assertIsBool(in_array("This is a test message", $game->getMessages()));
    }

    public function testPlaying()
    {
        $game = new Base;
        $game->playing();
        $this->assertIsBool($game->getGameState() !== Base::STATE_GAMEOVER);
    }

    public function testGameOver()
    {
        $game = new Base;
        $game->gameOver();
        $this->assertEquals($game->getGameState(), Base::STATE_GAMEOVER);
    }

    public function testGetMessages()
    {
        $game = new Base;
        $this->assertIsArray($game->getMessages());
    }

    public function testStart()
    {
        $game = new Base;
        $game->start();
        $this->assertEquals($game->getGameState(), Base::STATE_STARTED);
    }

    public function testSetGameState()
    {
        $game = new Base;
        $game->setGameState('test');
        $this->assertEquals($game->getGameState(), 'test');
    }

    public function testGetGameState()
    {
        $game = new Base;
        $this->assertEquals($game->getGameState(), Base::STATE_STARTED);
    }

    public function testIsGameOver()
    {
        $game = new Base;
        $this->assertIsBool($game->isGameOver());
    }
}
