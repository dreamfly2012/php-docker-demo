<?php

require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
    "driver" => "pdo_mysql",
    "host" => "127.0.0.1",
    "database" => "test",
    "username" => "root",
    "password" => "test"
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

