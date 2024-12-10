<?php

    $driverName = "mysql";
    $serverName = "localhost";
    $user       = "root";
    $password   = "";
    $dbName     = "livraria";

    $dsn = "$driverName:host=$serverName; dbname=$dbName;";

    $conn = new PDO($dsn, $user, $password);