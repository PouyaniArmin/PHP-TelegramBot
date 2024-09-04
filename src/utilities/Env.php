<?php

namespace Utilities;

use Dotenv\Dotenv;

class Env
{
    private static $loaded = false;

    /**
     * Loads environment variables from the .env file.
     *
     * This method initializes the Dotenv library to load environment variables
     * from the .env file if they have not already been loaded.
     *
     * @return void
     */
    public static function load(): void
    {

        $path = dirname(dirname(__DIR__));
        if (!self::$loaded) {
            $dotenv = Dotenv::createImmutable($path);
            $dotenv->safeLoad();
            self::$loaded = true;
        }
    }
    /**
     * Retrieves an environment variable value.
     *
     * This method returns the value of the specified environment variable. If the variable is not set,
     * it returns the provided default value.
     *
     * @param string $key The name of the environment variable.
     * @param mixed $default The default value to return if the environment variable is not set.
     * @return mixed The value of the environment variable or the default value.
     */
    public static function get(string $key, $defualt = null)
    {
        self::load();
        return $_ENV[$key] ?? $defualt;
    }
    /**
     * Retrieves a required environment variable value.
     *
     * This method returns the value of the specified environment variable. If the variable is not set,
     * it throws an exception.
     *
     * @param string $key The name of the environment variable.
     * @return string The value of the environment variable.
     * @throws \Exception If the environment variable is not set.
     */
    public static function getRequired(string $key)
    {
        self::load();
        if (!isset($_ENV[$key])) {
            ErrorHandler::throwException("Environment variable '{$key}' is not set.");
        }
        return $_ENV[$key];
    }
}
