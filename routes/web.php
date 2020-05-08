<?php

/**
 * Website Routes ...
 * 
 * It contains basic website navigating routes. 
 * Path is of type - GET, POST.  
 * 
 * Make sure to create route variable to store all the routes 
 * otherwise it will difficult to map the routes;
 * 
 */ 
 
 $route = new AltoRouter();
 
 $route->map("GET", "/", "\App\Controllers\IndexController@homePage", "home");
 $route->map("GET", "/about", "\App\Controllers\IndexController@aboutPage", "about");
