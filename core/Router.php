<?php

namespace app\core;

class Router
{
    private Request $request;
    private array $routes = [];
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get(string $path, callable $callback): void
    {
        $this->routes['GET'][$path] = $callback;
    }

    public function resolve(): void
    {
        $method = $this->request->getMethod();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][$path];

        switch ($callback) {
            case is_callable($callback):
                echo call_user_func($callback);
                break;
            case is_string($callback):
                echo $callback;
            default:
                echo "route not found";
        }

    
    }

}