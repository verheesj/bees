<?php

namespace verheesj\KillTheBeesGame\Exceptions;

use verheesj\KillTheBeesGame\AbstractException;

class HiveDoesNotExistException extends AbstractException
{
    protected $message = 'Hive does not exist';
}