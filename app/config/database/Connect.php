<?php

namespace Connection;

use PDO;


class Connect{
    private static $pdo;

    public static  function connect(){
        self::$pdo = new PDO('mysql:host=localhost;dbname=apae','root',null);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        return self::$pdo;

    }
}


