<?php

namespace Connection;
use Dotenv;
require __DIR__ .'/../../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

use PDO;


class Connect{
    private static $pdo;

    public static  function connect(){
        self::$pdo = new PDO('mysql:host=localhost;dbname=apae',$_ENV['DB_USER'],$_ENV['DB_PASSWORD']);

        return self::$pdo;

    }
}


