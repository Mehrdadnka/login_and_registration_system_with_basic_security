<?php
    define('DB_HOST','localhost');
    define('DB_NAME','login_database');
    define('DB_USER','root');
    define('DB_PASS','');

    $string = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
    $conn = new PDO($string,DB_USER,DB_PASS);

    if(!$conn)
    {
        die("connection failed");
    }