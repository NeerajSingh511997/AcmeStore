<?php
     /**
      *  Defing Root Path of Project;
      */


      define('BASE_PATH', realpath(__DIR__ . '/../'));


     /**
      * Including the class files with namespace;
      */
      use App\Helpers\Helper\{view};
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
      * Loading Helpers global method;
      */
      require_once BASE_PATH . '/app/Helpers/Helpers.php';


      /**
       * Loading the project service providers;
       */

       require_once BASE_PATH . '/routes/web.php';
       new RouteServiceProvider($route);