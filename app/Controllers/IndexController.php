<?php

/**
 * IndexController;
 */


namespace App\Controllers;

use App\Controllers\BaseController;

class IndexController extends BaseController{

    function homePage() {
        echo "Hi, IndexController -> homepage";
    }

    function aboutPage() {
        echo "Hi, IndexController -> aboutpage";
    }
}