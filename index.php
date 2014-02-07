<?php

require_once 'RegexRouter.php';

$router = new RegexRouter();
$router->route('/^\/blog\/(\w+)\/(\d+)\/?$/', function($category, $id){
    print "category={$category}, id={$id}";
 });
$router->execute($_SERVER['REQUEST_URI']);