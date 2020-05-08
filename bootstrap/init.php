<?php
     /**
      *  Defing Root Path of Project;
      */

      define('BASE_PATH', realpath(__DIR__ . '/../'));


     /**
      * Including the class files with namespace;
      */      

      use App\Providers\RouteServiceProvider;

     /**
      *  Check if any session exist;
      */

      if (!isset($_SESSION)) {
          session_start();
      }

     /**
      *  Autoloading All the necessity packages; 
      */

      require_once BASE_PATH . "/vendor/autoload.php";
     
     /**
      * Loading the configuration files;
      */

      require_once BASE_PATH . '/config/env.php';

      /**
       * Loading Database configuration;
       */

      require_once BASE_PATH . '/config/database.php';
      new Database(); 
    
      /**
       * Loading the project service providers;
       */

      require_once BASE_PATH . '/routes/web.php';
      new RouteServiceProvider($route);