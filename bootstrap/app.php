<?php

use Smll\Bootstrap\App;

class Application {
    /**
     * Application constructor
     *
     */
    private function __construct()
    {

    }

    /**
     * Run the Application
     * @return void
     */
    public static function run()
    {
        /**
         * Define root path
         *
         */
        define('ROOT', realpath(__DIR__.'/..'));

        /**
         * Define directory separator
         *
         */
        define('DS', DIRECTORY_SEPARATOR);

        /**
         * Run the application
         *
         */
        App::run();
    }
}
