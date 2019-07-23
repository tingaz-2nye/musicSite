<?php 

    namespace App\Core;

    class App
    {
        public static $registryKey = [];

        public static function bind($key,$value)
        {
            static::$registryKey[$key] = $value;
        } 

        public static function get($key)
        {
            return static::$registryKey[$key];
        }
    }