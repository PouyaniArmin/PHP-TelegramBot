<?php

namespace Utilities;

use Exception;

class ErrorHandler
{


    public static function throwException(string $message, int $code=0): void
    {

        throw new Exception($message, $code);
    }
}
