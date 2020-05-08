<?php

use Philo\Blade\Blade;

/**
 * View(): It is used to return the view to the frontend 
 * resources. 
 */

 if(! function_exists('view')) {
    function view($path, array $data=[]) {
    
        $viewPath = __DIR__ . "/../../resources/views";
        
        $cachePath = __DIR__ . "/../../bootstrap/cache";
    
        $blade = new Blade($viewPath, $cachePath);
    
        echo $blade->view()->make($path, $data)->render();  
    
    }
 }