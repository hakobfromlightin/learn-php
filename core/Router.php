<?php

namespace App\Core;

use Exception;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        if (!array_key_exists($uri, $this->routes[$method])) {
            throw  new Exception('No route defined for this URI');

        }

        $this->callAction(...explode('@', $this->routes[$method][$uri]));
    }

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        if(! method_exists($controller, $action)){
            throw  new Exception("{$controller} does not respond to the {$action} action");

        }

        return $controller->$action();
    }
}