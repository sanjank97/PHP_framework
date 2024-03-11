<?php

namespace PHP_framework\Config;

class router
{
    public static $routes = [];

    public static function post($action,$callback)
    {
        $action = trim($action, '/');
    
        self::$routes["POST/PHP_framework/".$action] = $callback;
        // echo "<pre>";
        // print_r(self::$routes);
        // die;

    }
    public static function get($action,$callback)
    {
        $action = trim($action, '/');        
        self::$routes["GET/PHP_framework/".$action] = $callback; 
    }
    public static function dispatch($action)
    {
        $request = trim($action, '/');    
        $action=$_SERVER['REQUEST_METHOD']."/".current(explode('?',$request));
        self::executeRoute($action);    
    }

    public static function executeRoute($action)
    {
        
        if(array_key_exists($action,self::$routes))
        {
            $callback = self::$routes[$action];  
            echo call_user_func($callback);
        }
      
    }
}
?>