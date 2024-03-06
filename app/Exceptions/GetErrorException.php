<?php

namespace App\Exceptions;

use Exception;

class GetErrorException extends Exception
{
    public function __construct($e = null)
    {
        parent::__construct($e->getMessage(), 400);
    }    
}
