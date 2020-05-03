<?php

namespace App\Helpers;

use Philo\Blade\Blade;

function view($path, array $data=[]) {
    
    $viewPath = __DIR__ . "/../../resources/views";
    
    $cachePath = __DIR__ . "/../../bootstrap/cache";

    $blade = new Blade($viewPath, $cachePath);

    echo $blade->view()->make($path, $data)->render();  

}


