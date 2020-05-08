<?php

namespace App\Providers;

use AltoRouter;

class RouteServiceProvider {

    Protected $params;
    Protected $method;
    Protected $routeMatch;
    Protected $controller;

    function __construct(AltoRouter $route) {

        $this->routeMatch = $route->match();
        
        // If there any router matched;
        if ($this->routeMatch) {
            // Fetching route parameter from the routeMatch Array;
            $this->params = array($this->routeMatch['params']) ?? [];
            // Fetching CONTROLLER and METHOD from the routeMatch Array;
            list($this->controller, $this->method) = explode("@", $this->routeMatch['target']);
            
            $target = array(new $this->controller, $this->method);

            if (is_callable($target)) {
                // Opening the Method inside the controller with the params;
                call_user_func_array($target, $this->params);
            } else {
                echo "Exception: Method '{$this->targetMethod}' of controller '{$this->targetController}' not found !";
            }

        }else {
            // Error 404 returned to user;
            header($_SERVER['SERVER_PROTOCOL']."404 Not Found");
            view('error.404NotFound');

        }

    }
}