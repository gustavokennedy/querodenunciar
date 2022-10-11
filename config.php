<?php 
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
    define('HOST', $_ENV["DB_HOST"]);
    define('USER', $_ENV["DB_USER"]);
    define('PASS', $_ENV["DB_PASS"]);
    define('BASE', $_ENV["DB_DATABASE"]);
$conn = new MySQLi(HOST,USER,PASS,BASE);