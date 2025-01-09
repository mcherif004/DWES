<?php require_once "vendor/autoload.php";

    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    define('DBHOST', 'localhost');
    define('DBNAME', 'localhost');
    define('DBUSER', 'localhost');
    define('DBPASS', 'localhost');
    define('DBPORT', 'localhost');

?>