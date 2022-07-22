<?php

class Router
{
    private $routes = [];
    private $params = [];

    public function addRoute(string $route, array $params = [])
    {
        // Escape forward slashes
        $route = preg_replace('/\//', '\\/', $route);

        // Convert variables e.g. {controller}
        $route = preg_replace('/\{([a-z0-9]+)\}/', '(?P<\1>[a-z0-9-]+)', $route);

        // Convert variables with custom regular expressions e.g. {id:\d+} for numbers
        $route = preg_replace('/\{([a-z0-9]+):([^\}]+)\}/', '(?P<\1>\2)', $route);

        // Add start and end delimeter
        $route = '/^' . $route . '$/i';

        $this->routes[$route] = $params;
    }

}