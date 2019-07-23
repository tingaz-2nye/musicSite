<?php 

    namespace App\Core;
    
    class Router
    {
        public static $routes = [
            "GET" => [],
            "POST" => []
        ];

        public static function load($file)
        {
            $router = new static;
            require $file;
            return $router;
        }

        public static function get($uri,$controller)
        {
            static::$routes['GET'][$uri] = $controller;
        }

        public static function post($uri,$controller)
        {
            static::$routes['POST'][$uri] = $controller;
        }

        public function direct($uri,$requestType)
        {
            if(array_key_exists($uri,static::$routes[$requestType]))
            {
                return 
                $this->callAction(

                    ...explode('@',static::$routes[$requestType][$uri])

                );
            }

            throw new Exception("Error Processing Request");
        }

        protected function callAction($controller,$action)
        {
            $controller = "App\\Controllers\\{$controller}";

            $controller = new $controller;

            if(!method_exists($controller,$action))
            {
                throw new Exception("{$controller} does not respond to action {$action}");
            }

            return $controller->$action();
        }

    }