<?php

class Container
{
    private static $instances = [];
    public static function make(string $interface){
        $repos = require "config/repositories.php";

        if (key_exists($interface , SELF::$instances)) {
            return SELF::$instances[$interface];
        }

        if (key_exists($interface , $repos)) {
            SELF::$instances[$interface] = new $repos[$interface]();
            return SELF::$instances[$interface];
        } else {
            throw new InvalidArgumentException("No binding exists");
        }
    }
}