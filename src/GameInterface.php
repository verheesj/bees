<?php

namespace verheesj\KillTheBeesGame;

/**
 * Interface GameInterface
 * @package verheesj\KillTheBeesGame
 */
interface GameInterface
{
    /**
     *
     */
    const STATE_STARTED = 'newGame';

    const STATE_GAMEOVER = 'gameOver';

    const STATE_PLAYING = 'playing';

    const ATTACK_ACTION = 'HIT';

    const ATTACK_INTRO = 'Type HIT to attack a bee!';
}