<?php

    $driverName = "mysql";
    $serverName = "localhost";
    $user = "root";
    $password = "";
    $dbName = "escola";


    try {
        $conn = new PDO("$driverName:host=$serverName;dbname=$dbName", $user, $password);
    } catch (PDOException $err) {
        die("Connection failed: ". $err->getMessage());
    }