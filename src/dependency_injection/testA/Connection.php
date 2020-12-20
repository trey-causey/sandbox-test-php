<?php namespace Sandbox\DI;


use PDO;

class Connection
{
    public static function make($something) {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=ergast;port=3307', 'root', 'Passw0rd!');
    } catch (\PDOException $e) {}
        die($e->getMessage());
    }

}