<?php

namespace App\Fram\Factories;

use PDO;

class PDOFactory
{
    public static function getMysqlConnection()
    {
        $dsn = 'mysql:dbname=blogw2;host=127.0.0.1;charset=utf8';
        $user = 'root';
        $password = 'password';

        $db= new PDO($dsn,$user,$password);

        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

}