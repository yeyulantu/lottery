<?php

namespace mast;

class Application extends Container
{
    /**
     * mast version
     */
    const VERSION = '1.0.0';

    /**
     * Application constructor.
     */
    public function __construct()
    {

    }

    /**
     * boot application
     */
    public function run()
    {
        echo 'test';
    }

    public function initialize()
    {

    }
}