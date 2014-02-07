<?php

class RegexRouter {
    
    private $routes = array();
    
    public function route($pattern, $callback) {
        $this->routes[$pattern] = $callback;
    }
    
    public function execute($uri) {
        foreach ($this->routes as $pattern => $callback) {
            if (preg_match($pattern, $uri, $params) === 1) {
                array_shift($params);
                return call_user_func_array($callback, array_values($params));
            }
        }
    }
    
}