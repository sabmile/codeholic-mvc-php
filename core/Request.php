<?php

namespace app\core;

class Request
{
    private string $path;
    
    public function getPath(): string
    {
        return $_SERVER['REDIRECT_URL'];
    }

    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}