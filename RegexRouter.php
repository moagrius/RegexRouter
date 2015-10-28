<?php

class RegexRouter {
    
  private $getroutes = array(), $postroutes=array();
    
  public function get ($pattern, $callback) {
        $this->getroutes[$pattern] = $callback;
    }

    public function post ($pattern, $callback) {
        $this->postroutes[$pattern] = $callback;
    }
    
    public function execute($uri) {
        foreach (($_SERVER['REQUEST_METHOD']==='POST' ? $this->postroutes : $this->getroutes)
        as $pattern => $callback) {
            if (preg_match($pattern, $uri, $params) === 1) {
                array_shift($params);
                return call_user_func_array($callback, array_values($params));
            }
        }
    }
    
}
