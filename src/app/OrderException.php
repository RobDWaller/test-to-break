<?php

namespace App;

use Exception;

/**
 * Order specific exception
 *
 * @author Rob Waller <rdwaller1984@googlemail.com>
 */
class OrderException extends Exception
{
    public function __construct(string $message, int $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
