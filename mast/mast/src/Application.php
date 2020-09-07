<?php

namespace mast;

class Application extends Container
{
    /**
     * mast version
     */
    const VERSION = '1.0.0';

    protected $bind = [
        'response' => 'mast\Response',
    ];

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
        try {
            $this->make('response')->send();
        } catch (\Throwable $e) {

        }

    }

    public function initialize()
    {

    }

    /**
     * mast version
     * @return string
     */
    public function version()
    {
        return self::VERSION;
    }
}