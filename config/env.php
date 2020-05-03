<?php
    /**
     *  Disclaimer: Package inside the "config" directory 
     * will be initialized by the 'init' file inside the 
     * bootstrap file.
     */

     // Dotenv Package 
     $dotEnv = \Dotenv\Dotenv::createImmutable(BASE_PATH);
     $dotEnv->safeLoad();

?>