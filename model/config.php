<?php
    require_once(__DIR__ . "/database.php");
    $path = "/JuntillaK-Blog/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database ="blog_db";
    
    $connection = new Database($host, $username, $password, $database);