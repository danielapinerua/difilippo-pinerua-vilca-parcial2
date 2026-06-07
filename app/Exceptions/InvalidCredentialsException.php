<?php
namespace App\Exceptions;

use Exception;

class InvalidCredentialsException extends Exception
{
    public function __construct(string $message = "Credenciales incorrectas", $code = 0)
    {
        parent::__construct($message, $code);
    }
}
