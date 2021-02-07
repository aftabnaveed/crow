<?php

declare(strict_types=1);

namespace Crow\Http\Server\Exceptions;

use LogicException;
use Throwable;

class InvalidServerType extends LogicException
{
    /**
     * InvalidServerType constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
