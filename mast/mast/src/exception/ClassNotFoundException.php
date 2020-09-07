<?php

namespace mast\exception;

use mast\Exception;

class ClassNotFoundException extends Exception
{
    public function __construct($message = "")
    {
        parent::__construct($message, 500);
    }
}