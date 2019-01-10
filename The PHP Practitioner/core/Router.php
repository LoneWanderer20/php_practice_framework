<?php

namespace App\Core;

class Router
{
    protected $routes = [

        'GET' => [],
        'POST' => []

    ];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new \Exception('This route does not exist!');
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new \Exception(
                'This controller does not have this action!'
            );
        }
        return $controller->$action();
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }


    public static function load($page)
    {
        $router = new static;

        require $page;

        return $router;
    }
}
