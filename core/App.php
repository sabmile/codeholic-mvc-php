<?php

namespace app\core;

class App {
    private Request $request;
    public Router $router;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run(): void
    {
        $this->router->resolve();
    }
}

