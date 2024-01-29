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
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        return self::$pdo;

    }
}


