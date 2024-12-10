<?php

    $driverName = "mysql";
    $serverName = "localhost";
    $user       = "root";
    $password   = "";
    $dbName     = "loja";

    $dsn = "$driverName:host=$serverName; dbname=$dbName;";

    $conn = new PDO($dsn, $user, $password);