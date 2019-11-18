<?php

namespace verheesj\KillTheBeesGame;

/**
 * Interface GameInterface
 * This is our GameInterface which is a contract to ensure that the methods in this interface
 * are implemented into all inherited Game classes.
 * @package verheesj\KillTheBeesGame
 */
interface GameInterface
{
    // New game state - upon execution
    const STATE_STARTED = 'newGame';
    // Game Over state - when the game is over
    const STATE_GAMEOVER = 'gameOver';
    // Playing state - when the game is in play
    const STATE_PLAYING = 'playing';
    // This is the name of the action - what the user types to play
    const ATTACK_ACTION = 'HIT';
    // This is what the user is presented on each turn
    const ATTACK_INTRO = 'Type HIT to attack a bee!';
}