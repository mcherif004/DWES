<?php

function conectaBD() {
    try {
        $dsn = "mysql:host=localhost;dbname=bd_superheroes";
        $db = new PDO($dsn,
        'mascotas', 'mascotas');
        $db-> setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
    return ($db);
    }
    catch (PDOException $e) {
        echo "Error conexión";
        exit();
    }
}

$db = conectaBD();
var_dump($db);