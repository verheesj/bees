<?php namespace verheesj\KillTheBeesGame;

interface ExceptionInterface
{
    // Exception message
    public function __construct($message = null, $code = 0);

    // User-defined Exception code

    public function getMessage();

    // Source filename

    public function getCode();

    // Source line

    public function getFile();

    // An array of the backtrace()

    public function getLine();

    // Formated string of trace

    public function getTrace();

    /* Overrideable methods inherited from Exception class */

    public function getTraceAsString();

    // formated string for display

    public function __toString();
}