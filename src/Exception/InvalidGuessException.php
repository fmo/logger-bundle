<?php

namespace Fmo\LoggerBundle\Exception;

use Exception;

class InvalidGuessException extends Exception
{
    public function __construct(string $string)
    {
        parent::__construct($string, 500);
    }
}
