<?php

namespace App\Providers;

use AltoRouter;

include_once BASE_PATH. "/app/Controllers/IndexController.php";

class RouteServiceProvider {

    Protected $routeMatch;
    Protected $targetMethod;
    Protected $targetController;

    function __construct(AltoRouter $route) {

        $this->routeMatch = $route->match();
        
        // If there any router matched;
        if ($this->routeMatch) {
            list($this->targetController, $this->targetMethod) = explode("@", $this->routeMatch['target']);
            $temp = new $this->targetController;
            die($temp);

            // $routeController = array(new $this->targetController, $this->targetMethod);
            // $routeParams = array($this->routeMatch['params']);
            // die("Hello World");
            // // Executing the controller;
            // if (is_callable($routeController)) {
            //     echo "Hello world";
                // Opening the Method inside the controller with the params;
                // call_user_func_array($routeController, $routeParams);
            // } else {
            //     echo "Method '{$this->targetMethod}' of controller '{$this->targetController}' not found !";
            // }

        }else {
            // Error 404 returned to user;
            header($_SERVER['SERVER_PROTOCOL']."404 Not Found");
            view('views/error/404NotFound');
        }

    }
}