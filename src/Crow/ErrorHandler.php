<?php declare(strict_types=1);

namespace Crow;

use Exception;
use LogicException;

class ErrorHandler
{



    public static function exceptionToBody(Exception|LogicException $exception): string
    {
        return "Uncaught Error: " . $exception->getMessage() .
            " on line " . $exception->getFile() . ":" . $exception->getLine() . PHP_EOL .
            $exception->getTraceAsString();
    }
}