<?php

namespace App\Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $request_type)
    {
        if (array_key_exists($uri, $this->routes[$request_type])) {
            return $this->callAction(...explode('@', $this->routes[$request_type][$uri]));
        }

        throw new Exception('No routes defined for this');
    }

    public function callAction($controller, $action)
    {
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} does not respond to the {$action} action");
        }

        return $controller->$action();
    }
}
