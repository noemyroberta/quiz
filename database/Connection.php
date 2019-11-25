<?php

class Connection {

    var $connection;

    public static function conect() {

        $db = "db_quiz";
        $username = "root";
        $host = "localhost";
        $password = "";

        $connection = new PDO("mysql:host=" . $host . ";dbname=" . $db .';charset=utf8', $username, $password);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $connection;
    }
}
