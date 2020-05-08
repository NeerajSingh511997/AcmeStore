<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class Database extends Capsule{

    public function __construct() {
        
        $agent = new Capsule;
        
        // Adding new Connection;
        $agent->addConnection([
            'driver'    => getenv('DB_DRIVER'),
            'host'      => getenv('DB_HOST'),
            'database'  => getenv('DB_NAME'),
            'username'  => getenv('DB_USERNAME'),
            'password'  => getenv('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        $agent->setAsGlobal();

        $agent->bootEloquent();

    }
}