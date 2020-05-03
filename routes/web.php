<?php

/**
 * Website Routes ...
 * It contains basic website navigating routes. 
 * Path is of type - GET, POST.  
 */ 
 
 $route = new AltoRouter();
 
 $route->map("GET", "/", "/App/Controllers/IndexController@homePage", "home");
 $route->map("GET", "/about", "/App/Controllers/IndexController@aboutPage", "about");
