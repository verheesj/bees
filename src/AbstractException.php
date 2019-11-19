<?php namespace verheesj\KillTheBeesGame;

use Exception;

/**
 * Class AbstractException
 * Abstract exception class for the easy to create exceptions.
 *
 * @package verheesj\KillTheBeesGame
 */
abstract class AbstractException extends Exception implements ExceptionInterface
{
    /**
     * Exception message
     * @var string
     */
    protected $message = 'Unknown exception';
    /**
     * User-defined exception code
     * @var int
     */
    protected $code = 0;
    /**
     * Source filename of exception
     * @var
     */
    protected $file;
    /**
     * Source line of exception
     * @var
     */
    protected $line;
    /**
     * @var
     */
    private $string;
    /**
     * @var
     */
    private $trace;

    /**
     * CustomException constructor.
     *
     * @param  null  $message
     * @param  int  $code
     */
    public function __construct($message = null, $code = 0)
    {
        if (!$message) {
            throw new $this('Unknown '.get_class($this));
        }

        parent::__construct($message, $code);

    }

    public function __toString()
    {
        return get_class($this)." '{$this->message}' in {$this->file}({$this->line})\n"."{$this->getTraceAsString()}";
    }
}