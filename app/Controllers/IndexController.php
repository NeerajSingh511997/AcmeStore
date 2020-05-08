<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class IndexController extends BaseController{

    function homePage() {
        return view("website.index");
    }

    function aboutPage() {
        return view("website.about");
    }

}